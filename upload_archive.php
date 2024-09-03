<?php

require_once (dirname(__FILE__) . '/upload.php');

$debug = false;

$filename = 'archive.jsonl';

$count = 0;
$force = false;

/*
'http://bionames.org/sha1/a7bbdc144b32b143d8293df678cc7772756d91f2',
);
*/


$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$line = trim(fgets($file_handle));
	
	if (preg_match('/^{"id"/', $line))
	{
		$json = preg_replace('/,$/', '', $line);
	
		//echo $json;
	
		$obj = json_decode($json);
	
		//print_r($obj);
		
		$go = true;
		
		$url = 'http://bionames.org/sha1/' . $obj->id;
		
		if (source_url_in_db($url) && !$force)
		{
			//echo "Have $url already\n";
			$go = false;
		}
		
		// custom
		
		// bitstream lots of errors, missing or incomplete downloads
		// persee.fr
		// ingentaconnect
		// siamese-heritage.org
		// decapod
		// .cz/
		// samuseum lots of failures to find Object list, e.g. 265230f06688e809a58aa8ed826ff67319e6023c
		// www.rbg.vic.gov.au
		// socmexent
		
		
		if (!preg_match('/attelabidae/', $obj->value->urls[0]))
		{
			$go = false;
		}		
		
		// problematic PDFs
		if (in_array($obj->id, array(
			'341d8605d6618401b061faae205015845167c8ea',
			'574dba46bc651bb5e2bc7b23a9ee437bdf6c1c99',
			'5965bcbca332e37a156aabe20d667ee8422c6567',
			)))
		{
			$go = false;
		}				
		
		if ($go)
		{
			echo "Adding $url\n";
			$source = get_source_details($url, '', true, $debug);	
		
			$source->content_filename = $obj->id . '.pdf';
			$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
		
			$command = "curl -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";
			
			echo $command . "\n";
			system($command);
			
			store_pdf($source, $debug);
			
			$rand = rand(100000, 300000);
			echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
			usleep($rand);
			
			$count++;
			
			echo "[$count]\n";
		}
	}
	
	if ($count > 10000)
	{
		break;
	}
}

?>
