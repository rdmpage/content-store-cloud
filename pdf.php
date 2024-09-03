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
	
	$trailer = $pdf->getTrailer();
	
	// PDF fingerprint (uniquely identifies PDF, and also flags whether it has been modified)
	if ($trailer->has('Id')) 
	{

		/** @var PDFObject $info */
		$id = $trailer->get('Id');

		$elements = $id->getContent()->getElements();

		$content_info->id = array();
		foreach ($elements as $element)
		{
			$content_info->id[] = strtolower($element->getContent());
		}
		
		$content_info->urn = 'urn:x-pdf:' . $content_info->id[0];
	}
	
	// Is PDF encrypted, if yes we will have to delete some fields as they will be gobbledegook
	$content_info->encrypted = false;
	if ($trailer->has('Encrypt'))
	{
		$content_info->encrypted = true;
	}	

	// Metadata
	if (method_exists($pdf, 'getDetails'))
	{
		$metadata = $pdf->getDetails();
	
		if ($debug)
		{
			echo "*** Metadata ***\n";
			print_r($metadata); 
		}
		
		//print_r($metadata); 
	
		if (isset($metadata['Title']) && $metadata['Title'] != '')
		{
			$content_info->title = $metadata['Title'];
		}
		
		if (isset($metadata['Author']) && $metadata['Author'] != '')
		{
			$content_info->author = trim($metadata['Author']);
		}	
		
		if (isset($metadata['Subject']) && $metadata['Subject'] != '')
		{
			$content_info->subject = trim($metadata['Subject']);
		}															
		
		if (isset($metadata['Pages']))
		{
			$content_info->pages = $metadata['Pages'];
		}
		
		if (isset($metadata['Creator']))
		{
			$content_info->creator = $metadata['Creator'];
		}						
		
		if (isset($metadata['Producer']))
		{
			$content_info->producer = $metadata['Producer'];
		}						
				
		// DOI may be stored in various places
		if (isset($metadata['prism:doi']))
		{
			$content_info->doi = $metadata['prism:doi'];
		}
		if (isset($metadata['WPS-ARTICLEDOI']))
		{
			$content_info->doi = $metadata['WPS-ARTICLEDOI'];
		}
		
		if (isset($metadata['xmp:createdate']))
		{
			$dateTime = date_create_from_format(DATE_ISO8601, $metadata['xmp:createdate']);			
			
			if (!is_bool($dateTime))
			{
				$content_info->created_timestamp = date_timestamp_get($dateTime);
			}
		}
		
		if (isset($metadata['xap:createdate']))
		{
			$dateTime = date_create_from_format(DATE_ISO8601, $metadata['xap:createdate']);
			if (!is_bool($dateTime))
			{						
				$content_info->created_timestamp = date_timestamp_get($dateTime);
			}
		}
		
		if (isset($metadata['xmp:modifydate']))
		{
			$dateTime = date_create_from_format(DATE_ISO8601, $metadata['xmp:modifydate']);			
			if (!is_bool($dateTime))
			{						
				$content_info->modified_timestamp = date_timestamp_get($dateTime);
			}
		}
		
		if (isset($metadata['xap:modifydate']))
		{
			$dateTime = date_create_from_format(DATE_ISO8601, $metadata['xap:modifydate']);			
			if (!is_bool($dateTime))
			{						
				$content_info->modified_timestamp = date_timestamp_get($dateTime);
			}
		}
		
		// ResearchGate, this only seems to happen if it has a ResearchGate cover page
		if (isset($metadata['rgid']))
		{
			$content_info->rgid = $metadata['rgid'];
		}
		
		// Elsevier may have licensing information
		if (isset($metadata['ali:license_ref']))
		{
			foreach ($metadata['ali:license_ref'] as $license_array)
			{
				foreach ($license_array as $license)
				{
					$content_info->license = $license;
				}
			}
		}
		
	}

	// XMP to try and get DOI
	$metadata = $pdf->getObjectsByType('Metadata');
	if ($metadata)
	{
		foreach ($metadata as $m)
		{
			$xml = $m->getContent();
			
			if ($debug)
			{
				echo "*** XML ***\n";
				//echo $xml; 
			}
								
			// for some PDFs, e.g. lelej.pdf the XML is encoded, haven't figured out how to decode this yet	
			$ok = preg_match('/^\s*<xml/', $xml);
			
			if ($ok)
			{
				$dom= new DOMDocument;
				$dom->loadXML($xml);
		
				$xpath = new DOMXPath($dom);
				$xpath->registerNamespace('crossmark', 	'http://crossref.org/crossmark/1.0/');
				$xpath->registerNamespace('pdfx', 		'http://ns.adobe.com/pdfx/1.3/');
				$xpath->registerNamespace('prism', 		'http://prismstandard.org/namespaces/basic/2.0/');
	
				foreach($xpath->query("//prism:doi|//crossmark:DOI|//pdfx:doi") as $node)
				{
					if (!isset($content_info->doi))
					{
						$content_info->doi = $node->firstChild->nodeValue;
					}
				}	
			}
		}
	}
	
	// page numbering
	$catalogues = $pdf->getObjectsByType('Catalog');
	if ($catalogues)
	{
		$catalogue = reset($catalogues);
		$object = $catalogue->get('PageLabels');
		
		$pdf_page_numbering = array();
		
		$ok = true;
		if ($ok)
		{
			$ok = ($object && method_exists($object, 'getDetails'));
		}
		if ($ok)
		{
			$pdf_page_numbering = $object->getDetails();
			$content_info->page_labels = $pdf_page_numbering;
			$ok = isset($pdf_page_numbering['Nums']);
		}
		
		if ($ok)
		{
			$done = false;
			
			if (!$done)
			{
				// Do we have starting page and starting number?		
				if (count($pdf_page_numbering['Nums']) == 2)
				{
					// 
					if (isset($pdf_page_numbering['Nums'][1]['S'])
						&& isset($pdf_page_numbering['Nums'][1]['St'])
						)
					{
						$content_info->page_numbering_start = array(
							$pdf_page_numbering['Nums'][0],		// numbering starts on this page
							$pdf_page_numbering['Nums'][1]['St'] // numbering starts with this number
							);
							
						$done = true;
					
					}
				}
			}
			
			if (!$done)
			{
				// the code below only works with simple consecutive numbers
				// Do we have individual page numbers?
				if (count($pdf_page_numbering['Nums']) >= 2)
				{
					$ok = count($pdf_page_numbering['Nums']) % 2 == 0;
					
					if ($ok)
					{
						$half = count($pdf_page_numbering['Nums']) / 2;	
						$count_p = 0;					
						$n = count($pdf_page_numbering['Nums']);
						for ($i = 0; $i < $n; $i += 2)
						{
							if (isset($pdf_page_numbering['Nums'][$i+1]['P']))
							{
								$count_p++;
							}
						}
						$ok = $count_p == $half;
						
						if ($ok)
						{
							for ($i = 0; $i < $n; $i += 2)
							{
								$content_info->page_numbering[$pdf_page_numbering['Nums'][$i]] = $pdf_page_numbering['Nums'][$i+1]['P'];						
							}						
						}
					}
					$done = $ok;
				}
			}
		}
	}
	
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
	

	// make links unique, and get any license info that we can
	if (isset($content_info->links))
	{
		$content_info->links = array_unique($content_info->links);
		asort($content_info->links);
		$content_info->links = array_values($content_info->links);
	
		// do we have a license link?
		if (!isset($content_info->license))
		{
			foreach ($content_info->links as $link)
			{
				if (preg_match('/creativecommons/', $link))
				{
					$content_info->license = $link;
				}

				if (preg_match('/terms-and-conditions/', $link))
				{
					$content_info->license = $link;
				}				
				
			}	
		}
	}
	
	// clean DOI
	if (isset($content_info->doi))
	{
		$content_info->doi = preg_replace('/https?:?\/\/(dx\.)?doi.org\//', '', $content_info->doi);
	}
	
	if ($content_info->encrypted)
	{
		$keys = array('title','author','creator','producer','links');
		foreach ($keys as $key)
		{
			if (isset($content_info->{$key}))
			{
				unset($content_info->{$key});
			}
		}	
	}
	
	// if no title then use filename
	if (!isset($content_info->title))
	{
		$content_info->title = basename($pdf_filepath);
		$content_info->title = urldecode($content_info->title);
	}
	
	// remove bad characters
	// \u0000
	
	foreach ($content_info as $k => $v)
	{
		if (is_string($content_info->{$k}))
		{
			//echo "$k=" . $content_info->{$k} . "\n";
			
			if (!mb_check_encoding($content_info->{$k}, 'UTF-8'))
			{
				$content_info->{$k} = mb_convert_encoding($content_info->{$k}, 'UTF-8', mb_detect_encoding($content_info->{$k}));
			}	
			
			$content_info->{$k} = preg_replace('/\x00/', '', $content_info->{$k});
		}
	
	}
	
}

if (0)
{
	$pdf_filepath = dirname(__FILE__) . '/' . 'zootaxa.4144.3.1-21961.pdf';
	
	$pdf_filepath = dirname(__FILE__) . '/' . '034.018.0202.pdf';
	$pdf_filepath = dirname(__FILE__) . '/' . '04925753542f25b1e65fa664307e18e2843c73b6.pdf';
	//$pdf_filepath = dirname(__FILE__) . '/' . '8eaf73183cf672c849be137aa867572724915739.pdf';
	$pdf_filepath = 'examples/Rukmane_19_2.pdf';
//	$pdf_filepath = 'examples/52033245dded724aed6d66cbd9d4b2d8f419cc97.pdf';

	// takes a long time to process
	//$pdf_filepath = 'examples/617-Texto del artÃ­culo (obligatorio)-2400-1-10-20200318.pdf';

	//$pdf_filepath = dirname(__FILE__) . '/' . 'giaonx,+957-2906-1-CE.pdf';
	//$pdf_filepath = 'examples/Polleniopsis_final_to_print_2016.543242.pdf';
	//$pdf_filepath = 'examples/EJE_eje-199802-0007.pdf';
	
	//$pdf_filepath = 'examples/71-82.pdf';
	//$pdf_filepath = '1-s2.0-S1631069110002283-main.pdf';
	//$pdf_filepath = 'examples/1959+Ruchisansakun+approved+with+IDs.pdf';
	//$pdf_filepath = 'examples/17_2_153_156.pdf';
	//$pdf_filepath = 'PJSB_2020-009.pdf';
	
	//$pdf_filepath = 'examples/51147-Article Text-71903-83372-10-20240531.pdf';
	
	//$pdf_filepath = 'x.pdf';
	
	//$pdf_filepath = 'examples/bull-1964-15-4-507-518.pdf';
	
	//$pdf_filepath = 'v39n2a17.pdf';
	
	//$pdf_filepath = 'examples/ctocora,+RCdE+2012v38n1a22+pp124_127+Especies.pdf';
	
	
	
	// ResearchGate
	//$pdf_filepath = 'examples/Gnier_Kohlmann_2003_Fabreries_282_57-111.pdf'; // no cover page
	//$pdf_filepath = 'examples/Zunino_1985_Folia_Ent_Mex_64_101-115.pdf'; // cover page and rgid tag
	
	// has pages
	//$pdf_filepath = 'examples/1-s2.0-S1631069110002283-main.pdf';
	
	$pdf_filepath = 'examples/v39n2a17.pdf';
	//$pdf_filepath = 'examples/Australian Journal of Entomology - February 1988 - Britton - SYNOPSIS OF THE GENERA OF AUSTRALIAN HETERONYCINI  COLEOPTERA .pdf';
	//$pdf_filepath = 'examples/51147-Article Text-71903-83372-10-20240531.pdf';
	
	// JSTOR on IA
	//$pdf_filepath = 'examples/1641669.pdf';
	
	// seems to have individual page numbers, i.e. lists the pages
	//$pdf_filepath = 'examples/jstor-1641669/1641669.pdf';
	
	// individual page numbers
	//$pdf_filepath = 'examples/PJSB_2020-009.pdf';
	
	
	// PMC ZooKeys on IA
	//$pdf_filepath = 'examples/PMC4023262-zookeys.404.7276.pdf';
	
	//$pdf_filepath = 'examples/Polleniopsis_final_to_print_2016.543242.pdf';
	
	//$pdf_filepath = 'examples/42409906.pdf';
	
	//$pdf_filepath = 'examples/v33n4-385-393.pdf';
	//$pdf_filepath = 'examples/1-s2.0-S1878614618300655-main.pdf';
	
	// has CC license as link on first page, but this is not treated as a URI by the PDF
	//$pdf_filepath = 'examples/51147-Article Text-71903-83372-10-20240531.pdf';
	
	// ID values are probably binary? <</ID [(\fµç˘8KF∏tâj∏ÖªÙªÙ) (⁄d#∑@åOtæù•)]
	//$pdf_filepath = 'examples/MycenasofKerala.pdf';
	
	//$pdf_filepath = 'examples/1973+Thomas+approved+with+IDs.pdf';
	
	//$pdf_filepath = 'examples/olmi42-A-1-70204-2-a638987.pdf';
	//$pdf_filepath = 'examples/666a361170dfd.pdf';
	
	//$pdf_filepath = 'examples/000532000452023.pdf';
	
	//$pdf_filepath = 'examples/2453.pdf';
	
	//$pdf_filepath = '354969.pdf';
	
	//$pdf_filepath = '80592.pdf';
	
	//$pdf_filepath = 'examples/olmi42-A-1-70204-2-a638987.pdf';
	
	//$pdf_filepath = 'examples/jstor-1641669/1641669.pdf';
	//$pdf_filepath = 'examples/PJSB_2020-009.pdf';
	
	//$pdf_filepath = 'examples/Zunino_1985_Folia_Ent_Mex_64_101-115.pdf'; // cover page and rgid tag
	//$pdf_filepath = 'examples/1-s2.0-S1878614618300655-main.pdf';
	
	// BioOne, page numbering is 0, [S] => D with cover page...?!
	$pdf_filepath = 'examples/034.018.0202.pdf';
	
	$pdf_filepath = 'examples/Rukmane_19_2.pdf';
	
	// fail as locked
	$pdf_filepath = 'examples/WA058_74255_P255-T48_Annal-Zool-Nr-3-4-6.pdf';
	
	$pdf_filepath = 'examples/04925753542f25b1e65fa664307e18e2843c73b6.pdf';
	
	$pdf_filepath = 'examples/f81d9b8abe4b7492d6201ad927fe77e3.pdf';
	$pdf_filepath = 'examples/Hva_2024_3.pdf';
	
	$pdf_filepath = 'examples/000532000452023.pdf';
	
	$pdf_filepath = 'TMM_SM1.pdf';
	
	$pdf_filepath = 'examples/jstor-1641669/1641669.pdf';
	
	// encrypted but we can parse by setting setIgnoreEncryption
	$pdf_filepath = 'examples/lelej.pdf';
	
	$pdf_filepath = 'Acarologia64(2)654-660(2024).pdf';
	
	$pdf_filepath = 'Oliveira2009.pdf'; // encrypted
	$pdf_filepath = 'source.pdf';
	
	//$pdf_filepath = '9481-Texto del artÃ­culo-20523-1-10-20151111.pdf';
	
	$pdf_filepath = 'TZ_316_4_Gorochov.pdf';
	//$pdf_filepath = 'Issue609.pdf';
	
	$pdf_filepath = "tmp/149.pdf";
	$pdf_filepath = "tmp/3229e3a0861dfe78e86f46404a11e47bf8a07d2c.pdf";
	$pdf_filepath = "tmp/327d8784d76bde709f67c58b8e20325378110a5d.pdf";
	
	// PDF with links to articles, can we get the text associated with these links?
	$pdf_filepath = "CJSTOC.PDF";
	
	if (!file_is_pdf($pdf_filepath))
	{
		echo "Badness\n";
		exit();
	}
		
	$content_info = get_content_info($pdf_filepath);
	get_pdf_info($content_info, $pdf_filepath, true);
	
	echo "*** Content info ***\n";

	print_r($content_info);


}

?>
