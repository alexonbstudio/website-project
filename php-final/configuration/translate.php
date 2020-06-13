<?php
# exemple $translate['manual']['backend']['french']
# exemple $translate['manual']['frontend']['french']

$translate = array(
	'auto' => array(
		'files' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2),
		'seo' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 5)
	),
	'manual' => array(
		'backend' => array(
			'french' => 'fr',
			'english' => 'en',
			'spanish' => 'es',
			'german' => 'de'
		),
		'frontend' => array(
			'french' => 'fr',
			'english' => 'en',
			'spanish' => 'es',
			'german' => 'de'	
		)

	)
);

$JE_translate = json_encode($translate);

?>