<?php

require_once('sqlite.php');

//----------------------------------------------------------------------------------------
// Simple HTTP get
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
	  
	  // HEAD
	  CURLOPT_NOBODY => TRUE,
	  
	);

	
	$ch = curl_init();
	curl_setopt_array($ch, $opts);
	$data = curl_exec($ch);
	$info = curl_getinfo($ch); 
	curl_close($ch);

	return $info['http_code'];
}

//----------------------------------------------------------------------------------------


$sql = 'SELECT sha1, created FROM source WHERE created > "2025-01-05 21" ORDER BY created LIMIT 100';
$sql = 'SELECT sha1, created FROM source WHERE created > "2025-01-06 21:12:13" ORDER BY created';

$sql = 'SELECT sha1, created FROM source 
WHERE created BETWEEN "2025-01-03 00:00:00" AND "2025-01-04 23:59:59" 
ORDER BY created';


if (0)
{
	// PDFs
	$sql = 'SELECT sha1, url, parent_url, created
	FROM source 
	INNER JOIN content USING(sha1) 
	WHERE mimetype="application/pdf" 
	AND created > "2025-01-06 00:00:00"
	ORDER BY created
	LIMIT 10'
	;
}

if (1)
{
	// images
	$sql = 'SELECT sha1, url, parent_url, created
	FROM source 
	INNER JOIN content USING(sha1) 
	WHERE mimetype="image/jpeg" 
	AND created BETWEEN "2025-01-02 00:00:00" AND "2025-01-03 23:59:59" 
	ORDER BY created
	LIMIT 1000'
	;
}

$failed = array();

$data = db_get($sql);

echo "Checking " . count($data) . " rows.\n";

$count = 1;

foreach ($data as $row)
{
	echo $row->sha1 . ' ' . $row->created;

	$sha1 = $row->sha1;
	
	$url = 'https://content.bionames.org/sha1/' . $sha1;
	
	$status = get($url);
	
	if ($status == 200)
	{
		echo " ok\n";
	}
	else
	{
		echo " bad\n";
		
		echo $row->url . "\n";
		
		if (0)
		{
			$sql = 'DELETE FROM content WHERE sha1="' . $sha1 . '";';
			db_put($sql);
			$sql = 'DELETE FROM source WHERE sha1="' . $sha1 . '";';
			db_put($sql);
		}
		
		if (isset($row->parent_url))
		{
			$failed[] = $row->parent_url;
		}
		elseif (isset($row->url))
		{
			$failed[] = $row->url;
		}
	}
	
	if (($count++ % 10) == 0)
	{
		$rand = rand(1000000, 3000000);
		echo "\n [$count] ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}


}

echo "Failed:\n";
echo join("\n", $failed) . "\n";

?>
