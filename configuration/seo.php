<?php

$seo = array(
	'brave' => array(
		'token' => '4451d832bcfc59988ca2e9ad4c4cfd80512460d65764632b7fef46bb7fd7891e'
	),
	'google' => array(
		'tag' => '',
		'analystics' => 'UA-XXXXXXX-X',
		'' => ''
	),
	'yandex' => array(
		'analystics' => ''
	),
	'bing' => array(
		'key' => ''
	),
	'hcaptcha' => array(
		'key' => ''
	),
	'microsoft' => array(
		'key' => ''
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