<?php
# $email['index']['content']['mail']['contact']
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
			'mail' => array(
				'contact' => 'Contact',
				'support' => 'Support',
				'commercial' => 'Commercial',
				'sponsor' => 'Sponsor',
				'partner' => 'Partner',
				'business' => 'Business'
			),
			'default' => array(
				'email' => 'E-mail',
				'phone' => 'Téléphone',
				'subject' => 'sujet',
				'name' => 'Nom',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'S\'il vous plaît entrer un e-mail valide',
				'phone' => 'S\'il vous plaît entrer un numéro valide',
				'subject' => 'S\'il vous plaît entrer au moins 8 caractères de sujet',
				'name' => 'S\'il vous plaît entrer au moins 4 caractères',
				'message' => 'S\'il vous plaît écrire quelque chose pour nous'
			),
			'form' => array(
				'load' => 'Chargement',
				'msg-thanks' => 'Votre message a été envoyé. Merci!',
				'send' => 'Message Envoyé'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_email = json_encode($email);

?>