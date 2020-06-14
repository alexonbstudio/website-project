<?php
#general['pages']['full']['starter']
$general = array(
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
			'images' => 'themes/bg-alexonbstudio.png'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_general = json_encode($general);

?>