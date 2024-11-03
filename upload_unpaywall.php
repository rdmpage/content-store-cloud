<?php

// Try Unpaywall

require_once (dirname(__FILE__) . '/upload.php');


//----------------------------------------------------------------------------------------

$debug = false;
$force = false;

$dois = array(
//'10.1038/s41598-019-48310-1',
//'10.1080/23802359.2019.1679680',
//'10.11609/jott.4075.11.3.13261-13277',

//'10.1016/j.ympev.2004.03.008',
//'10.1073/pnas.97.12.6585',
//'10.1093/icb/41.3.538',
'10.1093/jme/tjaa264',

);

foreach ($dois as $doi)
{
	echo "\$doi=$$doi\n";

	$go = true;
	
	$url = 'https://api.oadoi.org/v2/' . urlencode('"' . strtolower($doi) . '"') . '?email=unpaywall@impactstory.org';
	
	if (source_parent_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
		
	if ($go)
	{
		$json = get($url);
		
		$obj = json_decode($json);
		
		print_r($obj);
		
		if ($obj)
		{
			if (isset($obj->is_oa))
			{
				if ($obj->is_oa)
				{
					foreach ($obj->oa_locations as $location)
					{
						$unpaywall_url = '';
						
						if ($unpaywall_url == '')
						{
							if (isset($location->url_for_pdf) && $location->url_for_pdf != "")
							{
								$unpaywall_url = $location->url_for_pdf;
							}						
						}
					
						/*
						if ($unpaywall_url == '')
						{
							if (isset($location->url_for_landing_page) && $location->url_for_landing_page != "")
							{
								$unpaywall_url = $location->url_for_landing_page;
							}						
						}	
						*/				
						
						if ($unpaywall_url != '')
						{
							// try and fetch							
							$source = new stdclass;
							$source->parent_url = $url;
							$source->doi = $doi;
							
							$source->url = $unpaywall_url; // unpaywall
							
							if (isset($location->license) && $location->license != "")
							{
								$source->license = $location->license;
							}
											
							$source->content_filename = get_filename_from_url($source->url, 'pdf');											
							$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
						
							//$command = "curl -L -o '$source->content_filename' '$source->url'";
							
							// see also https://stackoverflow.com/questions/56413290/getting-curl-92-http-2-stream-1-was-not-closed-cleanly-internal-error-err
							
							$command = "curl --max-time 1024 -k -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";
							
							$result_code = 0;
							
							echo $command . "\n";
							system($command, $result_code);
							
							// check OK
							if ($result_code == 0)
							{
								store_pdf($source, $debug);
							}
							
							$rand = rand(100000, 300000);
							echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
							usleep($rand);
							
						}
					}
				}
			}
			else
			{
				echo "Not open access\n";
			}
		}
	}
}

?>
