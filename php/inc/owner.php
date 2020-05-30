<?php


#exemple $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; 
#exemple $website['credits']['']; 
#$website['full']['top-msg'] 

$website = array(
	'info' => array(
		'langs' => array(
			'files' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), /*not need to change auto browser langages*/
			'seo' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 5), /*not need to change auto browser langages*/
			'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http' /*not need to change auto http or https from your server*/
		),
		'site' => array(
			'name' => 'Entrepreneur name',
			'default-url' => 'domaine.tld',
			'email-contact' => 'contact@xxxx.any',
			'email-devis' => 'contact@xxxx.any',
			'number' => array(
				'url' => '+3310101010',
				'text' => '01 00 00 00 00'
			)
		)
	),
	'hoster' => array(
		'name' => 'OVH',
		'siret' => 'RCS Lille Métropole 424 761 419 00045',
		'code-ape' => 'Code APE 6202A',
		'tva' => 'FR22 424 761 419',
		'address' => '2 rue Kellermann - 59100 Roubaix - France.',
		'siteweb' => 'www.OVH.com',
		'ssl-provider' => 'Cloudflare SSL universal - ECC COMODO',
		'cdn-provider' => 'CDN Cloudflare'
	),
	'credits' => array(
		'developper' => 'Alexon Balangue',
		'designer' => '',
		'webdesigner' => 'Themefisher',
		'images' => '',
		'tiers' => 'PHP, Json, Jquery, Jquery-UI, fancybox, slick, Bootstrap, FontAwesome'
	),
	'plombier' => array(
		'title' => 'Plombier',
		'description' => 'Nous vous proposons d’assurer tous vos travaux de plomberie dans nos différentes villes ',
		'url' => 'plombier.html'
	),
	'chauffagiste' => array(
		'title' => 'Chauffagiste',
		'description' => 'Les chauffagistes Artisan Dépanneur interviennent en 30 minutes sur les installations et dépannages de tous types de systèmes de chauffage',
		'url' => 'chauffagiste.html'
	),
	'vitrier' => array(
		'title' => 'Vitrier',
		'description' => 'Expérimentés, nous proposons nos services pour l’installation et le remplacement de tous types de vitres pour tous types de bâtiments',
		'url' => 'vitrier.html'
	),
	'electricien' => array(
		'title' => 'Electricien',
		'description' => 'Vous venez d’acheter une maison et vous avez besoin de notre savoir-faire dans le domaine électrique',
		'url' => 'electricien.html'
	),
	'serrurier' => array(
		'title' => 'Serrurier',
		'description' => 'En tant qu’expert en serrurerie, nous sommes spécialistes dans la pose de tous types de serrures. ',
		'url' => 'serrurier.html'
	),
	'volet-roulant-et-store' => array(
		'title' => 'Volet Roulant et Store',
		'description' => 'Artisan Dépanneur est spécialiste en réparation, installation & motorisation de volets roulants manuel ou électrique',
		'url' => 'volet-roulant-et-store.html'
	),
	'demande-devis' => array(
		'title' => 'Demander un devis',
		'description' => 'Demander un devis',
		'url' => 'demander-devis.html',
		'contents' => array(
			'email' => 'E-mail',
			'name' => 'Nom complet',
			'phone' => 'Téléphone',
			'address' => 'Adresse',
			'message' => 'Message',
			'send' => 'Envoyer'
				
		)
	),
	'contactez-nous' => array(
		'title' => 'Contactez-Nous',
		'description' => 'N\'hésiter pas de nous contacter',
		'url' => 'contactez-nous.html',
		'contents' => array(
			'email' => 'E-mail',
			'name' => 'Nom complet',
			'phone' => 'Téléphone',
			'address' => 'Adresse',
			'message' => 'Message',
			'send' => 'Envoyer'
				
		)
	),
	'plan-du-site' => array(
		'title' => 'Plan du site',
		'description' => 'Notre Plan du site',
		'url' => 'plan-du-site.html'
	),
	'error' => array(
		'title' => 'Page erreur',
		'description' => 'Erreur de page',
		'url' => 'error.html',
			'contents' => array(
				'col1' => array(
					'line1' => 'Une erreur est survenue pendant l\'exécution de la requête.',
					'line2' => 'Vous ne pouvez pas visiter cette page car :',
					'line3' => 'bookmark/favori périmé',
					'line4' => 'une adresse erronée',
					'line5' => 'Un moteur de recherche possède un listing périmé pour ce site',
					'line6' => 'vous n\'avez pas accès à cette page',
					'line7' => 'Votre message n\'a pas été correctement envoyé avec succès'
				),
				'col2' => array(
					'line1' => 'Aller à la page d\'accueil'
				)
			)
	),
	'success' => array(
		'title' => 'Page success',
		'description' => 'Avec success',
		'url' => 'success.html',
			'contents' => array(
				'info' => 'Votre message à été bien envoyé avec success',
				'return' => 'retourné à la page d\'accueil'
			)
	),
	'home' => array(
		'title' => 'Entreprise du bâtiment',
		'description' => ' professionnel, plombier, électricien, chauffagiste, vitrier, serrurier, volet roulant et store',
		'url' => 'index.html'
	),
	'notice-legal' => array(
		'title' => 'Mention légale',
		'description' => 'Mention légale ',
		'url' => 'mention-legale.html'
	),
	'full' => array(
		'email' => 'E-mail',
		'call-now' => 'Appeler aux',
		'all' => 'Accueil',
		'keywords' => 'artisan dépannage à domicile, plombier, électricien, chauffagiste, vitrier, serrurier, volet roulant et store, plombier paris, artisan professionnel',
		'top-open' => 'Ouvert 24 heures sur 24h et 7 jours sur 7j',
		'top-msg' => 'Adresse Paris 75000',
		'top' => array(
			'text-1' => 'title',
			'text-2' => 'title',
			'text-3' => 'title',
			'text-4' => 'Service',
			'text-5' => 'Horaires'
		),
		'contents' => array(
			'text-1' => 'text',
			'text-2' => 'text',
			'text-3' => 'text',
			'text-4' => 'Lundi - Dimanche: xxhxx - xxhxx'
		)
	)
);

$encoder = json_encode($website);

?>