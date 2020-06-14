<?php
# exemple $partner['planethoster']['sites']
$partner = array(
	'planethoster' => array(
		'name' => 'PlanetHoster',
		'url' => 'https://www.planethoster.com/goph-af81b6dedd8f43f',
		'images' => 'https://alexonbstudio.fr/assets/',
		'code' => 'PHA-alexonbstudio',
		'sites' => 'planethoster.com'
	),
	'safecreative' => array(
		'name' => 'safecreative',
		'url' => 'https://www.safecreative.org/',
		'images' => 'https://alexonbstudio.fr/assets/',
		'code' => '2AWLRJ',
		'sites' => 'safecreative.org'
	)
);

$JE_partner = json_encode($partner);

?>