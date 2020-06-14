<?php

$seo = array(
	'brave' => array(
		'token' => '4451d832bcfc59988ca2e9ad4c4cfd80512460d65764632b7fef46bb7fd7891e'
	),
	'google' => array(
		'tag' => '',
		'analystics' => 'UA-153512940-1',
		'' => ''
	),
	'yandex' => array(
		'analystics' => '64702624'
	),
	'bing' => array(
		'key' => '45EBC3A755193831C491868CCC1925BB'
	),
	'microsoft' => array(
		'key' => '2181a55f-b920-49f9-ad42-2c979d5c09de'
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
			'key' => 'eebbc322e6a0ff75'
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