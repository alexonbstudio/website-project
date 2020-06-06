<?php
# exemple $social[''][''];
$social = array(
	'facebook' => array(
		'name' => 'alexonbstudio.fr',
		'url' => 'https://fb.me/alexonbstudio.fr',
		'admins' => '103042234555592',
		'profile-id' => '100000686899395',
		'app-id' => '215266456206074'
	),
	'twitter' => array(
		'name' => 'alexonbstudio',
		'url' => 'https://twitter.com/alexonbstudio'
	),
	'instagram' => array(
		'name' => 'alexonbstudio',
		'url' => 'https://instagram.com/alexonbstudio'
	),
	'linkedin' => array(
		'name' => 'alexonbalangue',
		'url' => 'https://linkedin.com/alexonbalangue'
	)
);

$JE_social = json_encode($social);

?>