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
			'mail' => array(
				'contact' => 'Contact',
				'support' => 'Support',
				'commercial' => 'Commercial',
				'sponsor' => 'Sponsor',
				'partner' => 'Partner',
				'business' => 'Business'
			),
			'default' => array(
				'email' => 'Email',
				'phone' => 'Phone',
				'subject' => 'sujet',
				'name' => 'Full Name',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'Please enter a valid email',
				'phone' => 'Please enter a valid number',
				'subject' => 'Please enter at least 8 characters of subject',
				'name' => 'Please enter at least 4 characters',
				'message' => 'Please write something for us'
			),
			'form' => array(
				'load' => 'Loading',
				'msg-thanks' => 'Your message has been sent. Thank you!',
				'send' => 'Send Message'
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