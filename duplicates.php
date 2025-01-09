<?php

// Remove duplicates

require_once(dirname(__FILE__) . '/sqlite.php');

$urls = array(
'http://www.boldsystems.org/pics/VONR/OM3535_Euphorbiaceae.4+1314285784.JPG',
);

foreach ($urls as $url)
{
	$sql = "SELECT * FROM source WHERE url='$url'";
	
	$data = db_get($sql);
	
	print_r($data);
	
}

?>
