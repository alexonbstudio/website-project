<?php

$general = array(
	'full' => array(
		'there-is-him' => 'He has',
		'there-is-her' => 'She has',
		'there-iam' => 'I have',
		'year' => 'Years old',
		'website-exist' => 'the site has existed for more than',
		'entreprise-exist' => 'the company has existed for more than'
	),
	'pages' => array(
		'full' => array(
			'starter' => 'Get Started',
			'previous' => 'Previous',
			'next' => 'Next'
		)
	),
	'index' => array(
		'title' => 'Home',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'index.html',
			'fr' => 'accueil.html',
			'en' => 'home.html'
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

$JE_translate_general = json_encode($general);

?>