<?php

$sitemap = array(
	'index' => array(
		'title' => 'Sitemap',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sitemap.html',
			'fr' => 'Plan-du-site.html',
			'en' => 'sitemap.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		)
	)
);

$JE_translate_sitemap = json_encode($sitemap);

?>