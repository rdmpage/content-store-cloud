<?php

require_once(dirname(__FILE__) . '/upload.php');

$urls = array(
/*
'http://www.boldsystems.org/pics/OGABA/Lope14-Odo0106%2B1402319608.jpg',
'http://www.boldsystems.org/pics/ODOBP/RMNH.INS.505513%2B1468521054.jpg',
*/

/*
'http://www.boldsystems.org/pics/SFPS/WRBU-SF2011.026%2B1330015610.JPG',
'http://www.boldsystems.org/pics/SFPS/WRBU-SF2011.027%2B1330015646.JPG',
'http://www.boldsystems.org/pics/SFPS/WRBU-SF2011.025%2B1330015576.JPG',
*/

'https://mczbase.mcz.harvard.edu/specimen_images/entomology/large/MCZ-ENT00017219_Spinoliella_puellae_hef.jpg',
'http://www.boldsystems.org/pics/PLVDW/BIOUG63742_65_F08+1611325258.jpg',
);

foreach ($urls as $url)
{
	$source_info = new stdclass;
	$source_info->url = $url;
		
	$source_info->content_filename = get_filename_from_url($source_info->url);											
	$source_info->content_filename = $config['tmp'] . '/' . $source_info->content_filename;
	
	$image = get($source_info->url);
	
	file_put_contents($source_info->content_filename, $image);
	
	store_image($source_info);
}

?>
