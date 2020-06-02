<?php
/*
PHPMailler : 6.0.3
PHP: 7.2.3
Json-(LD)
Bootstrap: 4
FontAwesome: 5.0.8
Developper: Alexon Balangue
WebDesigner: Creative Tim (template Now UI Kit free 1.1.0)
advanced
Map from Mapbox.com
*/

#exemple $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; 
#exemple $website['info']['langs']['seo']; 
#exemple $website['info']['langs']['files']; 
#exemple $website['credits']['']; 
#exemple $website['info']['site']['name']; 

$website = array(
	'info' => array(
		'langs' => array(
			'files' => substr(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']), 0, 2), /*not need to change auto browser langages*/
			'seo' => substr(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']), 3, 5), /*not need to change auto browser langages*/
			'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http' /*not need to change auto http or https from your server*/
		),
		'site' => array(
			'name' => 'AlexonbStudio',
			'default-url' => 'alexonbstudio.fr',/*put your own site url without protocol & slash*/
			'email-contact' => 'contact@alexonbstudio.fr'
		)
	),
	'hoster' => array(
		'name' => 'OVH',
		'siret' => 'RCS Lille Métropole 424 761 419 00045',
		'code-ape' => 'Code APE 6202A',
		'tva' => 'FR22 424 761 419',
		'address' => '2 rue Kellermann - 59100 Roubaix - France.',
		'siteweb' => '<a href="https://www.ovh.com" target="_blank">www.OVH.com</a>',
		'ssl-provider' => 'Lets Encrypt',
		'cdn-provider' => ''
	),
	'credits' => array(
		'developper' => 'Alexon Balangue',
		'designer' => '--',
		'webdesigner' => 'Colorlib',
		'images' => 'freebik',
		'tiers' => '--'
	)
);

$encoder1 = json_encode($website);
//.' '.$website['hoster']['']

?>