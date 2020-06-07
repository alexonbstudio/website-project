<?php
/*
exemple $sites['name'];
exemple $sites['update']['rdf'];
exemple $sites['e-mail']['contact'];

*/
$sites = array(
	'name' => 'Name',
	'domain' => 'website-project.test', /*domain: exemple.tld*/
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'template' => 'default',
	'create' => array(),
	'update' => array(
		'rdf' => '2020-06-07'
	),
	'copyright' => array(
		'frontend' => 'Copyright © '.date('Y'),
		'rdf' => 'Copyright ©'
	)
);

$JE_sites = json_encode($sites);

?>