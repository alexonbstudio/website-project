<?php
#general['pages']['full']['starter']
$general = array(
	'full' => array(
		'there-is-him' => 'Il a',
		'there-is-her' => 'Elle a',
		'there-iam' => 'J\'ai',
		'year' => 'Ans',
		'website-exist' => 'le site existe depuis plus de',
		'entreprise-exist' => 'la société existe depuis plus de'
	),
	'pages' => array(
		'full' => array(
			'starter' => 'Démarrer',
			'previous' => 'Précédent',
			'next' => 'Suivant'
		)
	),
	'index' => array(
		'title' => 'Accueil',
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