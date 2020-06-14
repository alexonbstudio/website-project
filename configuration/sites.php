<?php
/*
exemple $sites['head']['robots'];
exemple $sites['update']['rdf'];
exemple $sites['e-mail']['contact'];

*/
$sites = array(
	'name' => 'Website Project (WP)',
	/*'domain' => 'website-project.test',=Nginx test*/ /*domain: exemple.tld*/
	'domain' => 'localhost', /*domain: exemple.tld*/
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'template' => 'default',
	'create' => array(),
	'update' => array(
		'rdf' => '2020-06-07'
	),
	'copyright' => array(
		'frontend' => 'Copyright &copy; 2019-'.date('Y'),
		'rdf' => 'Copyright &copy;'
	),
	'head' => array(
		'robots' => 'noopd, noydir'
	),
	'default-timezone' => 'Etc/UTC' /*Docs PHP variable date_default_timezone_set() */
);

$JE_sites = json_encode($sites);

?>