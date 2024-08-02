<?php

require_once (dirname(__FILE__) . '/utils.php');

//----------------------------------------------------------------------------------------
// HTTP HEAD to see if resource exists and get information
function get_header($url, $accept = '', $head = true)
{
	$response = null;
	
	$opts = array(
	  CURLOPT_URL =>$url,
	  CURLOPT_FOLLOWLOCATION 	=> TRUE,
	  CURLOPT_RETURNTRANSFER 	=> TRUE,
	  
	  CURLOPT_HEADER 			=> TRUE,
	  
	  CURLOPT_SSL_VERIFYHOST	=> FALSE,
	  CURLOPT_SSL_VERIFYPEER	=> FALSE,
	  
	  CURLOPT_COOKIEJAR			=> sys_get_temp_dir() . '/cookies.txt',
	  CURLOPT_COOKIEFILE		=> sys_get_temp_dir() . '/cookies.txt',
	  
	  
	);
	
	if ($head)
	{
		// HEAD
		$opts[CURLOPT_NOBODY] = TRUE;
	}
	
	$request_header = [];
	
	$request_header[] = "Accept-Language: en-gb";
	$request_header[] = "User-agent: Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405";
	
	if ($accept != '')
	{
		$request_header[] = "Accept: " . $accept;
	}
	else
	{
		$request_header[] = "Accept: */*";
	}
	
	$opts[CURLOPT_HTTPHEADER] = $request_header;
	
	
	$ch = curl_init();
	curl_setopt_array($ch, $opts);
		
	$curl_result = curl_exec ($ch); 
	
	$info = curl_getinfo($ch); 
	
	$response = new stdclass;
	$response->status = $info['http_code'];
	$response->info = $info;
	
	$response->headers = array();
	if ($info['header_size'] > 0)
	{
		$response->headers = http_parse_headers(substr($curl_result, 0, $info['header_size']));
	}
	return $response;
}

//----------------------------------------------------------------------------------------
// http://php.adamharvey.name/manual/en/function.http-parse-headers.php#112057
if (!function_exists('http_parse_headers')) {
    function http_parse_headers ($raw_headers) {
        $headers = [];
   
        foreach (explode("\n", $raw_headers) as $i => $h) {
            $h = explode(':', $h, 2);
           
            if (isset($h[1])) {
                $headers[$h[0]] = trim($h[1]);
            }
        }
       
        return $headers;
    }
}

//----------------------------------------------------------------------------------------
// 
function get_filename_from_url($url)
{
	$filename = '';
	
	$parts = parse_url($url);
	
	//print_r($parts);
	
	if (isset($parts['path']))
	{	
		$filename = basename($parts['path']);
		
		$filename = sanitise_filename($filename);
		
		if (!preg_match('/\.pdf$/i', $filename))
		{
			$filename .= '.pdf';
		}
	}
	
	return $filename;
}

//----------------------------------------------------------------------------------------
// Given a URL get basic details of what it points to, such as MIME type and file name
function get_source_details($url, $accept = '', $head = true, $debug = false)
{
	$source = new stdclass;
	$source->url = $url;

	$response = get_header($url, $accept, $head);
	
	$source->status = $response->status;
	
	if ($debug)
	{
		print_r($response);
	}
	
	if ($response->status == 200)
	{		
		foreach ($response->headers as $k => $v)
		{
			switch (strtolower($k))
			{
				case 'content-disposition':
					if (preg_match('/(attachment|inline);\s*filename="?(?<filename>[^\"]+)"?/', $v, $m))
					{
						$source->{'content-disposition'} = $m['filename'];
					}
					break;
					
				case 'content-type':
					$source->{'mime-type'} = $v;
					break;
					
				default:
					break;
			}
		
		}
	}
	
	return $source;
}

if (0)
{
	$url = 'https://rjb.revistas.csic.es/index.php/rjb/article/download/282/277';
	$url = 'https://omu.repo.nii.ac.jp/?action=repository_action_common_download&item_id=9650&item_no=1&attribute_id=19&file_no=1';
	$url = 'https://kmkjournals.com/upload/PDF/ArthropodaSelecta/14/14_2%20093_101%20Sinev%20Hollwedel.pdf';
	//$url = 'https://revistas.unal.edu.co/index.php/cal/article/download/31724/31759';
	
	//$url = 'https://www.zin.ru/societies/nhs/curstudherp/content/2000/CurStudHerp_2000_70-71.pdf';
	//$url = 'http://www.fupress.net/index.php/tropicalzoology/article/download/30/29';
	//$url = 'https://digitalcommons.unl.edu/cgi/viewcontent.cgi?article=1080&context=taxrpt';
	
	//$url = 'https://sparrow.up.poznan.pl/pte/ppe/PPE2_2006/161-168_Kalandyk-Simon.pdf';
	//$url = 'https://repository.naturalis.nl/pub/531689/PERS1960001002001.pdf';
	//$url = 'https://novitatescaribaea.do/index.php/novitates/article/download/158/88';
	//$url = 'https://www.metamorphosis.org.za/articlesPDF/86/Metamorphosis%20Vol%201(2)_1-7%20Sep%201983.pdf';
	
	// Only works with GET
	//$url = 'http://koreascience.or.kr:80/article/JAKO200706414118007.pdf';
	//$url = 'https://catalog.lib.kyushu-u.ac.jp/opac_download_md/2531/93.pdf';
	//$url = 'http://www.mammal.cn/EN/article/downloadArticleFile.do?attachType=PDF&id=2448';
	
	// fail
	//$url = 'https://www.ingentaconnect.com/search/download?pub=infobike%3a%2f%2fmtax%2fmt%2f2015%2f00000130%2f00000003%2fart00015&mimetype=application%2fpdf';
	
	$url = 'https://phytotaxa.mapress.com/pt/article/view/51147/51862';
	
	$url = 'https://www.royalsocietyqld.org/wp-content/uploads/2023/Proceedings%20132/Reinhold_Web.pdf';
	$url = 'http://www.eje.cz/pdfs/eje/1993/01/05.pdf'; // filename as attachment
	
	//$url = 'http://data.environment.sa.gov.au/Content/Publications/JABG33P043_Kellermann.pdf';
	//$url = 'https://lkcnhm.nus.edu.sg/app/uploads/2017/06/27brm045-055.pdf';
	
	// head false, file name is title of the paper
	//$url = 'http://manu40.magtech.com.cn/Jwxb/CN/article/downloadArticleFile.do?attachType=PDF&id=590';
	
	//$url = 'http://www.ssnr.it/52-5.pdf';
	//$url = 'https://web.archive.org/web/20220810094726if_/http://www.ssnr.it/52-5.pdf';
	//$url = 'https://2dgf.dk/xpdf/bull-1964-15-4-507-518.pdf';
	
	//$url = 'http://www.scielo.org.co/pdf/rcen/v39n2/v39n2a17.pdf';
	
	$url = 'http://onlinelibrary.wiley.com/doi/10.1111/j.1440-6055.1988.tb01139.x/pdf';


	get_filename_from_url($url);
	
	$source = get_source_details($url, '', false, false);
	print_r($source);
}


?>
