<?php

require_once(dirname(__FILE__) . '/upload.php');


//----------------------------------------------------------------------------------------
function clean_license($v)
{
	// fix any encoding errors
	$v = preg_replace('/\x{FFFD}/u', '-', $v);

	$terms = array();
	
	if (preg_match('/CreativeCommons/', $v))
	{
		$terms[] = 'CC';
	}

	if (preg_match('/Attribution/', $v))
	{
		$terms[] = 'BY';
	}

	if (preg_match('/Non-?Commercial/i', $v))
	{
		$terms[] = 'NC';
	}

	if (preg_match('/Share\s*-?(Alike)?/i', $v))
	{
		$terms[] = 'SA';
	}

	if (preg_match('/No Derivatives/', $v))
	{
		$terms[] = 'ND';
	}

	if (preg_match('/No Rights/', $v))
	{
		$terms[] = 'CC0';
	}

	if (preg_match('/-by-nc-nd/', $v))
	{
		$terms = ['CC', 'BY', 'NC', 'ND'];
	}
	
	return join('-', $terms);

}

//----------------------------------------------------------------------------------------

$headings = array();

$row_count = 0;

$filename = "/Users/rpage/Development/bold-gbif-images-o/media.txt";

$headings = array('processid', 'title', 'identifier', 'references', 'format', 'license');

$values = array();

$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$line = trim(fgets($file_handle));
		
	$row = explode("\t",$line);
	
	$go = is_array($row) && count($row) > 1;
	
	if ($go)
	{
		$obj = new stdclass;
	
		foreach ($row as $k => $v)
		{
			if ($v != '')
			{						
				$obj->{$headings[$k]} = $v;
			}
		}
	
		//print_r($obj);	
		
		$img = new stdclass;
		
		foreach ($obj as $k => $v)
		{
			switch ($k)
			{
				case 'processid':
					$img->$k = $v;
					break;
					
				case 'identifier':
					$img->url = $v;
					
					// md5 of URL was used in earlier caching					
					
					$img->url = str_replace('#', '%23', $img->url);
					break;

				case 'title':
					$img->title = $v;
					break;

				case 'format':
					$img->mimetype = $v;
					break;
					
				case 'license':
					$img->license = clean_license($v);
					break;
					
				default:
					break;
			}
		}

		print_r($img);
		
		//echo $img->url . "\n";
		
		$source_info = new stdclass;
		$source_info->url = $img->url;

		$source_info->content_filename = get_filename_from_url($source_info->url);											
		$source_info->content_filename = $config['tmp'] . '/' . $source_info->content_filename;

		$source_info->license = $img->license;
		$source_info->title = $img->title;
		
		$image = get($source_info->url);
		
		file_put_contents($source_info->content_filename, $image);
		
		store_image($source_info);
		
		
	}	
	$row_count++;	
	
	if ($row_count > 1000)
	{
		break;
	}
	
}	

/*

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
*/

?>
