<?php
#exemple $offices['all']['siege-social']['adresse'].'<br />'.$offices['all']['siege-social']['code-postal'].' '.$offices['all']['siege-social']['villes'].' '.$offices['all']['siege-social']['pays']; 


$offices = array(
	'all' => array(
		'siege-social' => array(
			'status' => 'Particulier',
			'full-name' => 'Alexon Balangue',
			'adresse' => '66 BD BESSIERES',
			'code-postal' => '75017',
			'villes' => 'Paris',
			'pays' => 'France',
			'nFix-url' => '--',
			'nFix-text' => '--',
			'nmobile-url' => '+33699119497',
			'nmobile-text' => '06 99 11 94 97',
			'number-siret' => '--', /*exemple: 830 957 619 00018*/
			'number-ape' => '--', /* exemple:6201Z (Principal) - Programmation informatique*/
			'number-tva-intra' => '--', /*exemple: FR 29 83095761 (générer sur societe.com)*/
			'number-sap' => '--', /*SAP830957619*/
			'number-assurance-rcpro' => '--', /*N° contract or name compagny inssurance*/
			'web' => array(
				'social' => array(
					'facebook' => 'alexonbstudio',
					'gplus' => '',#Google+
					'twitter' => 'alexonbstudio'
				),
				'search' => array(
					'google-business' => '',
					'yelp-biz' => '',
					'page-jaune' => '',
					'yandex-biz' => '',
					'bing-biz' => ''
					
				),
				'pro' => array(
					'viadeo' => 'alexonbalangue',
					'xing' => 'alexonbalangue',
					'linkedin' => 'alexonbalangue'
				),
				'media' => array(
					'instagram' => 'alexonbstudio',
					'youtube' => '',
					'daylimotion' => 'alexonbalangue',
					'pinterest' => 'alexonbalangue'
					
				)
			)
		),
		'personal' => array(
			'prenom' => 'Alexon',
			'nom' => 'Balangue',
			'adresse' => '66 BD BESSIERES',
			'code-postal' => '75017',
			'villes' => 'Paris',
			'pays' => 'France',
			'nFix-url' => '--',
			'nFix-text' => '--',
			'nmobile-url' => '+33699119497',
			'nmobile-text' => '06 99 11 94 97',
			'nFax-url' => '--',
			'nFax-text' => '--',
			'web' => array(
				'social' => array(
					'facebook' => 'alexonbstudio',
					'twitter' => 'alexonbstudio'
				),
				'search' => array(
					'google-business' => '',
					'yelp-biz' => '',
					'page-jaune' => '',
					'yandex-biz' => '',
					'bing-biz' => ''
					
				),
				'pro' => array(
					'viadeo' => 'alexonbalangue',
					'linkedin' => 'alexonbalangue'
				),
				'media' => array(
					'instagram' => 'alexonbstudio',
					'youtube' => '',
					'daylimotion' => 'alexonbalangue',
					'pinterest' => 'alexonbalangue'
					
				)
			),
			'map' => array(
				'gps-perso' => array(
					'longitude' => '',
					'laltitude' => ''
				),
				'gps-pro' => array(
					'longitude' => '',
					'laltitude' => ''
				),
			)
		)
	)/*,
	
	
	
	
	*/
);

$encoder2 = json_encode($offices);

?>