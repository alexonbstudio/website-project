<?php

$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'All Right Reserved.',
			'developper' => 'Developper',
			'designer' => 'Designer'
		)
	),
	'pages' => array(
		'title' => 'Rules',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules',
			'fr' => 'règles',
			'en' => 'rules'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/law.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgu' => array(
		'title' => 'Terms and Conditions',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cgu',
			'fr' => 'conditions-générales-utilisation',
			'en' => 'terms-and-conditions'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cgu.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgv' => array(
		'title' => 'Terms and conditions of sale',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cgv',
			'fr' => 'conditions-générales-de-vente',
			'en' => 'terms-and-conditions-of-sale'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cgv.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'dmca' => array(
		'title' => 'DMCA',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'dmca',
			'fr' => 'dmca',
			'en' => 'dmca'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'legal' => array(
		'title' => 'Legal',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'legal',
			'fr' => 'mentions-légales',
			'en' => 'legal'
		),
		'content' => array(
			'owner' => array(
				'title' => 'Owner',
				'name' => 'Name:',
				'address' => 'Address:',
				'status' => 'Status:'
			),
			'business' => array(
				'title' => 'Business Local',
				'name' => 'Name:',
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
				'wp' => 'Website Project (WP)',
				'title' => 'Software'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'policy-privacy' => array(
		'title' => 'Privacy Policy',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'privacy-policy',
			'fr' => 'politique-de-confidentialité',
			'en' => 'privacy-policy'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/privacy-policy.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'rgpd' => array(
		'title' => 'GRPD',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'grpd',
			'fr' => 'rgpd',
			'en' => 'grpd'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/rgpd.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_law = json_encode($law);

?>