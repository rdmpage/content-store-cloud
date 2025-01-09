<?php

error_reporting(E_ALL);

global $config;

// Date timezone--------------------------------------------------------------------------
date_default_timezone_set('UTC');

// Environment----------------------------------------------------------------------------
// In development this is a PHP file that is in .gitignore, when deployed these parameters
// will be set on the server
if (file_exists(dirname(__FILE__) . '/env.php'))
{
	include 'env.php';
}

// B2 Cloud Storage-----------------------------------------------------------------------
$config['b2_key_id'] 	= getenv('B2_APPLICATIONKEYID');
$config['b2_key'] 		= getenv('B2_APPLICATIONKEY');

$config['downloadUrl'] 	= 'https://f000.backblazeb2.com';
$config['bucket']		= 'content-store';

// Cache----------------------------------------------------------------------------------
// Local folder
$config['content'] = dirname(__FILE__) . '/content';

// B2 drive mounted locally
$config['content'] = '/Users/rpage/Library/CloudStorage/CloudMounter-content-store';

// Where we store downloaded files
$config['tmp'] = dirname(__FILE__) . '/tmp';
$config['tmp'] = sys_get_temp_dir();

// Where we put files we want to add
$config['watch'] = dirname(__FILE__) . '/watch';

// Database-------------------------------------------------------------------------------
$config['pdo'] = new PDO('sqlite:content.db');

?>
