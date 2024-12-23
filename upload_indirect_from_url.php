<?php

// Given a DOI or URL to a web page, fetch page, locate PDF and any additional information,
// and add to content store

require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once(dirname(__FILE__) . '/HtmlDomParser.php');
require_once(dirname(__FILE__) . '/upload.php');

use Sunra\PhpSimple\HtmlDomParser;

$debug = false;

$urls=array('https://www.worlddragonfly.org/article/13887890-2010-9748375/');

$force = false;
//$force = true;

$parse_pdf = true; // default, will fail if PDF has problems
//$parse_pdf = false; // don't attempt to parse the PDF, use if PDFs are a bit ropey

foreach ($urls as $url)
{
	$go = true;
	
	$have_pdf = false;
	
	if (preg_match('/^10\.\d+/', $url))
	{
		$url = 'https://doi.org/' . $url;
	}
	
	if (source_parent_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
	
	if (source_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
	if ($go)
	{
		echo "\nURL=$url\n\n";
	
		$html = get($url);
		
		//$html = substr($html, 0, 32000);
				
		// meta tags, need to convert to linked data for a subset of tags that
		// will add value
		$dom = HtmlDomParser::str_get_html($html);
		
		if ($dom)
		{	
			$source = new stdclass;
			$source->parent_url = $url;
			$source->url = $url;
			
			if (preg_match('/https?:\/\/(dx\.)?doi.org\/(?<doi>10\.\d+.*)/', $url, $m))
			{
				$source->doi = $m['doi'];
			}
			
			$ogurl = '';
				
			// meta
			foreach ($dom->find('meta') as $meta)
			{
				if (isset($meta->name))
				{
					echo $meta->name . ' ' . $meta->content . "\n";
				}

				if (isset($meta->property))
				{
					echo $meta->property . ' ' . $meta->content . "\n";
				}
				
				switch ($meta->name)
				{				
					case 'citation_doi':
					case 'bepress_citation_doi':
						$source->doi = $meta->content;
						break;
		
					case 'citation_title':
					case 'bepress_citation_title':
						$source->title = $meta->content;
						break;
						
					case 'citation_pdf_url':
					case 'bepress_citation_pdf_url':
					case 'citation_additional_version_url': // https://www.revistas.usp.br
						$source->url = $meta->content;
						$source->url = str_replace('&amp;', '&', $source->url);
						
						// https://www1.montpellier.inra.fr/CBGP/acarologia/article.php?id=4710
						$source->url = str_replace('inrae.r', 'inrae.fr', $source->url);
						
						$have_pdf = true;
						break;
						
					case 'dc.rights':
					case 'DC.rights':
						if (preg_match('/creativecommons.org/', $meta->content))
						{
							$source->license = $meta->content;
						}
						break;
							
					// J-STAGE
					case 'access_control':
						$source->license = $meta->content;
						break;
					
					case 'eprints.document_url':
						if (preg_match('/\.pdf$/', $meta->content))
						{
							$source->url = $meta->content;
							$have_pdf = true;
						}
						break;
												
					default:
						break;
				}
				
				// e.g. https://catalog.lib.kyushu-u.ac.jp/opac_detail_md/?lang=1&amode=MD100000&bibid=2398
				// key info such as DOI and access rights are in table
				switch ($meta->property)
				{				
					case 'citation_doi':
						$source->doi = $meta->content;
						break;
						
					case 'citation_pdf_url':
						$source->url = $meta->content;
						$source->url = str_replace('&amp;', '&', $source->url);
						
						$have_pdf = true;
						break;
						
					case 'og:url':
						$ogurl = $meta->content;
						break;					
						
					default:
						break;
				}
							
			}
			
			// license------------------------------------------------------------------------
			
			// Figshare
			foreach ($dom->find('div a') as $a)
			{
				if (preg_match('/rightsstatements.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
	
			// https://www.nmnhs.com/
			foreach ($dom->find('div a[rel=license noopener]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// PLoS
			foreach ($dom->find('div[class=articleinfo] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// SciElo
			foreach ($dom->find('div[class=container-license] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// Springer
			foreach ($dom->find('div[id=rightslink-content] a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// Acarologia
			foreach ($dom->find('div a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
	
			// https://jibs.modares.ac.ir/article-36-76913-en.html
			foreach ($dom->find('td a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
	
			// https://natuurtijdschriften.nl/pub/1008066
			foreach ($dom->find('p[class=inline_md] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// https://revistas.ucm.es/index.php/MBOT/article/view/79286
			foreach ($dom->find('div[class=pkp_block block_custom] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// PMC
			foreach ($dom->find('div[class=license half_rhythm] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// Hystrix
			foreach ($dom->find('div[class=articleTopInner] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// https://oldri.ues.edu.sv
			foreach ($dom->find('td[valign=top] span[class=ep_document_citation] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}

			// https://www.eje.cz/artkey/eje-200002-0017_Cladistic_systematics_of_the_genus_Amphimallon_Coleoptera_Scarabaeidae_Melolonthinae.php
			foreach ($dom->find('p[class=ctr ccinfo] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// https://www.ujecology.com/abstract/first-data-of-cossidae-lepidoptera-of-the-central-african-republic-5563.html
			foreach ($dom->find('p a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			
			// DOI----------------------------------------------------------------------------
	
			// https://www.nmnhs.com/
			foreach ($dom->find('div[class=box_emph_e] a') as $a)
			{
				if (preg_match('/\/(10.48027.*)/', $a->href, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}
			
			// https://www.aemnp.eu
			foreach ($dom->find('div[class=articleDetailDoi] a') as $a)
			{
				if (preg_match('/\/(10.1515.*)/', $a->href, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}
			
			/*
			<div class="views-field views-field-biblio-doi">    <span class="views-label views-label-biblio-doi">doi: </span>    <span class="field-content">https://doi.org/10.26028/cybium/2023-034</span>  </div> */
			foreach ($dom->find('div[class=views-field views-field-biblio-doi] span[class=field-content]') as $span)
			{
				if (preg_match('/\/(10.26028.*)/', $span->plaintext, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}
			
			// https://www.worlddragonfly.org/article/13887890-2010-9748375/
			foreach ($dom->find('div[class=sqs-block-content] p a') as $a)
			{				
				if (preg_match('/https?:\/\/doi.org\/(.*)/', $a->href, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}

	
			// PDF----------------------------------------------------------------------------
			
			if (!$have_pdf)
			{
				// if PDF link not given in standard metadata go fishing
				foreach ($dom->find('li[class=article__navbar__col] a[aria-label= PDF]') as $a)
				{
					if (preg_match('/epdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}
		
				// https://www.zin.ru/journals/trudyzin
				foreach ($dom->find('p[class=paper_pdf] a[id=download_pdf]') as $a)
				{
					if ($ogurl != '' && preg_match('/trudyzin/', $ogurl))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = str_replace('../', 'https://www.zin.ru/journals/trudyzin/', $a->href);
					}				
				}
				
				foreach ($dom->find('a[id=download_pdf]') as $a)
				{								
					if ($ogurl != '' && preg_match('/zsr/', $ogurl))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = preg_replace('/^\.\//', 'https://www.zin.ru/journals/zsr/', $a->href);
					}				
				}
				
				
				// kmkjournals.com
				foreach ($dom->find('div[class=col-xs-9] p a') as $a)
				{
					if (preg_match('/\/upload\/PDF\/ArthropodaSelecta\//', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://kmkjournals.com/' . $a->href;
					}
					if (preg_match('/\/upload\/PDF\/RJT\//', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://kmkjournals.com/' . $a->href;
					}
				}
		
				// acarina
				foreach ($dom->find('div[class=b-docs-item] a') as $a)
				{
					if (preg_match('/\/upload\/.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://acarina.utmn.ru' . $a->href;
					}
				}		
				
				// taprobanica
				foreach ($dom->find('div[itemtype=http://schema.org/Thing] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}		
		
				// taprobanica
				foreach ($dom->find('div[itemtype=http://schema.org/SaleEvent] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
		
				foreach ($dom->find('div[style=text-align:right] strong a') as $a)
				{
					if (preg_match('/www.binran.ru.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
				
				// Elsevier (doesn't work)
				foreach ($dom->find('li[class=ViewPDF] a') as $a)
				{
					//$source->url = 'https://www.sciencedirect.com' . $a->href;
				}
				
				// Taiwania
				foreach ($dom->find('input[name=pdfdownload]') as $input)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = 'https://taiwania.ntu.edu.tw/pdf/' . $input->file;
				}	
				
				// https://karstenia.fi
				foreach ($dom->find('div[class=entry-content] a[class=pdf-ikoni]') as $a)
				{
					if (preg_match('/www.funga.fi.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
						$source->url = str_replace(' ', '%20', $source->url);
					}
				}	
				
				// PMC
				foreach ($dom->find('li[class=pdf-link other_item] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.ncbi.nlm.nih.gov' . $a->href;
					}
				}	
				
				// Ingenta (fails due to CDN)
				foreach ($dom->find('ul[class=right-col-download contain] li a') as $a)
				{
					if (preg_match('/pdf/', $a->{'data-popup'}))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.ingentaconnect.com' . str_replace('&amp;', '&', $a->{'data-popup'});
					}
				}	
	
				foreach ($dom->find('div[class=media-wrapper clearfix row] a') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
	
				foreach ($dom->find('div[class=row] div[class=col-sm-9] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						foreach ($dom->find('base') as $base)
						{
							if (isset($base->href))
							{
								echo "PDF matched line [" . __LINE__ . "]\n";
								$source->url = $base->href . $a->href;
								$source->url = str_replace('//', '/', $source->url);
							}
						}
					}
				}	
	
				// Hystrix
				foreach ($dom->find('div[class=abstractButtons] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
				
				// https://www.aemnp.eu
				foreach ($dom->find('div[class=articleAttachment row] a') as $a)
				{
					if (preg_match('/\/data\/article.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.aemnp.eu' . $a->href;
					}
				}	
				
				// Smithsonian Handle
				foreach ($dom->find('div[class=file-link] a') as $a)
				{
					if (preg_match('/.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://repository.si.edu' . $a->href;
					}
				}	
	
				foreach ($dom->find('div[class=wp-block-file] a') as $a)
				{
					if (preg_match('/uploads.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
				
				// https://oldri.ues.edu.sv
				foreach ($dom->find('td[valign=top] a[class=ep_document_link]') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}
				
				// https://www.senckenberg.de/de/wissenschaft/publikationen/wissenschaftliche-zeitschriften/vertebrate-zoology/archiv/2019-69-2/vz-69-2-02/
				foreach ($dom->find('p a') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						
						// Do we have a complete URL
						if (preg_match('/^http/', $a->href))
						{
							$source->url = $a->href;
						}
						else
						{
							// Nope, so try and fix this
							if ($ogurl != '')
							{
								if (preg_match('/worlddragonfly/', $ogurl))
								{
									$source->url = 'https://www.worlddragonfly.org' . $a->href;
								}
							}
						}
					}
				}
				
				// https://sfi-cybium.fr/fr/review-butis-teleostei-butidae-indo-pacific-islands-description-three-new-species
				foreach ($dom->find('iframe[class=pdf]') as $iframe)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = $iframe->plaintext;
				}
			
				// https://biosoil.ru/FEE/Publication/2678
				foreach ($dom->find('p a') as $i)
				{
					if (preg_match('/storage\/entities.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://biosoil.ru' . $a->href;
					}
				}
				
				// https://www.ujecology.com/abstract/first-data-of-cossidae-lepidoptera-of-the-central-african-republic-5563.html
				foreach ($dom->find('nav a[class=nav-link]') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}
				
				// https://www.degruyter.com/pub/doi/10.1515/mammalia-2013-0101/html
				foreach ($dom->find('div[class=alternateForms d-none] a') as $a)
				{
					if (preg_match('/pdf\?licenseType=free/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.degruyter.com' . $a->href;
						$source->license =  "free";
					}
				}
				
				// http://publication.nhmus.hu/folent/cikkreszletes.php?idhoz=7152
				foreach ($dom->find('div p form input[name=filen]') as $input)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = $input->value;
				}

				// mnhn.fr
				foreach ($dom->find('a[title=Download full article in PDF format]') as $a)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = 'https://sciencepress.mnhn.fr' . $a->href;
					
					foreach ($dom->find('p a[title=DOI (Digital Object Identifier)]') as $a)
					{
						if (preg_match('/https?:\/\/doi.org\/(.*)/', $a->href, $m))
						{
							$source->doi = $m[1];
						}
					}
				}
				
				/*
				// http://entsocjournal.yabee.com.tw/Preview.aspx?SendDOI=10.6660/TESFE.2000024
				foreach ($dom->find('div a') as $a)
				{
					if (preg_match('/pdf/i', $a->href))
					{
						$source->url = 'http://entsocjournal.yabee.com.tw' . $a->href;
					}
				}
				*/
			
				foreach ($dom->find('a[class=basteriabutton]') as $a)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					if (preg_match('/pdf/i', $a->href))
					{
						$source->url = $a->href;
					}
				}
									
			}					
					
																		
			//----------------------------------------------------------------------------
			
			if ($source->url != $url)
			{
				$source->url = str_replace(' ', '%20', $source->url);
			
				$source->content_filename = get_filename_from_url($source->url, 'pdf');											
				$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
			
			
				if (1)
				{
					//$command = "curl -L -o '$source->content_filename' '$source->url'";
					
					// see also https://stackoverflow.com/questions/56413290/getting-curl-92-http-2-stream-1-was-not-closed-cleanly-internal-error-err
					
					$command = "curl --insecure --max-time 1024 -k -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";
				}
				else
				{
		//			$command = "curl_chrome116 -L  -o '$source->content_filename' '$source->url'";
		
				
					$command = "'/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'"
						. "  --headless --disable-gpu --dump-dom"
						. " --user-agent=\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.50 Safari/537.36\""
						. " '" . $source->url . "'"
						. ' > ' . $source->content_filename;
				
				}
				
				
				$result_code = 0;
				
				echo $command . "\n";
				system($command, $result_code);
				
				// check OK
				if ($result_code == 0)
				{
					store_pdf($source, $parse_pdf, $debug);
				}
				
				$rand = rand(100000, 300000);
				echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
				usleep($rand);
			}
			
		}
		else
		{
			echo "Could not parse HTML\n";
			exit();
		}
	}
}

?>
