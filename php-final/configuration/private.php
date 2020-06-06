<?php

$private = array(
	'name' => 'AlexonbStudio',
	'address' => '',
	'postal' => '75017',
	'city' => 'Paris',
	'contry' => 'France',
	'phone' => array(
		'code' => '+33',
		'normal' => '(0)',
		'number' => '1234567891',
	),
	'mobile' => array(
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
		'public' => 'contact@exemple.tld',
		'private' => 'private@exemple.tld'
	)
);

$JE_private = json_encode($private);

?>