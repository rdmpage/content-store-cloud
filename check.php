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
$sql = 'SELECT sha1, created FROM source WHERE created > "2025-01-06 04:42:28" ORDER BY created';

$data = db_get($sql);


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
		
		$sql = 'DELETE FROM content WHERE sha1="' . $sha1 . '";';
		db_put($sql);
		$sql = 'DELETE FROM source WHERE sha1="' . $sha1 . '";';
		db_put($sql);
	}
	
	if (($count++ % 10) == 0)
	{
		$rand = rand(1000000, 3000000);
		echo "\n [$count] ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}


}

?>
