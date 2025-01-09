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

$force = false;

$headings = array();

$row_count = 0;
$fetch_count = 0;
$file_count = 0;

$filename = "ibol_2024_07_19/media.txt";

$headings = array('processid', 'title', 'identifier', 'references', 'format', 'license');

$values = array();

$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$line = trim(fgets($file_handle));
		
	$row = explode("\t",$line);
	
	//echo $line . "\n";
	
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
				
		if (!source_url_in_db($img->url) || $force)
		{			
			$source_info = new stdclass;
			$source_info->url = $img->url;
	
			$source_info->content_filename = get_filename_from_url($source_info->url);											
			$source_info->content_filename = $config['tmp'] . '/' . $source_info->content_filename;
	
			$source_info->license = $img->license;
			$source_info->title = $img->title;
			
			if (1)
			{
				$image = get($img->url);
				file_put_contents($source_info->content_filename, $image);
				store_image($source_info);
			}
			else
			{				
				// get image from disk
				$md5 = md5($img->url);
				
				$basedir = '/Volumes/LaCie/BOLD/images';
				$basedir = '/Volumes/LaCie 1/BOLD/images';
				
				$subdir = array(
					substr($md5, 0, 2), 
					substr($md5, 2, 2), 
					substr($md5, 4, 2)
				);
				
				$image_filename = $basedir . "/" . join("/", $subdir) . "/"  . $md5 . '.jpg';
				
				if (file_exists($image_filename))
				{
					echo "$image_filename found " . $img->url . "\n";
					$image = file_get_contents($image_filename);
				
					file_put_contents($source_info->content_filename, $image);					
					store_image($source_info);
					
					$file_count++;
					
					if ($file_count % 1000 == 0)
					{
						$rand = rand(1000000, 3000000);
    					echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
    					usleep($rand);
					}
					
				}
				else
				{
					echo "$image_filename NOT found " . $img->url . "\n";
					
					$image = get($img->url);
					file_put_contents($source_info->content_filename, $image);					
					store_image($source_info);
					
					$fetch_count++;
					
					if ($fetch_count % 100 == 0)
					{
						$rand = rand(1000000, 3000000);
    					echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
    					usleep($rand);
					}
					
				}
			}
		}	
		else
		{
			//echo "Have " . $img->url . " already\n";
			//echo ".";
		}	
	}	
	$row_count++;	
	
	if ($row_count % 100 == 0)
	{
		echo "[$row_count]\n";
	}
	
}

?>
