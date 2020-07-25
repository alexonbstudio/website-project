<?php
# exemple $translate['manual']['backend']['french']
# exemple $translate['manual']['frontend']['french']
# exemple $translate['meta']['lang']['FR']

$translate = array(
	'manual' => array(
		'backend' => array(
			'french' => 'FR',
			'english' => 'EN',
			'spanish' => 'ES',
			'german' => 'DE'
		),
		'frontend' => array(
			'french' => 'fr',
			'english' => 'en',
			'spanish' => 'es',
			'german' => 'de'	
		)

	),
	'meta' => array(
		'lang' => array(
			'US' => 'en-US',
			'GB' => 'en-GB',
			'FR' => 'fr-FR',
			'DE' => 'de-DE',
			'ES' => 'es-ES',
		)
	)
);

$JE_translate = json_encode($translate);

?>