<?php

$business = array(
	'local' => array(
		'name' => 'Compagny',
		'siret' => '',
		'tva' => '',
		'vat' => '',
		'address' => '',
		'postal' => '',
		'city' => '',
		'contry' => '',
		'mobile' => array(
			'code' => '+33',
			'normal' => '(0)',
			'number' => '1234567891',
		),
		'phone' => array(
			'code' => '+33',
			'normal' => '(0)',
			'number' => '1234567891',
		),
		'fax' => array(
			'code' => '+33',
			'normal' => '(0)',
			'number' => '1234567891',
		),
		'e-mail' => 'team@exemple.tld',
	),
	'external' => array(
		/*Add here*/
	)
);

$JE_business = json_encode($business);

?>