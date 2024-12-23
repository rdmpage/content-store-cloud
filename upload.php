<?php

require_once (dirname(__FILE__) . '/b2.php');
require_once (dirname(__FILE__) . '/pdf.php');
require_once (dirname(__FILE__) . '/sqlite.php');
require_once (dirname(__FILE__) . '/url.php');
require_once (dirname(__FILE__) . '/utils.php');

$local_storage = true; // Disk
//$local_storage = false; // upload directly to B2

$use_db = true;
//$use_db = false;

//----------------------------------------------------------------------------------------
// Get authorised to upload files to B2
function b2_authorise($debug = false)
{
	$authorization = b2_authorize_account();
	
	if ($debug)
	{
		print_r($authorization);
	}
	
	$upload = b2_get_upload_url($authorization);
	
	if ($debug)
	{
		print_r($upload);
	}
	
	return $upload;
}

//----------------------------------------------------------------------------------------
function upload_pdf($upload, $pdf_filename, $source_url = '', $debug = true)
{
	if (!file_exists($pdf_filename))
	{
		echo "$pdf_filename not found\n";
		exit();
	}

	// get information about the PDF
	$content_info = get_content_info($pdf_filename);
	get_pdf_info($content_info, $pdf_filename, false);
	
	if ($source_url != '')
	{
		$content->source_url = $source_url;
	}	
	
	// get SHA1-based file name
	$content_filepath = create_path_from_hash($content_info->sha1, '');
		
	// upload PDF file
	$b2_filename = $content_filepath . '.pdf';
	
	$result = b2_upload_file($upload, $pdf_filename, $b2_filename);	
	
	if ($debug)
	{
		print_r($result);
	}
	
	// create temporary file for metadata about PDF
	$json_filepath = sys_get_temp_dir() . '/' . 'metadata.json';
	file_put_contents($json_filepath, json_encode($content_info));
	
	$b2_filename = $content_filepath . '_info.json';

	$result = b2_upload_file($upload, $json_filepath, $b2_filename);	

	if ($debug)
	{
		print_r($result);
	}
}



//----------------------------------------------------------------------------------------
function store_content_info_db($content_info, $debug = false)
{
	// content (will be same regardless of source)
	$k = array('sha1', 'md5', 'sha256', 'mimetype', 'size', 'id', 'title', 'author', 'subject',
		'pages', 
		'creator', 'producer', 
		'doi', 'rgid', 
		'license', 'links',
		'created_timestamp','modified_timestamp',
		'page_labels','page_numbering_start');
	
	$obj = new stdclass;
	foreach ($k as $key)
	{
		if (isset($content_info->{$key}))
		{
			switch ($key)
			{
				// store two PDF fingerprints in separate fields
				case 'id':
					if (isset($content_info->{$key}[0]))
					{
						$obj->id_0 = $content_info->{$key}[0];
					}
					if (isset($content_info->{$key}[1]))
					{
						$obj->id_1 = $content_info->{$key}[1];
					}
					break;
			
				default:
					$obj->{$key} = $content_info->{$key};
					break;
			
			}	
		}
	}
	
	$sql = obj_to_sql($obj, 'content');
	
	if ($debug)
	{
		echo $sql . "\n";
	}
	
	db_put($sql);
}

//----------------------------------------------------------------------------------------
function store_source_info_db($sha1, $source_info, $debug = false)
{
	// source, either a URL (i.e., downloaded) or a file(i.e., already existing file)
	$obj = new stdclass;
	$obj->sha1 = $sha1;

	if (isset($source_info->url))
	{
		$obj->url = $source_info->url;
	}
	else
	{
		$obj->url = 'file://' . $source_info->content_filename;
	}
	
	if (isset($source_info->parent_url))
	{
		$obj->parent_url = $source_info->parent_url;
	}
	
	if (isset($source_info->license))
	{
		$obj->license = $source_info->license;
	}

	if (isset($source_info->doi))
	{
		$obj->doi = strtolower($source_info->doi);
	}
	
	if (isset($source_info->title))
	{
		$obj->title = $source_info->title;
	}
	
	$sql = obj_to_sql($obj, 'source');
	
	if ($debug)
	{
		echo $sql . "\n";
	}
	
	db_put($sql);
}

//----------------------------------------------------------------------------------------
// Store PDF
// Set $parse_pdf to false if having trouble parsing PDFs, for example if they are
// not well-formed but still readable
function store_pdf($source_info, $parse_pdf = true, $debug = true)
{
	global $config;
	global $use_db;

	if (!file_exists($source_info->content_filename))
	{
		echo "$source_info->content_filename not found\n";
		return false;
	}
	
	// is if a PDF?
	if (!file_is_pdf($source_info->content_filename))
	{
		return false;
	}

	echo "Getting info for $source_info->content_filename\n";
	
	// get information about the PDF
	$content_info = get_content_info($source_info->content_filename);
	
	if ($parse_pdf)
	{
		get_pdf_info($content_info, $source_info->content_filename, false);
	}
		
	echo "Storing file using SHA1\n";
	
	// get SHA1-based file name
	$content_filepath = create_path_from_hash($content_info->sha1, $config['content']);
		
	// store PDF file
	$store_filename = $content_filepath . '.pdf';
	
	// ensure hash path exists locally
	$hash_parts = hash_to_path_array($content_info->sha1);
	
	$dir = $config['content'];
	foreach ($hash_parts as $subdir)
	{
		$dir .= '/' . $subdir;
		
		if (!file_exists($dir))
		{
			$oldumask = umask(0); 
			if (!mkdir($dir, 0777))
			{
				echo "Failed to make directory $dir\n";
				exit();
			}
			umask($oldumask);
		}
	}
	
	if (!file_exists($store_filename))
	{	
		echo "Copying $source_info->content_filename to $store_filename\n";	
		copy($source_info->content_filename, $store_filename);
	}
	else
	{
		echo "Have $source_info->content_filename already\n";
	}

	// upload metadata for PDF	
	
	// create temporary file for metadata about PDF
	$json_filepath = sys_get_temp_dir() . '/' . 'metadata.json';
	file_put_contents($json_filepath, json_encode($content_info, JSON_INVALID_UTF8_SUBSTITUTE | JSON_UNESCAPED_UNICODE));
	
	$store_filename = $content_filepath . '_info.json';
	
	if (!file_exists($store_filename))
	{	
		if (!copy($json_filepath, $store_filename))
		{
			echo "Failed to copy file\n";
			exit();
		}
		
	}
	else
	{
		echo "Have $json_filepath already\n";
	}
	
	//---------
	// store metadata in local database so we can find things
	
	echo json_encode($content_info) . "\n";
	
	if ($use_db)
	{
		store_content_info_db($content_info);
		store_source_info_db($content_info->sha1, $source_info);
	}
	
	return true;
}	

//----------------------------------------------------------------------------------------
function store_image($source_info, $debug = true)
{
	global $config;
	global $use_db;

	if (!file_exists($source_info->content_filename))
	{
		echo "$source_info->content_filename not found\n";
		return false;
	}
	
	// is if an image PDF?
	/*
	$handle = fopen($source_info->content_filename, "rb");
	$file_start = fread($handle, 1024);  //<<--- as per your need 
	fclose($handle);

	if (!preg_match('/^\s*%PDF/', $file_start))
	{
		echo "$source_info->content_filename is not a PDF\n";
		return false;
	}
	*/

	echo "Getting info for $source_info->content_filename\n";
	
	// get information about the image
	$content_info = get_content_info($source_info->content_filename);
	
	echo "Storing file using SHA1\n";
	
	// get SHA1-based file name
	$content_filepath = create_path_from_hash($content_info->sha1, $config['content']);
		
	// store PDF file
	$store_filename = $content_filepath . '.' . mime2ext($content_info->mimetype);
	
	// ensure hash path exists locally
	$hash_parts = hash_to_path_array($content_info->sha1);
	
	$dir = $config['content'];
	foreach ($hash_parts as $subdir)
	{
		$dir .= '/' . $subdir;
		
		if (!file_exists($dir))
		{
			$oldumask = umask(0); 
			if (!mkdir($dir, 0777))
			{
				echo "Failed to make directory $dir\n";
				exit();
			}
			umask($oldumask);
		}
	}
	
	if (!file_exists($store_filename))
	{	
		echo "Copying $source_info->content_filename to $store_filename\n";	
		if (!copy($source_info->content_filename, $store_filename))
		{
			echo "Failed to copy file\n";
			exit();
		}
	}
	else
	{
		echo "Have $source_info->content_filename already\n";
	}

	// upload metadata for image	
	
	// create temporary file for metadata about image
	$json_filepath = sys_get_temp_dir() . '/' . 'metadata.json';
	file_put_contents($json_filepath, json_encode($content_info, JSON_INVALID_UTF8_SUBSTITUTE | JSON_UNESCAPED_UNICODE));
	
	$store_filename = $content_filepath . '_info.json';
	
	if (!file_exists($store_filename))
	{	
		if (!copy($json_filepath, $store_filename))
		{
			echo "Failed to copy file\n";
			exit();
		}
		
	}
	else
	{
		echo "Have $json_filepath already\n";
	}
	
	//---------
	// store metadata in local database so we can find things
	
	echo json_encode($content_info) . "\n";
	
	if ($use_db)
	{
		store_content_info_db($content_info);
		store_source_info_db($content_info->sha1, $source_info);
	}
	
	return true;
}	

//----------------------------------------------------------------------------------------
// test whether source URL is already in database
function source_url_in_db($url)
{
	$sql = 'SELECT url FROM source WHERE url="' . $url . '" LIMIT 1';
	$data = db_get($sql);
		
	return (count($data) == 1);
}

//----------------------------------------------------------------------------------------
// D o we have a SHA1 for a source URL?
function source_url_to_sha1($url)
{
	$sha1 = '';
	
	$sql = 'SELECT * FROM source WHERE url="' . $url . '" LIMIT 1';
	$data = db_get($sql);
	
	foreach ($data as $row)
	{
		if (isset($row->sha1))
		{
			$sha1 = $row->sha1;
		}
	}
		
	return $sha1;
}

//----------------------------------------------------------------------------------------
// test whether parent URL is already in database 
function source_parent_url_in_db($url)
{
	$sql = 'SELECT parent_url FROM source WHERE parent_url="' . $url . '" LIMIT 1';
	$data = db_get($sql);
		
	return (count($data) == 1);
}

//----------------------------------------------------------------------------------------
// test whether SHA1 is already in database
function source_sha1_in_db($sha1)
{
	$sql = 'SELECT sha1 FROM content WHERE sha1="' . $sha1 . '" LIMIT 1';
	$data = db_get($sql);
	
	return (count($data) == 1);
}

?>
