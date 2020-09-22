<?php

$apiexternal = array(
	/*CAPTCHA*/
	'captcha' => array(
		'google' => array(
			'secret' => '',
			'private' => '',
			'public' => ''
		),
		'hcaptcha' => array(
			'secret' => '',
			'private' => '',
			'public' => ''
		)
	), 
	/*OTHER*/
	'verify-phone' => '' /**GET your API KEY on https://numverify.com/**/
);

$JE_apiexternal = json_encode($apiexternal);

?>