<?php

$email = array(
	'index' => array(
		'title' => 'Contact',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'contact.html',
			'fr' => 'contactez.html',
			'en' => 'contact.html'
		),
		'content' => array(
			'default' => array(
				'email' => 'Email:',
				'phone' => 'Phone:',
				'name' => 'Full Name:',
				'message' => 'Message:'
			),
			'placeholder' => array(
				'email' => '',
				'phone' => '',
				'name' => '',
				'message' => ''
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_email = json_encode($email);

?>