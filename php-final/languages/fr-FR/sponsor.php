<?php

$sponsor = array(
	'index' => array(
		'title' => 'Sponsorisé',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sponsor.html',
			'fr' => 'sponsorisé.html',
			'en' => 'sponsor.html'
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

$JE_translate_sponsor = json_encode($sponsor);

?>