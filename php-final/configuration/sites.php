<?php
/*
exemple $sites['name'];
exemple $sites['e-mail']['contact'];

*/
$sites = array(
	'name' => 'Name',
	'domain' => 'domain.tld',
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'e-mail' => array(
		'contact' => 'con@email.tld',
		'support' => 'supp@@email.tld',
		'commercial' => 'comm@@email.tld',
		'sponsor' => 'spon@email.tld',
		'partner' => 'part@email.tld',
		'business' => 'buz@email.tld'
	),
	'template' => 'default'
);

$JE_sites = json_encode($sites);

?>