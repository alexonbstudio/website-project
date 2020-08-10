<?php

$sitemap = array(
	'index' => array(
		'title' => 'Sitemap',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sitemap',
			'fr' => 'Plan-du-site',
			'en' => 'sitemap'
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

$JE_translate_sitemap = json_encode($sitemap);

?>