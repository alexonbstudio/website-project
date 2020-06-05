<?php

$private = array(
	'name' => '',
	'address' => '',
	'postal' => '',
	'city' => '',
	'contry' => '',
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
	)
);

$JE_private = json_encode($private);

?>