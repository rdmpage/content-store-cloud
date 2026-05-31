<?php

require_once (dirname(__FILE__) . '/config.inc.php');
require_once (dirname(__FILE__) . '/upload.php');
require_once (dirname(__FILE__) . '/pdf.php');
require_once (dirname(__FILE__) . '/utils.php');



function create_new_thumbnail($pdf_filename)
{
	global $config;
	
	$dpi 			= 72;
	$first_page     = 1; // might change for PDfs with cover pages
	$size           = 150;
	
	$id = uniqid();
	$thumbnail_filename      = $config['tmp'] . '/' . $id  . '.jpg';
	$thumbnail_filename_webp = $config['tmp'] . '/' . $id  . '.webp';
	
	$command = "pdftoppm -jpeg -scale-to $size -f $first_page -l $first_page -singlefile '$pdf_filename' " .  $config['tmp'] . "/" . $id;
	echo $command . "\n";
	system($command);
	
	$command = "cwebp -quiet $thumbnail_filename -o $thumbnail_filename_webp";
	echo $command . "\n";

	system($command);
	
	return $thumbnail_filename;
}


$sha1s = array(

'411d523ddb76a00034c8dce59e7bf8150a43c699',
'8c0ff15f2551f991ea45dc337e50cff1496f8320',
'6c24a7043be402ef743cdc9d7e206d0a532fd72a',
'77a54cf9d35708de4ba79a032405fc6d2156b01f',
'017eb144eb71bf6d116983c2aa8f072c88d5cc6f',
'342ccc4c639df4a53e89448bc8abda97b68488d1',
'741924f9599e9af4448377195e2bc38da13bea7a',
'8cf1e625dbf20fe6164913a83684844065cb0b48',
'7617fa364c6832ee88f114abf313b99fafdf5178',
'e3c2e62ed96a66daf2c979cb5c8a6ed92733c418',
'd1d1d4ae9623c6171f25066d1a7d4f17da5d924a',
'7d9ce1547a413aa65fa3e6a7236a2c42097d566d',
'5ed696718c30e27d26aaee7bccb7da10ae786e6a',
'9801f4a51154ab004ab0ecd36e0dc7f0b982ebba',
'39eab37c7b6bc8f72b6f2845f9c3635190809641',
'f45f4f63683478ea0eb46d37e03671b7925dbd5c',
'62e832472eb02c310b9dc95c51f20b82205928ea',
'7a4a5d6a0e22afaefc1b9a99ed22bb57df79162a',
'17c9d5950199ee15225aa5645df42f39069f96a9',
'cd86485de805fdaad1d8bd2e7fffa1d372381392',
'c4e8f5fd5944bf3b6f5240569e6550b468fbddb9',
'932fead6046dd9abad5c3d26d84e0204509e3cf1',
'c609c2f953d69046114a50eae74fa190e52f885e',
'39f980d07d17d544e1666d11aac1e42dd6ba0956',
'5ec478028de8aff68b52e3e533b6d7be7ac1a951',
'8a5998adfd4406ab458b6d6159405c11c48ccbf4',
'5e70e3301f39f784c0d1cb140972087320972a9a',
'88d999f144ee7c1395baee1c609782fb38d353d2',
'ba831fe2849259e00a4e159c59d82931e50cad2f',
'f42cac720a1e50dd4e00a81013d68ea265459252',
'0658af9e4e052e35ed78dc2a4431f753725bc5cb',
'227d981dba03b350ff58c17589a18b20c82f0004',
'407bd9385f8f880b1fc008ae669c14bf8bd92c1b',
'7992d4c9467637d0cb4b48acc269b96af9efd318',
'a9d8e4f1487c83b607d131ba4b524450210eab55',
'e41cbd681c0a68233b98ff505927eaa2279dfa47',
'ce6ad073649cd906ebe2f4af94e623f7c0cacb05',
'3dc907e8212c1311b4464f4928ba1d088923dfd1',
'd153ea08a0145c28c112af9670f080647814fe02',
'fae93955f9c0fb8492456fe0203214779e448296',
'f6d32ab13b2b121856802d9de46ce547e9e7b018',
'88d08f006ca946d1ed336132e8698be39c143072',
'094abccc87d55caf889208b9521c9fff85e2369c',
'afff135f720adca7510f9ed3920d58432114ed1c',
'056f91dcb5c6d2b598648eb3a9f5abe5768b3ccd',
'43447e8c544f1dec4cbf4e400aa8a0a185f7241f',
'f479d5eb94f27a2a7419f59d5b0f52d1b055e86b',
'b9fc304f94dded8c7904737b334de3ac7ed723b6',
'cf6abfc9fddc93cc0a80b05fcadfea37d7dee9e6',
'51d80b539c744d0c302be05678f49db0d997845f',
'61f9a79977ccef9bc8ec85337bc9661bd294e755',
'ec1ee6e9b1269d45f6a07b86f7cc4957ade80579',
'e602ecf5850ba21a372e79cde5de2ead12be03b3',
'a53dcc8ef8f1eb1bbcde9d42c1d177048c94f2d5',
'2deb25dfddd6e855933e65583fcbb7cc4354f07e',
'34af47f802cd17099cd9c216dccc23f5022c4b74',
'58c97c06ca983f693a401446c6316999c46bf0c6',
'91fcd47d254445ea9e8fcefb8e81e21e44564655',
'c54ebfd28d1338699cffc127b658f3e41d500b01',
'be42c2a0cb3e322b71021b39beb88ce862cec519',
'1aeafe7397cdf83416aa9ad2112274b6871abb66',
'720eb0c302163631ace40b1dd39bb92faf0e30ad',
'87f23285af4af0a7873da3991b947bd82a820c36',
'34631043a0f346fa7f1e943426285451f8e5a30a',
'cb1ae4210fffff30c2089bce65e34e18fa3ba8df',
'f73e222b3156349174d7a70f43bcd41c9a44f551',
'318581181dea7f1d931851f5fb11c4cab4520572',
'643cbf2500d81e745191945c79e2671f31727686',
'4d6e71003cc759a6a7dc045c3d62530780d2e03d',
'b2477f2be1449fe325a8eb8b07265aad56777db4',
'634093ce85d4141c295b30038934db42f333d598',
'bc6cdbf74583d20ab6dfc624caeaaaceb755652c',
'2ee3a73fe024311a7af81affe6133df22a8df48c',
'c15ddd2a708b9f464ab3f48c0f6babceffb31866',
'80a7e65f1086677c780e923ba6c0f7cf76d9155a',
'4431afd86b3caf8d500469991a1ee71e65f8413d',
'5cbd40ed3ff2bfb13d7fcb93a6a40b834337642c',
'd764c4247f15f454cbc1a7caab63b8a9ec331ad9',
'139e5763609c5af244eade395bf5fce7002f9904',
'74937760469e716cd3f660755a1db79ed1078df2',
'd5dc8a9dd587053dcf2bd09367db6802c610a489',
'002ebf938087f84bde90a3bbdbc28ca0b8085fa6',
'fd1433a45b2571d26ba7f89e98255a027b1365c0',
'4690741bb3a99ddafd8acf4afc5438ef14456e8d',
'4ac89a8ca8979ad2cedc74291d22d8ce6e3fd9c1',
'fc7f2348c3e4b791a32bbf6d8b22e61afb2e6878',
'230e30fa34e623239d813740e2cda7e29c16a40e',
'7122aedcf4e0427ab72d4c711f6ad4bab1bf1943',
'0113330d35bb812ed9742966ae59bfc65a4ea828',
'b40511fafedd6e5ebed0d2b2bbf190f8d5ef9875',
'a69522d845b1be099c67f357459d511785068f2c',
'35e9a3976f863a61f863ab68fdc03dfa162b8185',
'90e972b263fe6979c6d1eefcdd45e4833737ebfd',
'5cc9b09b3b30146442ef36fcb4b68e98fa38fd38',
'62e5f8625a2b6a6d16fbac9936de1f2a82639e85',
'309bc964104317382ee0bd84e33420e3ad8b3efa',
'ed95c692844ec36e64c80784f095c1b568adf380',
'a46e8ae2eb9bdd0b0694c42ba49dac83ada5786d',
'6eb8c976373708e9ac7a4c484730ad2aaf24288f',
'432e267c653d116b7f19a95f5adc300609801389',
'748ed1fd4177023b95708d95e842a8a95e934c75',
'c14e11933524d3355b1f0918a90daf54ed4c32e2',
'64e7d055427c7b742a43f0aa2e1cce686cc6368c',
'c7c69ad7ae43fabe1ed598fb38e99c1a084a6c98',
'c03526dfc22af0ef75a00f5fda1ef99fce4d2478',
'6f5c8dc33bfc09ded93da262cd8345574345d88a',
'c52ffdb6753f7ed36637c10ce9fd95e9cc88140c',
'3c56fc9b9a4a044f967d41d70a62c3e9d7d3352a',
'dbe1063bada2b4cd0dd860840fdd8163146f1ad2',
'b7117e314aa6a36d9ad04f5731dab10b2d4bfedb',
'6aa131d1865425ceab185a4ea26969ddc01bb990',
'2a696e7aff5c7ca18766c6d1691c1b73cc831a44',
'57ab7da787a7f2e3fac6fb27a23ab95784584303',
'069dce3632efe1aac69f2eec61a0745e05270b95',
'e9ee51aeb4de241f57b97826fae94570299b2079',
'163955c897139c70370d7a118b3d2c5b4f145661',
'02e8a1b47232d9cf2a8f2725a00b2465db7b09f3',
'8b1da6dbbae50f294c7b4e09d3adcdb92e49a4a5',
'5c5929d66d2d2446e3a4f96c563d5fd265ff4661',
'5314f4d2b540c6ee85868bb6e54009b3a3842fa9',
'26b3fa423e616f2a5c6da61ca9d753987b13a3d7',
);

/*
$sha1s=array(
'0b36778152e2abce36847c22e5f72d274341d129',
);
*/

$sha1s=array(
"01279c35b809a250886e9d6fdc8e7f87b5e9d59f",
"863b484faeeacb1e61ae991353819df9565d1a25",
"26b50206445426f478f987316320d3d7685b748b",
"d8bd743744706b20479a9ff9eb5eeaa3f725b260",
"3dd25407b3638dc4959b5b97011082935d749df7",
"1121d4970a6305ba11d2b7952542da69ba103e0b",
"675c29a1b0528544455eca628702b77b82d05cee",
"e743073d6f3272c36ab1b5ff39548fb48d811fdd",
"15e689d60d6394b3da044ba85eb14a087720b230",
"f6750e3963d3c7ecf5747bfe90969e6138b12310",
"271909e20d2fecb8f1c70c4441356b30e5c2126c",
);

$sha1s=['5424f362fc3e6da0109dca2a0f9b1cac1f796575'];

$upload = b2_authorise();

foreach ($sha1s as $sha1)
{
	$url = 'https://content.bionames.org/sha1/' . $sha1;
	
	// does thumbnail already exist?
	$thumbnail_url = $url . '/thumbnail';
	
	$header = get_header($thumbnail_url);
	//print_r($header);
	if ($header->status == 200)
	{
		break;
	}
		
	// get PDF
	$pdf_filename = $config['tmp'] . '/' . $sha1 . '.pdf';
	
	$ok = false;
	
	if (file_exists($pdf_filename))
	{
		$ok = file_is_pdf($pdf_filename);
	}	
	else
	{	
		$command = "curl -L -o '$pdf_filename' '$url'";
		system($command, $result_code);
		$ok =  ($result_code == 0);
	}
	
	// check OK
	if ($ok)
	{
		// get image for first page
		$thumbnail_filename = create_new_thumbnail($pdf_filename);
		
		if (0)
		{
					
			$hash_path = hash_to_path($sha1);
			
			$destination = $config['content'] . '/' . $hash_path . '/' . $sha1 . '-thumbnail.webp';
			
			echo $destination . "\n";
			
			copy($thumbnail_filename, $destination);
		}
		else
		{
			$hash_path = hash_to_path($sha1);
			$b2_filename = $hash_path . '/' . $sha1 . '-thumbnail.webp';
			
			$result = b2_upload_file($upload, $thumbnail_filename, $b2_filename);
			//print_r($result);
			
		}
		
		$rand = rand(1000000, 5000000);
		echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
		
	}
}

?>
