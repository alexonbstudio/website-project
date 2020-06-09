<?php
# exemple $partner['planethoster']['sites']
$partner = array(
	'planethoster' => array(
		'name' => 'PlanetHoster',
		'url' => 'https://www.planethoster.com/goph-af81b6dedd8f43f',
		'images' => 'https://alexonbstudio.fr/assets/',
		'code' => 'PHA-alexonbstudio',
		'sites' => 'planethoster.com'
	)
);

$JE_partner = json_encode($partner);

?>