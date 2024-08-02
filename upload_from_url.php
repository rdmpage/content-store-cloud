<?php

require_once (dirname(__FILE__) . '/upload.php');

$debug = false;

$urls = array(
//'https://www.phytoneuron.net/wp-content/uploads/2024/01/02PhytoN-Agavaceae.pdf',
//'https://www.phytoneuron.net/wp-content/uploads/2024/02/07PhytoN-Viciahirsuta.pdf',
'https://www.phytoneuron.net/wp-content/uploads/2024/02/09PhytoN-Caribbeanspecies-1.pdf',
);


foreach ($urls as $url)
{
	$pdf_filepath = get_filename_from_url($url);		
	$source = get_source_details($url, '', true, $debug);
	
	if (isset($source->{'content-disposition'}))
	{
		// this may cause problems if name has bad character encoding
		$content_disposition = $source->{'content-disposition'};
		
		$pdf_filepath = sanitise_filename($content_disposition);
		if (!preg_match('/\.pdf$/i', $pdf_filepath))
		{
			$pdf_filepath .= '.pdf';
		}
	}
	
	$pdf_filepath = $config['tmp'] . '/' . $pdf_filepath;

	$command = "curl -L -o '$pdf_filepath' '$url'";
	echo $command . "\n";
	system($command);
	
	store_pdf($pdf_filepath, $url, $debug);
}

?>
