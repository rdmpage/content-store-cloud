<?php

// Given a DOI or URL to a web page, fetch page, locate PDF and any additional information,
// and add to content store

require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once(dirname(__FILE__) . '/HtmlDomParser.php');
require_once(dirname(__FILE__) . '/upload.php');

use Sunra\PhpSimple\HtmlDomParser;




$debug = false;


$urls=array(
//'https://doi.org/10.1590/S0074-02762001000300007',
//'https://www.parasite-journal.org/articles/parasite/abs/1996/02/parasite1996032p193/parasite1996032p193.html',
//'https://dx.doi.org/10.1590/S0074-02761982000400008',
//'https://parasitesandvectors.biomedcentral.com/articles/10.1186/1756-3305-1-22',

//'https://doi.org/10.1590/1809-43921981114847',
//'https://doi.org/10.1051/parasite/1980556707',

//'http://www.scielo.br/scielo.php?script=sci_arttext&pid=S0074-02761988000400005&lng=en&tlng=en',

//'https://doi.org/10.13189/ujar.2017.050207',

//'https://journals.co.za/doi/abs/10.10520/AJA10115498_193', // fail
//'https://dx.doi.org/10.1186/1471-2148-10-386',
//'https://dx.doi.org/10.1371/journal.pone.0111895',

//'https://doi.org/10.11369/jji1950.31.20',

//'https://doi.org/10.5109/2398',

//'https://www.ajol.info/index.php/az/article/view/154245',

//'https://doi.org/10.26749/NGXY8257',


//'https://doi.org/10.1371/journal.pone.0133602',

//'http://hdl.handle.net/2115/63995',

//'https://www.nmnhs.com/historia-naturalis-bulgarica/article.php?id=000536000462024',

//'https://www1.montpellier.inra.fr/CBGP/acarologia/article.php?id=4710',

//'https://rosa.uniroma1.it/rosa02/fragmenta_entomologica/article/view/1576',
//'https://doi.org/10.48027/hnb.45.121',
//'https://dx.doi.org/10.1017/S0031182024000088', // failed to parse HTML

//'https://doi.org/10.15407/zoo2024.02.163',

//'http://hdl.handle.net/2115/9323',

//'https://doi.org/10.26515/rzsi/v1/i2/1907/163366',

//'https://doi.org/10.20848/kontyu.16.3_183',

//'https://doi.org/10.26515/rzsi/v9/i4/1913/163661',

//'https://zenodo.org/records/5643781',
//'https://doi.org/10.5281/zenodo.6477283',

//'https://hdl.handle.net/2115/9357',

//'https://hdl.handle.net/2027.42/56942',

//'https://www.contributions-to-entomology.org/article/view/2067',

'https://doi.org/10.20643/00001606',
);


foreach ($urls as $url)
{
	$html = get($url);
		
	// meta tags, need to convert to linked data for a subset of tags that
	// will add value
	$dom = HtmlDomParser::str_get_html($html);
	
	if ($dom)
	{	
		$source = new stdclass;
		$source->url = $url;
			
		// meta
		foreach ($dom->find('meta') as $meta)
		{
			echo $meta->name . ' ' . $meta->content . "\n";
			
			switch ($meta->name)
			{				
				case 'citation_doi':
					$source->doi = $meta->content;
					break;
	
				case 'citation_title':
					$source->title = $meta->content;
					break;
					
				case 'citation_pdf_url':
					$source->url = $meta->content;
					$source->url = str_replace('&amp;', '&', $source->url);
					
					// https://www1.montpellier.inra.fr/CBGP/acarologia/article.php?id=4710
					$source->url = str_replace('inrae.r', 'inrae.fr', $source->url);
					break;
					
				case 'dc.rights':
					if (preg_match('/creativecommons.org/', $meta->content))
					{
						$source->license = $meta->content;
					}
					break;

				// J-STAGE
				case 'access_control':
					$source->license = $meta->content;
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

		// PDF----------------------------------------------------------------------------
		foreach ($dom->find('li[class=article__navbar__col] a[aria-label= PDF]') as $a)
		{
			if (preg_match('/epdf/', $a->href))
			{
				$source->url = $a->href;
			}
		}
		
		print_r($source);
		
		if ($source->url != $url)
		{
			$source->content_filename = get_filename_from_url($source->url, 'pdf');											
			$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
		
			$command = "curl -L -o '$source->content_filename' '$source->url'";
			echo $command . "\n";
			system($command);
			
			store_pdf($source, $debug);
			
			$rand = rand(100000, 300000);
			echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
			usleep($rand);
		}
		
	}
	else
	{
		echo "Could not parse HTML\n";
	}
	
}

?>
