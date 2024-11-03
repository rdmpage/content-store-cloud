<?php

require_once (dirname(__FILE__) . '/upload.php');

$debug = false;

$filename = 'archive.jsonl';

$count = 0;
$force = false;

/*
'http://bionames.org/sha1/a7bbdc144b32b143d8293df678cc7772756d91f2',
);
*/

$parse_pdf = true; // default, will fail if PDF has problems
$parse_pdf = false; // don't attempt to parse the PDF, use if PDFs are a bit ropey


$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$line = trim(fgets($file_handle));
	
	if (preg_match('/^{"id"/', $line))
	{
		$json = preg_replace('/,$/', '', $line);
	
		//echo $json;
	
		$obj = json_decode($json);
	
		//print_r($obj);
		
		$go = true;
		
		$url = 'http://bionames.org/sha1/' . $obj->id;
		
		if (source_url_in_db($url) && !$force)
		{
			//echo "Have $url already\n";
			$go = false;
		}
		
		
		//if (!preg_match('/^03/', $obj->id))
		if (!preg_match('/^00/', $obj->id))
		{
			$go = false;
		}		
		
		
		// custom
		
		// bitstream lots of errors, missing or incomplete downloads
		// persee.fr
		// ingentaconnect
		// siamese-heritage.org
		// decapod
		// .cz/
		// samuseum lots of failures to find Object list, e.g. 265230f06688e809a58aa8ed826ff67319e6023c
		// www.rbg.vic.gov.au
		// socmexent
		// attelabidae
		// kmkjournals.com
		// sekj.org
		
		// www.jjbotany.com - incomplete
		// wiley.com
		
		// .cn - still to do
		
		// travaux.ro
		
		/*
		if (!preg_match('/travaux.ro\/i/', $obj->value->urls[0]))
		{
			$go = false;
		}		
		*/
		
		// problematic PDFs
		if (in_array($obj->id, array(
			'341d8605d6618401b061faae205015845167c8ea',
			'574dba46bc651bb5e2bc7b23a9ee437bdf6c1c99',
			'5965bcbca332e37a156aabe20d667ee8422c6567',
			'20f39ecaa0af7e87c0f124a7b384b575bbcf7cac',
			'002eb7592941cd1413c292681082071768658c4b',
			'006e3c38a86b7ff1ff6abe4bc003b2dab53eb505',
			'00b23f8207919c2cd505bc9238cf26bcbaee9c30',
			'03cb60e7a1eb5b065d159c1234570c54c224b8ea',
			'03ff80363f8709b34e5946502c7d2ce5714e3bcc',
			'085b3624121f95195701298ae9a3a6b8f90e7a22',
			'0ae0ec666c0281cd099cb099923539ac8d322a53',
			'103a7ed0670e6a5806b6715b204644f55ef0b5c4',
			'17e31b40324363687fad56570a8505effc81e015',
			'1883493d9e467129fd871a65104e06307db845a1',
			'1b7b5ddcd8b61d8801acd4fa621aa60cda172d26',
			'1c5a92988a670800c8acc2bbddfdfde913798471',
			'21bf8fe583936a7edcc87ddb33786031dbf0e5a3',
			'2384da182b69b32616c72ee5151b164b3415ddb1',
			'2bba326a52b7e04f3ad76ab54bdd19ae9252bd05',
			'2f37d60c3d665b4d6c8b3e1ec7771aefe608aa2c',
			'344bbb0c1dcc86014c105b6ae1322179323a6bdb',
			'345b431586de01de75ef5e13a2e445f20c04a86a',
			'3867b2efe09ae44237085209ef858c6dc053147d',
			)))
		{
			$go = false;
		}				
		
		if ($go)
		{
			echo "Adding $url\n";
			echo $obj->value->urls[0] . "\n";
			$source = get_source_details($url, '', true, $debug);	
			
			$source->parent_url = $obj->value->urls[0];
		
			$source->content_filename = $obj->id . '.pdf';
			$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
		
			$command = "curl -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";
			
			echo $command . "\n";
			system($command);
			
			store_pdf($source, $parse_pdf, $debug);
			
			$rand = rand(100000, 300000);
			echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
			usleep($rand);
			
			$count++;
			
			echo "[$count]\n";
		}
	}
	
	if ($count > 10000)
	{
		break;
	}
}

?>
