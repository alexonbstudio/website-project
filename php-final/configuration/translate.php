<?php
# exemple $translate['auto']['seo']

$translate = array(
	'auto' => array(
		'files' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5),
		'seo' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)
	),
	'manual' => array(
		'backend' => array(
			'french' => 'fr-FR',
			'english' => 'en-US'
		),
		'frontend' => array(
			'french' => 'fr',
			'english' => 'en'		
		)

	)
);

$JE_translate = json_encode($translate);

?>