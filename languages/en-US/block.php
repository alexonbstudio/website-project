<?php

$block = array(
	'success' => array(
		'title' => 'Success',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'contact/success.html',
			'fr' => 'contact/succès.html',
			'en' => 'contact/success.html'
		),
		'content' => array(
			'top' => array(),
			'middle' => array(),
			'footer' => array()
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg'  /*directory images from <exemple.tld>/assets */
		)
	),
	'error' => array(
		'title' => 'Error',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'error.html',
			'fr' => 'erreur.html',
			'en' => 'error.html'
		),
		'content' => array(
			'top' => array(),
			'middle' => array(),
			'footer' => array()
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_block = json_encode($block);

?>