<?php
#business['local']['status']['name']
$business = array(
	'local' => array(
		'born' => '', /*exemple Day/Month/Year number only indicate age */
		'name' => 'business compagny',/*IF empty variable output not show public/not use*/
		'siret' => '',
		'tva' => '',
		'vat' => '',
		'address' => '',
		'postal' => '75000',
		'city' => 'Paris',
		'region' => 'Paris',
		'contry' => 'France',
		'status' => 'SASU', /*Special status on france SASU, SARL, SAS, etc...*/
		'geo' => array(
		/*Pratical for use Google map JS/Mapbox or other*/
			'latitude' => '',
			'longitude' => ''
		),
		'mobile' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '1234567891',
		),
		'phone' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '1234567891',
		),
		'fax' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '1234567891',
		),
		'mail' => array(
			'contact' => 'con',
			'support' => 'supp',
			'commercial' => 'comm',
			'sponsor' => 'spon',
			'partner' => 'part',
			'business' => 'buz'
		),
		'team' => array(
		/*exemple*/
			'john' => array(
				'name' => 'John',
				'url' => 'john.tld'
			),
			'bob' => array(
				'name' => 'bob',
				'url' => 'bob.tld'
			)
			/* Custom your own here */
		)
	),
	'external' => array(
		/*exemple*/
		'london' => array(
			'' => ''
		)
		/*Custom your own here*/
	)
);

$JE_business = json_encode($business);

#####################################
#									#
#			Email|SMTP 				#
#									#
#####################################
/*
$hostMAIL = 'mail.exemple.tld';
$userMAIL = 'user@exemple.tld';
$passwdMAIL = '****';
$portMAIL = 587;
*/

?>