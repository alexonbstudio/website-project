<?php

$sitemap = array(
	'index' => array(
		'title' => 'Plan du site',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sitemap.html',
			'fr' => 'plan-du-site.html',
			'en' => 'sitemap.html'
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