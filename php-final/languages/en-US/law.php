<?php

$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'All Right Reserved.'
		)
	),
	'pages' => array(
		'title' => 'Rules',
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
		'title' => 'Terms and Conditions',
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
		'title' => 'Terms and conditions of sale',
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
		'title' => 'Legal',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'legal.html',
			'fr' => 'mentions-légales.html',
			'en' => 'legal.html'
		),
		'content' => array(
			'owner' => array(
				'title' => 'Owner',
				'name' => 'Name of website:',
				'address' => 'Address:',
				'status' => 'Status:'
			),
			'business' => array(
				'title' => 'Business Local',
				'name' => 'Name of websitee:',
				'address' => 'Address:',
				'status' => 'Status:'
			),
			'hosting' => array(
				'title' => 'Hosting',
				'address' => 'Address:',
				'name' => 'name:'
			),
			'server' => array(
				'title' => 'Cloud computing',
				'address' => 'Address:',
				'name' => 'name:'
			),
			'credits' => array(
				'title' => 'Credits',
				'developper' => 'Developper:',
				'designer' => 'Designer:',
				'webmaster' => 'Webmaster:',
				'marketing' => 'Marketing:',
				'image' => 'Image:',
				'photographer' => 'Photographer:',
				'video' => 'Video:',
				'webdesigner' => 'WebDesigner:'
			),
			'status' => array(
				'particular' => 'Particuliar',
				'association' => 'Association',
				'small' => 'Small business',
				'medium' => 'Business',
				'big' => 'Big business'
			),
			'software' => array(
				'name' => 'Website Project (WP)',
				'title' => 'Software'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg' /*directory images from <exemple.tld>/assets */
		)
	),
	'policy-privacy' => array(
		'title' => 'Privacy Policy',
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
		'title' => 'GRPD',
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