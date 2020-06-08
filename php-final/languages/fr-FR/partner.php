<?php

$partner = array(
	'index' => array(
		'title' => '',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'partner.html',
			'fr' => 'partenaire.html',
			'en' => 'partner.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_partner = json_encode($partner);

?>