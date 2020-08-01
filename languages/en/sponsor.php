<?php

$sponsor = array(
	'index' => array(
		'title' => 'Sponsor',
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
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_sponsor = json_encode($sponsor);

?>