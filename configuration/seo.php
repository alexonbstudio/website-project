<?php
# $seo['hcaptcha']['private-key']
$seo = array(
	'crisp' => array(
		'key' => '' 
	),
	'tidio' => array(
		'key' => '' 
	),
	'quantcast' => array(
		'key' => '' /*gH0YrwXWXWWS3*/
	),
	'hcaptcha' => array(
		'public-key' => '', /* Key public*/
		'private-key' => '' /* Key private*/
	),
	'brave' => array(
		'token' => ''
	),
	'google' => array(
		'analystics' => 'UA-xxxxxxxxx-x',
		'tag-manager' => 'GTM-xxxxxxx'
	),
	'shareaholic' => array(
		'key' => ''
	),
	'yandex' => array(
		'analystics' => '' /**/
	),
	'bing' => array(
		'key' => ''
	),
	'microsoft' => array(
		'key' => ''
	),
	'addthis' => array(
		'key' => '' /*ra-5efbed45630393b0*/
	),
	'html-verify' => array(
		/** Verification HTLM Social & Video & Search Engine after that change your seo.htaccess **/	
		'dailymotion' => array(
			'key' => ''
		),
		'google' => array(
			'key' => ''
		),
		'pinterest' => array(
			'key' => ''
		),
		'yandex' => array(
			'key' => ''
		)
		
	),
	/*			All Browser Pinned - just color on HEX			*/
	'browsers' => array(
		'color' => array(
			'title' => '#2b5797',
			'themes' => '#ffffff',
			'safari' => '#5bbad5',
			'background' => '#ffffff'
		)
	)
);

$JE_seo = json_encode($seo);
# $seo['browsers']['color']['title']
?>