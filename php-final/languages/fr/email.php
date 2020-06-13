<?php
# $email['index']['content']['default']['phone']
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
				'email' => 'E-mail',
				'phone' => 'Téléphone',
				'name' => 'Nom',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'S\'il vous plaît entrer un e-mail valide',
				'phone' => 'S\'il vous plaît entrer un numéro valide',
				'name' => 'S\'il vous plaît entrer au moins 4 chars',
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
			'images' => 'themes/bg-alexonbstudio.png'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_email = json_encode($email);

?>