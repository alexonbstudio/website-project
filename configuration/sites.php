<?php
/*
exemple $sites['debug'];
exemple $sites['update']['rdf'];
exemple $sites['e-mail']['contact'];

*/
$sites = array(
	'name' => 'Website Project (WP)',
	/*'domain' => 'website-project.test',=Nginx test*/ /*domain: exemple.tld*/
	'domain' => 'dev.alexonbstudio.fr', /*domain: exemple.tld*/
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'template' => 'default',
	'create' => array(),
	'update' => array(
		'rdf' => '2020-06-07'
	),
	'copyright' => array(
		'frontend' => 'Copyright &copy; 2019-'.date('Y'), /*show on template */
		'rdf' => 'Copyright &copy;' /*show only template seo/txt/rdf*/
	),
	'head' => array(
		'robots' => 'noopd, noydir' /*Only show on template header.php | robots meta*/
	),
	'default-timezone' => 'Etc/UTC' /*Docs PHP variable date_default_timezone_set() */
);

$JE_sites = json_encode($sites);

?>