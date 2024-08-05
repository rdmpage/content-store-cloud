<?php

require_once (dirname(__FILE__) . '/upload.php');

$debug = false;


$urls=array(
//'https://lkcnhm.nus.edu.sg/wp-content/uploads/sites/10/app/uploads/2017/06/s24rbz077-083.pdf',
//'https://catalog.lib.kyushu-u.ac.jp/opac_download_md/2398/149.pdf',
//'https://ejes.cz/index.php/ejes/article/download/194/98/898',
//'http://naosite.lb.nagasaki-u.ac.jp/dspace/bitstream/10069/4798/1/tm43_03_02_t.pdf',
//'https://www.jstage.jst.go.jp/article/specdiv/25/2/25_250209/_pdf/-char/en',
//'https://nagasaki-u.repo.nii.ac.jp/record/25425/files/tm43_03_02_t.pdf',
//'https://scholarspace.manoa.hawaii.edu/bitstreams/cd6980f8-ee3a-4f40-825d-3bcab5bbf111/download',
//'https://bjc.sggw.edu.pl/article/download/6242/5352',
//'http://bionames.org/sha1/adbd90f5272830507282a24b806a061a7bdf7e8f',
//'https://www.scielo.br/j/rbent/a/QKJPrRPtkYp9DhFLWPWxkGB/?format=pdf&lang=en',
//'https://sisbib.unmsm.edu.pe/BVRevistas/entomologia/v41/pdf/a09v41.pdf',
//'https://sisbib.unmsm.edu.pe/BVRevistas/entomologia/v41/pdf/a10v41.pdf',
//'https://www.parasite-journal.org/articles/parasite/pdf/1980/06/parasite1980556p707.pdf',
//'https://horizon.documentation.ird.fr/exl-doc/pleins_textes/cahiers/entomo/19161.pdf',
//'https://core.ac.uk/download/pdf/39878177.pdf',
//'https://repositories.lib.utexas.edu/bitstream/2152/29949/1/tmm-bulletin-27.pdf',
//'https://apps.dtic.mil/sti/pdfs/ADA285737.pdf',
//'https://journals.co.za/doi/epdf/10.10520/AJA10115498_193',
//'https://horizon.documentation.ird.fr/exl-doc/pleins_textes/cahiers/entomo/02746.pdf',
'https://horizon.documentation.ird.fr/exl-doc/pleins_textes/pleins_textes_5/b_fdi_08-09/10387.pdf',
);


foreach ($urls as $url)
{
	$source = get_source_details($url, '', true, $debug);	

	$source->pdf_filename = get_filename_from_url($url);	
	
	if (isset($source->{'content-disposition'}))
	{
		// this may cause problems if name has bad character encoding
		$content_disposition = $source->{'content-disposition'};
		
		$source->pdf_filename = sanitise_filename($content_disposition);
		if (!preg_match('/\.pdf$/i', $source->pdf_filename))
		{
			$source->pdf_filename .= '.pdf';
		}
	}
	
	$source->pdf_filename = $config['tmp'] . '/' . $source->pdf_filename;

	$command = "curl -L -o '$source->pdf_filename' '$source->url'";
	echo $command . "\n";
	system($command);
	
	store_pdf($source, $debug);
	
    $rand = rand(100000, 300000);
    echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
    usleep($rand);
	
	
}

?>
