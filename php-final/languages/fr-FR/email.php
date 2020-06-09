<?php

$email = array(
	'index' => array(
		'title' => 'Contactez',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'contact.html',
			'fr' => 'contactez.html',
			'en' => 'contact.html'
		),
		'content' => array(
			'default' => array(
				'email' => 'E-mail:',
				'phone' => 'Téléphone:',
				'name' => 'Nom complet:',
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