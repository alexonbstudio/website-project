<?php

$business = array(
	'local' => array(
		'name' => '',
		'siret' => '',
		'tva' => '',
		'vat' => '',
		'address' => '',
		'postal' => '75000',
		'city' => 'Paris',
		'region' => 'Paris',
		'contry' => 'France',
		'geo' => array(
			'latitude' => '',
			'longitude' => ''
		),
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
		'mail' => array(
			'contact' => 'con@email.tld',
			'support' => 'supp@@email.tld',
			'commercial' => 'comm@@email.tld',
			'sponsor' => 'spon@email.tld',
			'partner' => 'part@email.tld',
			'business' => 'buz@email.tld'
		)
	),
	'external' => array(
		/*Add here*/
	)
);

$JE_business = json_encode($business);

?>