<?php

// Upload from Wayback machine
// Wayback machine is flaky, may have to try several times :(

require_once (dirname(__FILE__) . '/upload.php');

//----------------------------------------------------------------------------------------
// Find out whether we have a archive for a given URL
function wayback_have($url_to_archive)
{
	$url = 'http://archive.org/wayback/available?url=' . urlencode($url_to_archive);
	
	$url .= '&timestamp=' . time();
	
	//echo $url . "\n";
	
	$json = get($url);
	
	//echo $json;
	
	$data = json_decode($json);
	return $data;
}

//----------------------------------------------------------------------------------------
// Check whether URL redirects somewhere and get final destination
function get_final_url($url)
{
	$data = new stdclass;
	$data->original_url = $url;
	$data->code = 500;
	
	$url = str_replace(' ', '%20', $url);
		
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
	
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Accept: */*",
		"Accept-Language: en-gb",
		"User-agent: Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405" 	
		));
	
	
	//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "HEAD");
	
	$http_code = 500;
	
	$count = 0; 
	
	while (!in_array($http_code, array(200, 401, 404)) && ($count < 5))
	{	
		//echo "$http_code [$count] $url\n";
	
		//echo __LINE__ . "\n";
		
		$response = curl_exec($ch);
		
		//echo __LINE__ . "\n";

		if($response == FALSE) 
		{
			$errorText = curl_error($ch);
			curl_close($ch);
			die($errorText);
		}

		//echo __LINE__ . "\n";
	
		$info = curl_getinfo($ch);
		
		//print_r($info);
		
		//exit();
		 
		$header = substr($response, 0, $info['header_size']);

		//echo $header;	
		
		$header_rows = explode("\n", $header);
		
		$http_code = $info['http_code'];
		
		if ($http_code == 404)
		{
			// Not found
			$data->url = $url;
			$data->code = $http_code;
		}			

		if ($http_code == 401)
		{			
			// Not authorised
			$data->url = $url;
			$data->code = $http_code;
		}
		
		if ($http_code == 303)
		{
			$url = $info['redirect_url'];
			curl_setopt($ch, CURLOPT_URL, $url);
			
			$data->url = $url;
			$data->code = $http_code;
		}		
		
		if ($http_code == 302)
		{
			$url = $info['redirect_url'];
			curl_setopt($ch, CURLOPT_URL, $url);
			
			
			$data->url = $url;
			$data->code = $http_code;		
			
			// Singapore
			if (preg_match('/PageNotFound.aspx/', $url))
			{
				$data->code = 404;
			}
			
				
		}	
		
		if ($http_code == 301)
		{
			$url = $info['redirect_url'];
			
			if ($url == '')
			{
				foreach ($header_rows as $h)
				{
					if (preg_match('/^Location:\s+(?<url>.*)/', trim($h), $m))
					{
						$url = $m['url'];
						//echo "|$url|\n";
					}
				}
			
			}
			
			
			curl_setopt($ch, CURLOPT_URL, $url);
			
			$data->url = $url;
			$data->code = $http_code;
			
		}	
		
		if ($http_code == 200)
		{
			// Found
			$data->url = $url;
			$data->code = $http_code;
		}	
		

		
		$count++;				
	
	
	}

	return $data;


}


//----------------------------------------------------------------------------------------

$debug = false;

// Original site URL
$urls=array();

$urls=array(
'http://www.cassidae.uni.wroc.pl/Podanotum%20melanissimum.pdf',
);


$force = false;
//$force = true;

$parse_pdf = true; // default, will fail if PDF has problems
//$parse_pdf = false; // don't attempt to parse the PDF, use if PDFs are a bit ropey

foreach ($urls as $url)
{
	echo "\nurl=$url\n";
	
	$go = true;
	
	// 1. We may want to look for a redirect rather than the original URL
	
	// Use get_final is we follow redirects, http -> https, etc. Don't use it if
	// we are fetching links that are dead
	if (0)
	{
		$destination = get_final_url($url);
	}
	else
	{
		// Just use the original URL
		$destination = new stdclass;
		$destination->code = 200;
		$destination->url = $url;
	}

	// print_r($destination);
	
	if (in_array($destination->code, array(200,302)))
	{
		// 2. Does Wayback Machine have this?
		$available = wayback_have($destination->url);
		
		print_r($available);

		if (isset($available->archived_snapshots->closest->url))
		{
			// 3. Yes it does, check that we haven't already stored this Wayback URL
			if (source_parent_url_in_db($available->archived_snapshots->closest->url) && !$force)
			{
				echo "Have $url already\n";
				$go = false;
			}
	
			if ($go)
			{
				// 4. OK lets go get content from Wayback
			
				$source = new stdclass;
				// Wayback URL
				$source->parent_url = $available->archived_snapshots->closest->url;
				// Original source URL
				$source->url = $url;
			
				// convert to URL to URL that links directly to PDF
				$direct_url = preg_replace('/(https?:\/\/web.archive.org\/web\/\d+)\/(.*)$/', "$1if_/$2", $available->archived_snapshots->closest->url);
						
				$source->content_filename = get_filename_from_url($source->url, 'pdf');											
				$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
				
				// NOTE: we fetch just the PDF not the Wayback wrapper around it
				$command = "curl --insecure --max-time 1024 -k -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$direct_url'";
								
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
	}
}

?>
