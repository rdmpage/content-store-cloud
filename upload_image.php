<?php

require_once(dirname(__FILE__) . '/upload.php');

$urls = array(
'https://mczbase.mcz.harvard.edu/specimen_images/entomology/large/MCZ-ENT00017219_Spinoliella_puellae_hef.jpg',
'http://www.boldsystems.org/pics/PLVDW/BIOUG63742_65_F08+1611325258.jpg',
'https://plants.jstor.org/fsi/img/size1/alukaplant/hua/phase_01/hua0001/hua0000921.jpg',
'https://zenodo.org/records/13271457/files/figure.png?download=1',
'https://www.boldsystems.org/pics/AANIC/ANICGenNo.003995%2B1282715104.jpg',
'https://caos.boldsystems.org/api/objects/caos-cloud.linode-us-east.10_200.8a9679c2-3dea-4982-b72a-6b110919ce4d.jpg',
);

$urls=array(
'http://www.boldsystems.org/pics/VAQTB/gvc16507+1312388106.jpg',
'http://www.boldsystems.org/pics/VAQTB/gvc16252+1296540568.jpg',
'http://www.boldsystems.org/pics/VAQTB/gvc16291+1297734534.jpg',
'http://www.boldsystems.org/pics/VAQTB/gvc16165+1295643092.jpg',
'http://www.boldsystems.org/pics/VAQTB/gvc16201+1296003600.jpg',
'http://www.boldsystems.org/pics/VAQTB/gvc17509a+1339170896.JPG',

'http://www.boldsystems.org/pics/OGABA/Lope14-Odo0106+1402319608.jpg',
'http://www.boldsystems.org/pics/MIGAB/0004+1442047574.jpg',
);

$urls=array(
'https://mhn-online-collections-assets-prod.s3.eu-west-1.amazonaws.com/emu/data/oumnh/multimedia/6/592/lep2166a.jpg',
'https://mhn-online-collections-assets-prod.s3.eu-west-1.amazonaws.com/emu/data/oumnh/multimedia/6/594/lep2167a.jpg',
);

$force = false;

foreach ($urls as $url)
{
	$go = true;
	
	if (source_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
	
	if ($go)
	{
	
		$source_info = new stdclass;
		$source_info->url = $url;
			
		$source_info->content_filename = get_filename_from_url($source_info->url);											
		$source_info->content_filename = $config['tmp'] . '/' . $source_info->content_filename;
		
		$image = get($source_info->url);
		
		file_put_contents($source_info->content_filename, $image);
		
		store_image($source_info);
	}
}

?>
