<?php

$partner = array(
	'index' => array(
		'title' => 'Partenaire',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'partner',
			'fr' => 'partenaire',
			'en' => 'partner'
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

$JE_translate_partner = json_encode($partner);

?>