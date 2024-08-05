<?php

// Given a DOI or URL to a web page, fetch page, locate PDF and any additional information,
// and add to content store

require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once(dirname(__FILE__) . '/HtmlDomParser.php');
require_once(dirname(__FILE__) . '/upload.php');

use Sunra\PhpSimple\HtmlDomParser;


//----------------------------------------------------------------------------------------
function get($url)
{	
	$data = null;

	$opts = array(
	  CURLOPT_URL =>$url,
	  CURLOPT_FOLLOWLOCATION => TRUE,
	  CURLOPT_RETURNTRANSFER => TRUE,
	  
	  CURLOPT_HEADER 		=> FALSE,
	  
	  CURLOPT_SSL_VERIFYHOST=> FALSE,
	  CURLOPT_SSL_VERIFYPEER=> FALSE,
	  
	  CURLOPT_COOKIEJAR=> sys_get_temp_dir() . '/cookies.txt',
	  CURLOPT_COOKIEFILE=> sys_get_temp_dir() . '/cookies.txt',
	  
	);

	$opts[CURLOPT_HTTPHEADER] = array(
		"Accept: */*", 
		"Accept-Language: en-gb",
		"User-agent: Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405" 
	);
	
	$ch = curl_init();
	curl_setopt_array($ch, $opts);
	$data = curl_exec($ch);
	$info = curl_getinfo($ch); 
	curl_close($ch);
	
	return $data;
}

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

'https://journals.co.za/doi/abs/10.10520/AJA10115498_193',
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
					
				case 'citation_pdf_url':
					$source->url = $meta->content;
					$source->url = str_replace('&amp;', '&', $source->url);
					break;
					
				case 'dc.rights':
					if (preg_match('/creativecommons.org/', $meta->content))
					{
						$source->license = $meta->content;
					}
					break;
					
				default:
					break;
			}
		}
		
		// license?
		
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

		// PDF
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
			$source->pdf_filename = get_filename_from_url($source->url);					
			$source->pdf_filename = $config['tmp'] . '/' . $source->pdf_filename;
		
			$command = "curl -L -o '$source->pdf_filename' '$source->url'";
			echo $command . "\n";
			system($command);
			
			store_pdf($source, $debug);
			
			$rand = rand(100000, 300000);
			echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
			usleep($rand);
		}
		
	}
	
}

?>
