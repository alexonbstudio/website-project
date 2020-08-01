<?php

$block = array(
	'success' => array(
		'title' => 'Success',
		'description' => 'Your message has been sent successfully',
		'keyword' => '',
		'url' => array(
			'default' => 'contact/success.html',
			'fr' => 'contact/succès.html',
			'en' => 'contact/success.html'
		),
		'content' => array(
			'msg' => 'Your message has been sent successfully'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/success.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	),
	'error' => array(
		'title' => 'Error',
		'description' => 'Sorry your message was not sent',
		'keyword' => '',
		'url' => array(
			'default' => 'error.html',
			'fr' => 'erreur.html',
			'en' => 'error.html'
		),
		'content' => array(
			'line1' => 'An error occurred while running the query.',
			'line2' => 'You can not visit this page because:',
			'line3' => 'bookmark / expired bookmark',
			'line4' => 'an incorrect address',
			'line5' => 'A search engine has an outdated listing for this site',
			'line6' => 'You do not have access to this page',
			'line7' => 'Your message has not been successfully sent successfully'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/error.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_block = json_encode($block);

?>