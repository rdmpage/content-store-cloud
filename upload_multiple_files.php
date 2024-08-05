<?php


require_once (dirname(__FILE__) . '/upload.php');

// We need a folder of files, a rule to convert to URL, and a license (which made be an empty string)
$base_dir = '/Volumes/T7/pdfs/Odonatologica';
$base_url = 'http://natuurtijdschriften.nl/download?type=document;docid=<FNAME>';
$base_license = 'https://creativecommons.org/licenses/by-sa/4.0/deed.nl';

$base_dir = '/Volumes/T7/pdfs/Baltic Journal of Coleopterology';
$base_url = 'http://www.bjc.sggw.pl/arts/<FNAME>';
$base_license = '';

$base_dir = '/Users/rpage/Downloads';
$base_url = '';
$base_license = '';


$files = scandir($base_dir);

//$files = array('2020v20n1-11.pdf');

$files=array('Ogusuku1999LutzomyiaMunaypataLQuillabambaCuscoPeru.pdf');
$files=array('bsef_0037-928x_2004_num_109_2_16099.pdf');
$files=array('Phl botomes de Bolivie  Description de Quatre Nouvelles Esp ces de Lutzomyia  Diptera  Psychodidae .pdf');

foreach ($files as $filename)
{
	if (preg_match('/^[^.].*\.pdf$/', $filename))
	{	
		echo "$filename\n";
		
		$url = '';
		
		switch ($base_url)
		{
			case 'http://www.bjc.sggw.pl/arts/<FNAME>':
				$url = str_replace('<FNAME>', str_replace('-', '/', $filename), $base_url);
				break;
						
			default:
				//$url = str_replace('<FNAME>', basename($filename, '.pdf'), $base_url);
				break;
		}
		
		echo $url . "\n";
		
		$source_info = new stdclass;
		$source_info->pdf_filename = $base_dir . '/' . $filename;

		if ($url != '')
		{
			$source_info->url = $url;
		}
		
		if ($base_license != '')
		{
			$source_info->license = $base_license;
		}
		
		store_pdf($source_info);		
	}

}

?>
