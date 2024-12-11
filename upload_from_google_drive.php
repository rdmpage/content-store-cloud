<?php

// Google Drive URLs need to be reformatted

require_once (dirname(__FILE__) . '/upload.php');

$debug = false;

$urls = array(
'https://drive.google.com/file/d/15RVfMEVhoiqefQ-8PRI9cEjnkKSo9NEV/view?usp=sharing',
);

$force = false;
//$force = true;

$parse_pdf = true; // default, will fail if PDF has problems
//$parse_pdf = false; // don't attempt to parse the PDF, use if PDFs are a bit ropey

foreach ($urls as $url)
{
	echo "\nurl=$url\n";

	$go = true;
	
	if (source_parent_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
	else
	{
		if (preg_match('/drive.google.com\/file\/d\/(?<id>[^\/]+)\//', $url, $m))
		{
			$url = 'https://drive.usercontent.google.com/download?id=' . $m['id'] . '&export=download';

			if (source_url_in_db($url) && !$force)
			{
				echo "Have $url already\n";
				$go = false;
			}
		}
	}
		
	if ($go)
	{
		$source = get_source_details($url, '', true, $debug);	
	
		$source->content_filename = get_filename_from_url($url, 'pdf');	
		
		if (isset($source->{'content-disposition'}))
		{
			// this may cause problems if name has bad character encoding
			$content_disposition = $source->{'content-disposition'};
			
			$source->content_filename = sanitise_filename($content_disposition);
			if (!preg_match('/\.pdf$/i', $source->content_filename))
			{
				$source->content_filename .= '.pdf';
			}
		}
		
		$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
	
		if (1)
		{
			$source->url = str_replace("'", "%27", $source->url);
		
		
			// -k to override bad certificates
			// --max-time for slow connections
			$command = "curl --max-time 1024 -k -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";
		}
		else
		{
			$command = "curl_chrome116 -L  -o '$source->content_filename' '$source->url'";

			/*
			$command = "'/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'"
				. "  --headless --disable-gpu --dump-dom"
				. " --user-agent=\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.50 Safari/537.36\""
				. " '" . $source->url . "'"
				. ' > ' . $source->content_filename;
			*/
		}
		echo $command . "\n";
		
		system($command, $result_code);
		
		// check OK
		if ($result_code == 0)
		{
			$source->url = str_replace("%27", "'", $source->url);
			store_pdf($source, $parse_pdf, $debug);
		}
		
		$rand = rand(100000, 300000);
		echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}
}

?>
