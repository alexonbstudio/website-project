<?php

$version = array(
	'internal' => array(
		'boostrap' => array(
			'css' = '',
			'js' = ''
		),
		'fontawesome' => array(
			'css' = '',
			'js' = ''
		)	
	),
	'external' => array(
		/*CDNJ*/
		'boostrap' => array(
			'css' = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css',
			'js' = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js'
		),
		'fontawesome' => array(
			'css' = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
			'js' = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js'
		),
		'jquery' => array(
			'js' = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'
		)
	)
);

$JE_version = json_encode($version);

?>