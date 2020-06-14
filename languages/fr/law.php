<?php
# $law['full']['content']['developper']
$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'Tous Droits Réservés.',
			'developper' => 'Développeur',
			'designer' => 'Designer'
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
			'images' => 'background/law/law.jpg' /*directory images from <exemple.tld>/assets */
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
			'images' => 'background/law/cgu.jpg' /*directory images from <exemple.tld>/assets */
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
			'images' => 'background/law/cgv.jpg' /*directory images from <exemple.tld>/assets */
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
			'images' => 'background/law/copyright.jpg' /*directory images from <exemple.tld>/assets */
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
			'owner' => array(
				'title' => 'Prioritaire',
				'name' => 'Nom du site:',
				'address' => 'Adresse:',
				'status' => 'Status:'
			),
			'business' => array(
				'title' => 'Siège Social',
				'name' => 'Nom du site:',
				'address' => 'Adresse:',
				'status' => 'Status:'
			),
			'hosting' => array(
				'title' => 'Hébergeur',
				'address' => 'Adresse:',
				'name' => 'Nom:'
			),
			'server' => array(
				'title' => 'Cloud computing',
				'address' => 'Adresse:',
				'name' => 'Nom:'
			),
			'credits' => array(
				'title' => 'Honeur',
				'developper' => 'Développeur web:',
				'designer' => 'Designer:',
				'webmaster' => 'Webmestre:',
				'marketing' => 'Marketeur:',
				'image' => 'Image:',
				'photographer' => 'Photograph:',
				'video' => 'Vidéo:',
				'webdesigner' => 'WebDesigner:'
			),
			'status' => array(
				'particular' => 'Particulier',
				'association' => 'Association',
				'small' => 'Micro Entrepreneur',
				'medium' => 'TPE',
				'big' => 'PME'
			),
			'software' => array(
				'name' => 'Website Project (WP)',
				'title' => 'Logiciel'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg' /*directory images from <exemple.tld>/assets */
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
			'images' => 'background/law/privacy-policy.jpg' /*directory images from <exemple.tld>/assets */
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
			'images' => 'background/law/rgpd.jpg' /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_law = json_encode($law);

?>