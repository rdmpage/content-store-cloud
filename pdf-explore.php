<?php

// Extract core details from PDF

require_once (dirname(__FILE__) . '/vendor/autoload.php');
require_once (dirname(__FILE__) . '/utils.php');

ini_set('memory_limit', '-1');

//----------------------------------------------------------------------------------------
function file_is_pdf($filename)
{
	$is_pdf = true;

	// is if a PDF?
	$handle = fopen($filename, "rb");
	
	// first 1K
	$file_start = fread($handle, 1024);  //<<--- as per your need 
	
	// last 1K
	fseek($handle, -1024, SEEK_END);
	$file_end = fread($handle, 1024);
	
	fclose($handle);

	if (!preg_match('/^\s*%PDF/', $file_start))
	{
		echo "$filename is not a PDF\n";
		$is_pdf = false;
	}	

	// lack of xref causes PDF parser to through exception and bail
	if (!preg_match('/xref/', $file_start) && !preg_match('/xref/', $file_end))
	{
		echo "$filename does not have xref\n";
		$is_pdf = false;
	}	
	
	return $is_pdf;
}

//----------------------------------------------------------------------------------------
// Add PDF-specific information to $content_info
function get_pdf_info(&$content_info, $pdf_filepath, $debug = false)
{
	$parser_config = new \Smalot\PdfParser\Config();
	$parser_config->setRetainImageContent(false);
	$parser_config->setIgnoreEncryption(true);
	
	$parser = new \Smalot\PdfParser\Parser([], $parser_config);

	// parse PDF
	$pdf = $parser->parseFile($pdf_filepath);
	
	if ($debug)
	{
		echo "Parsed PDF\n";
	}
	
	// page by page
	$pages = $pdf->getPages();
	
	foreach ($pages as $page)
	{
		$details = $page->getDetails();
		
		print_r($details);
		
	}
	
	
	/*
	// links as annotations
	$annotations = $pdf->getObjectsByType('Annot');
	foreach ($annotations as $annotation) 
	{
		if ($annotation->has('Subtype')) 
		{
			if ($annotation->get('Subtype')->__toString() == 'Link')
			{
				$details = $annotation->getDetails();
				
				if ($debug)
				{
					print_r($details);
				}
				
				if (isset($details['A']))
				{				
					if (!isset($content_info->links))
					{
						$content_info->links = array();
					}
					if (isset($details['A']['URI']))
					{
						$content_info->links[] = $details['A']['URI'];
					}
				}
			}
		}
	}
	*/
	
	
	
	/*
	// I think there must be a way to extract those links that aren't stored as annotations.
	// but I still can't figure out how...
	
	$query = 'URI';
	$z = $pdf->getObjectsByType($query);
	if ($z)
	{
		echo "*** Have $query ***\n";		
		exit();
	}
	*/
	


}

if (1)
{
	// PDF with links to articles, can we get the text associated with these links?
	$pdf_filepath = "CJSTOC.PDF";
	
	if (!file_is_pdf($pdf_filepath))
	{
		echo "Badness\n";
		exit();
	}
		
	$content_info = get_content_info($pdf_filepath);
	get_pdf_info($content_info, $pdf_filepath, true);
	
	//echo "*** Content info ***\n";

	//print_r($content_info);
}

?>
