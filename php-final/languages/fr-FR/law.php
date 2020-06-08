<?php
# $law['full']['content']['footer']
$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'Tous Droits Réservés.'
		)
	),
	###################PAGE URL#####################
	'pages' => array(
		'title' => 'Règles',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules.html',
			'fr' => 'règles.html',
			'en' => 'rules.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgu' => array(
		'title' => 'Conditions générales d\'utilisation',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cgu.html',
			'fr' => 'conditions-générales-utilisation.html',
			'en' => 'terms-and-conditions.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgv' => array(
		'title' => 'Conditions générales de vente',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cgv.html',
			'fr' => 'conditions-générales-de-vente.html',
			'en' => 'terms-and-conditions-of-sale.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'dmca' => array(
		'title' => 'DMCA',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'dmca.html',
			'fr' => 'dmca.html',
			'en' => 'dmca.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'legal' => array(
		'title' => 'Mentions légales',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'legal.html',
			'fr' => 'mentions-légales.html',
			'en' => 'legal.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'policy-privacy' => array(
		'title' => 'Politique de confidentialité',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'privacy-policy.html',
			'fr' => 'politique-de-confidentialité.html',
			'en' => 'privacy-policy.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'rgpd' => array(
		'title' => 'RGPD',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'grpd.html',
			'fr' => 'rgpd.html',
			'en' => 'grpd.html'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'img/imag.jpg' /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_law = json_encode($law);

?>