<?php
# $private['mail']['public']

$private = array(
	'name' => 'Private name',/*IF empty variable output not show public/not use*/
	'address' => '',
	'postal' => '75000',
	'city' => 'Paris',
	'region' => 'Paris',
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
		'public' => 'contact',
		'private' => 'exemple'
	)
);

$JE_private = json_encode($private);

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