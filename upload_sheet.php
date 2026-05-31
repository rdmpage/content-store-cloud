<?php


require_once (dirname(__FILE__) . '/upload.php');

// read spreadsheet and upload files (typically scraped from the web)

/*

c7acb9f9f5ae3ba5a4fcd2ec72462e992c40710f
ba55bdaeabee0c444e0b9b9c12b7850dd2df7c40
8d530309aa26ccc0e9bc13897ab17ef69c9ed0ee
*/

$base_dir = "files";

$force = true;
//$force = false;

$filename = $base_dir . "/out.tsv";
$filename = $base_dir . "/pensoft.tsv";

$headings = array();

$row_count = 0;

$file = @fopen($filename, "r") or die("couldn't open $filename");
		
$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$row = fgetcsv(
		$file_handle, 
		0, 
		"\t" 
		);
		
	$go = is_array($row);
	
	if ($go)
	{
		if ($row_count == 0)
		{
			$headings = $row;		
		}
		else
		{
			$obj = new stdclass;
		
			foreach ($row as $k => $v)
			{
				if ($v != '')
				{
					$obj->{$headings[$k]} = $v;
				}
			}
		
			print_r($obj);	
			
			$source_info = new stdclass;
			$source_info->parent_url = $obj->url;
			
			if (preg_match('/https?:\/\/(dx.)?doi.org\/(.*)/', $obj->url, $m))
			{
				$source_info->doi = $m[2];
			}
			
			$source_info->url = $obj->pdf_url;
			$source_info->content_filename = $base_dir . '/' . $obj->pdf_filename;
										
			store_pdf($source_info);		
		}
	}	
	$row_count++;
}



?>
