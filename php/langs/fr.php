<?php
#exemple $trad['pages']['index']['title']; 

$trad = array(
	'pages' => array(
		'index' => array(
			'title' => 'Accueil',
			'description' => 'Bienvenue sur la page des projet AlexonbStudio',
			'keyword' => 'jeux vidéo, mobile, dj, serveur, streaming, informatique, gaming',
			'url' => 'accueil.html',
			'url-full' => 'accueil.html'
		),
		'sponsor' => array(
			'title' => 'Sponsorisé',
			'description' => 'Voici la pages spécialement du placement de produit sponsorisé',
			'keyword' => 'produit, sponsorisé, numérique, vente, achat, marketing, client',
			'url' => 'sponsorisé.html',
			'url-full' => 'sponsorisé.html'
		),
		'market' => array(
			'title' => 'Boutiques',
			'description' => 'La boutique contient plusieurs produits de goodies gérant par des intermédiaires',
			'keyword' => 'magasin, boutique, vente, achat, produit, goodies, t-shirt, mug',
			'url' => 'boutiques.html',
			'url-full' => 'boutiques.html',
			'content' => array(
				'buyit' => 'Acheter maintenant',
				'custom' => 'Personnalisé'
			),
			'supply' => array(
				'shop' => 'Boutique officiel',
				'without-inter' => 'Sans intermédiaire',
				'title-gateway' => 'Mode de paiement',
				'title-delivery' => 'Livraison',
				'title-brands' => 'Marques',
				'span-delivery' => '',
				'span-madein-eu' => 'Fabriquer en Europe'
			),
			'faqs' => array(
				'title' => 'Questions fréquemment posées',
				'question' => array(
					'1' => '',
					'2' => '',
					'3' => '',
					'4' => ''
				),
				'response' => array(
					'1' => '',
					'2' => '',
					'3' => '',
					'4' => ''
				)
			)
		),
		'invest' => array(
			'title' => 'investissement',
			'description' => 'Voici la page dédié aux investissement que ce soit le minage ou autre chose',
			'keyword' => 'investir, projet, cloud',
			'url' => 'invest.html',
			'url-full' => 'invest.html',
			'content' => array(
				'buyit' => 'Investir maintenant',
				'mine' => 'minage',
				'referral' => 'Ensemble de 10% bénéfice'
			)
		),
		'projet' => array(
			'title' => 'Mes projet',
			'description' => 'Voici la page de toutes mes projet',
			'keyword' => 'projet, transport, gaming, dj, producer, gaming, stream, IT',
			'url' => 'projet.html',
			'url-full' => 'projet.html',
			'transport' => array(
				'title' => 'Transport',
				'description' => 'Voici la page dédié au transport le moyen de locomotion',
				'keyword' => 'transport, ratp, trottinette électrique',
				'url' => 'projet/transport.html',
				'url-full' => 'projet/transport.html',
				'content' => array(
					'title' => 'Lire plus',
					'description' => 'Voici une aperçu de quelques logiciels ou de matériels que j\'utilise en ce moment dans le transport',
					'keyword' => 'logiciels, matériels, transport',
					'url' => 'projet/transport/lire-plus.html',
					'url-full' => 'projet/transport/lire-plus.html',
					'readmore' => array(
						'title1' => 'Logiciels',
						'title2' => 'Matériels'
					)
				),
				'short-content' => 'Réaliser différentes trajets quotidienne sur les routes d\'île-de-France dans les alentours de paris'
			),
			'gaming' => array(
				'title' => 'Gaming',
				'description' => 'Voici la page dédié aux gameurs de toutes nécessité',
				'keyword' => 'gameurs, jeux vidéo, gaming, mobile, pc',
				'url' => 'projet/gaming.html',
				'url-full' => 'projet/gaming.html',
				'content' => array(
					'title' => 'Lire plus',
					'description' => 'Voici une aperçu de quelques logiciels ou de matériels que j\'utilise en ce moment dans le gaming',
					'keyword' => 'software, hardware, gaming, gamers',
					'url' => 'projet/gaming/lire-plus.html',
					'url-full' => 'projet/gaming/lire-plus.html',
					'readmore' => array(
						'title1' => 'Logiciels',
						'title2' => 'Matériels'
					)
				),
				'short-content' => 'Je vous montre mon setup, avec quoi je joue, quels matériel et de logiciel que j\'utilise en ce moment.'
			),
			'dj-producer' => array(
				'title' => 'Dj & Producteur',
				'description' => 'Voici la page dédié aux producteur de musique et aux deejay',
				'keyword' => 'dj, producer, deejay, musique, mix',
				'url' => 'projet/dj-producer.html',
				'url-full' => 'projet/dj-producer.html',
				'content' => array(
					'title' => 'Lire plus',
					'description' => 'Voici une aperçu de quelques logiciels ou de matériels que j\'utilise en ce moment de Dj et producer',
					'keyword' => 'dj, producer, deejay, musique, mix, logiciels, matériels',
					'url' => 'projet/dj-producer/lire-plus.html',
					'url-full' => 'projet/dj-producer/lire-plus.html',
					'readmore' => array(
						'title1' => 'Logiciels',
						'title2' => 'Matériel'
					)
				),
				'short-content' => 'Quels logiciels et de matériels de Dj\'s et de production musicale en oeuvre.'
			),
			'streaming' => array(
				'title' => 'Stream',
				'description' => 'Voici la page dédié aux streaming',
				'keyword' => 'streaming, radio, vidéo',
				'url' => 'projet/streaming.html',
				'url-full' => 'projet/streaming.html',
				'content' => array(
					'subscribe' => 'Souscrire',
					'shoutcast' => array(
						'title' => 'Radio',
						'description' => 'Voici une aperçu de quelques logiciels ou de matériels que j\'utilise en ce moment dans le shoutcast',
						'keyword' => 'radio, shoutcast',
						'url' => 'projet/streaming/radio.html',
						'url-full' => 'projet/streaming/radio.html',
						'player' => array(
							'current' => 'Morceau en cours:',
							'load' => 'Chargement ...',
							'streamt' => 'Titre du flux:',
							'bit' => 'Débit binaire:',
							'curr-lis' => 'Auditeurs actuels:',
							'max-lis' => 'Auditeurs maximum:',
							'serv-stat' => 'Statut du serveur:',
							'autodj-stat' => 'Statut AutoDJ:',
							'source-connect' => 'Source connectée:',
							'stat-time' => 'Station temps:',
							'curr-plist' => 'Playlist actuelle:',
							'track-de' => 'Détails de la piste:',
							'raw-meta' => 'Métadonnées brutes:',
							'album-img' => 'Image de l\'album:',
							'buy-album' => 'Achetez cet album',
							'other-r' => 'Autre radio disponible du 1 à 4 chaque mois à partir de minuit sur <a href="http://alexonbstudio.freeboxos.fr:8000/index.html">http://alexonbstudio.freeboxos.fr:8000/index.html</a>'
						)
					)
				)
			),
			'IT' => array(
				'title' => 'Informatique',
				'description' => '',
				'keyword' => '',
				'url' => 'projet/informatique.html',
				'url-full' => 'projet/informatique.html',
				'content' => array(
					'btn' => 'Accéder',
					'codeur' => 'Codeur',
					'maintenance' => array(
						'title' => 'Maintenance',
						'description' => 'Voici une aperçu de quelques logiciels ou de matériels que j\'utilise en ce moment dans la maintenance',
						'keyword' => 'projet, informatique, maintenance, IT',
						'url' => 'projet/informatique/maintenance.html',
						'url-full' => 'projet/informatique/maintenance.html',
						'ask' => 'Toutes les logiciels et de matériels utilisées pour vous aidez facilement.',
						'readmore' => array(
							'title1' => 'Logiciels',
							'title2' => 'Matériel'
						)
					),
					'security' => array(
						'title' => 'Sécurité',
						'description' => 'Voici une aperçu de quelques logiciels ou de matériels que j\'utilise en ce moment dans la sécurité',
						'keyword' => 'projet, informatique, web, sécurité',
						'url' => 'projet/informatique/security.html',
						'url-full' => 'projet/informatique/security.html',
						'ask' => 'Avec quels moyen de sécurité j\'utilise avant de me connecter à la double authentification et d\'autre manières que je sécurise ma connexion internet publique de tout les jours...'
					
					),
					'cloud' => 'Cloud'
				)
			)
		),	
		'programme' => array(
			'title' => 'Programmes',
			'description' => 'Voici le programme des émissions programmé',
			'keyword' => 'programme, stream, youtube, twitch, radio',
			'url' => 'programme.html',
			'url-full' => 'programme.html',
			'up' => array(
				'1' => 'Date',
				'2' => 'Heures',
				'3' => 'Emission',
				'4' => 'Mode'
			),
			'content' => array(
				'music-ultimate' => 'musique illimités',
				'stream' => 'Streaming',
				'start' => 'A partir de ',
				'pending' => 'En cours..',
				'allmercre' => 'Tous les mercredi',
				'allvendre' => 'Tous les Vendredi',
				'mc' => 'Ordinateur & Mobile'
			) 
		),		
		'donation' => array(
			'title' => 'donation',
			'content' => array(
				'full' => 'Vous pouvez me soutenir!',
				'btn' => 'faire un don',
				'crypto' => array(
					'title' => 'Crypto-monnaie',
					'description' => 'Faite moi un dons en crypto',
					'keyword' => 'donation, crypto, btc, eth',
					'url' => 'donation/crypto.html',
					'url-full' => 'donation/crypto.html'
				)
			),
			'description' => 'Voici la page de donation pour me soutenir',
			'keyword' => 'donation',
			'url' => 'donation.html',
			'url-full' => 'donation.html'
		),
		'legal' => array(
			'title' => 'Mention Légales',
			'description' => 'Voici le mention légale',
			'keyword' => '',
			'url' => 'mention-legales.html',
			'url-full' => 'mention-legales.html',
			'contents' => array(
				'identification-title' => 'Identification du site',
				'name-site' => 'Nom du site:',
				'name-domaine' => 'Nom de domaine:',
				'site-secure' => 'Site sécurisé (sous HTTPS/SSL):',
				'owner-site' => 'Propriétaire du site',
				'statut' => 'Status:',
				'ID-numeric-laposte' => 'Identité Numérique LA POSTE: sous référence',
				'webmaster' => 'Webmestre:',
				'designer' => 'Designer:',
				'developper' => 'Développeur:',
				'webdesigner' => 'WebDesigner:',
				'assurance-rcpro' => 'Assurance RC PRO:',
				'siret' => 'SIREN/SIRET:',
				'sap-declared' => 'Services à la personne: N°',
				'tva-intra' => 'Numéro TVA Intracommunautaire:',
				'code-ape' => 'Code APE/NAF:',
				'address' => 'Adresse:',
				'email' => 'E-mail:',
				'tel-fix' => 'Téléphone fixe:',
				'tel-mobile' => 'Téléphone Mobile:',
				'tel-fax' => 'Téléphone Fax:',
				'hoster-title' => 'Hébergeur du site',
				'hoster-name' => 'Nom de la société:',
				'siteweb' => 'Site internet:',
				'head-officer' => 'Siège social:',
				'private-title' => 'Confidentialité',
				'private-description' => 'Numéro de la déclaration obtenue xxxx auprès de la CNIL (Commission Nationale Informatique et Libertés)',
				'credit-title' => 'Honneur:',
				'images' => 'Images:',
				'tiers' => 'Tiers:'
			)
		),	
		'sitemap' => array(
			'title' => 'Plan du site',
			'description' => 'Voici le plan du site',
			'keyword' => 'plan du site, xml',
			'url' => 'plan-du-site.html',
			'url-full' => 'plan-du-site.html'
		),	
		'contact' => array(
			'title' => 'Contactez',
			'description' => 'N\'hésitez pas à me contacter via le formulaire de contact',
			'keyword' => 'contact, formulaire, sponsor, demande utile, soutien',
			'url' => 'contact.html',
			'url-full' => 'contact.html',
			'contents' => array(
				'subject' => 'besoin d\'aide et plus d\'info',
				'title' => 'Besoin d\'aide Contactez-nous!',
				'email' => 'E-mail',
				'name' => 'Nom complet',
				'phone' => 'Téléphone',
				'message' => 'Message',
				'put' => 'Mettre votre',
				'ask' => 'Envoyez-moi votre demande à tous moment!',
				'send' => 'Envoyer',
				'disponible' => 'Week-ends'
				
			)
		),
		'error' => array(
			'title' => 'Erreur',
			'description' => 'Désolé votre message n\'a pas été envoyé',
			'keyword' => '',
			'url' => 'erreur-404.html',
			'url-full' => 'erreur-404.html',
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
			'title' => 'Success',
			'description' => 'Votre message à bien été envoyé avec succès',
			'keyword' => '',
			'url' => 'success.html',
			'url-full' => 'success.html',
			'contents' => array(
				'info' => 'Votre message à été bien envoyé avec success',
				'return' => 'retourner à la page d\'accueil'
			)
		)
	),
	'default' => array(
		'index' => array(
			'url' => 'index.html',
			'url-full' => 'index.html',
			'title' => 'Accueil',
			'description' => 'Bienvenue sur la page des projet AlexonbStudio',
			'keyword' => 'jeux vidéo, mobile, dj, serveur, streaming, informatique, gaming',
			'content' => array(
				'livingxworld' => array(
					 '1' => 'Entrepreneur',
					 '2' => 'Consommateur',
					 '3' => 'Comparateur'
				),
				'alexonbalangue' => array(
					 '1' => 'Webmestre',
					 '2' => 'internet',
					 '3' => 'bureautique'
				), 
				'dyiprod' => array(
					 '1' => 'Marketplace',
					 '2' => 'Social',
					 '3' => 'Formation'
				),
				'btn' => 'visiter maintenant',
				'copyright_full' => 'Tous Droits Réservés.'
			)
		),
		'copyright' => array(
			'designer' => 'Designer par',
			'webdesigner' => 'WebDesigner par',
			'developper' => 'Développeur par',
			'others' => 'Autres liens'
		), 
		'menu' => array(
			'fr' => 'fr',
			'en' => 'en',
			'contents' => array(
				'fr' => 'Français',
				'en' => 'Anglais'
			),
			'translate' => 'Traduire'
		),
		'slide' => array(
			'0' => array(
				'title' => 'Transport',
				'description' => 'Réaliser différentes trajets quotidienne sur les routes d\'île-de-France dans les alentours de paris'
			),
			'1' => array(
				'title' => 'Gaming',
				'description' => 'Les jeux de simulation, course, de stratégie sur ordinateur et sur smartphone.'
			),
			'2' => array(
				'title' => 'Dj & Production',
				'description' => 'Selon ma créativité créer des sons dépend mon imagination à mettre en place et excluvité de mixé.'
			),
			'3' => array(
				'title' => 'Stream',
				'description' => 'Un programme sera disponible soit en jouant en direct ou en mixant des sons'
			),
			'4' => array(
				'title' => 'Magasin',
				'description' => 'Prêt à commander des goodies disponibles sont veste, t-shirt, mug, coque, etc...'
			),
			'5' => array(
				'title' => 'Informatique',
				'description' => 'Les projets de site internet, rasperry, blog, marketing, et de l\'IT'
			),
			'access' => 'Accéder'
		),
		'url-extern' => array(
			'spreadshirt' => 'https://shop.spreadshirt.fr/alexonbstudio/'
		)
	),
	'télécharger' => array(			
		'title' => 'Télécharger',
		'description' => 'Voici la page de téléchargement des fichiers utile',
		'keyword' => 'télécharger, fichier, zip, joomla, php, bureautique',
		'url' => 'télécharger.html',
		'url-full' => 'télécharger.html',
		'cms' => array(
			'joomla' => array(
				'title' => 'Joomla',
				'description' => 'Voici la page dédié pour seulement sur joomla',
				'keyword' => 'télécharger, zip, joomla, cms, module, plugin',
				'url' => 'télécharger/joomla.html',
				'url-full' => 'télécharger/joomla.html'
			)
		),
		'php' => array(
			'title' => 'PHP',
			'description' => 'Voici la page dédié pour seulement PHP',
			'keyword' => 'télécharger, zip, php, fichiers, bootstrap, js, css',
			'url' => 'télécharger/php.html',
			'url-full' => 'télécharger/php.html'		
		),
		'bureautique' => array(
			'title' => 'Bureautique',
			'description' => 'Voici la page dédié pour seulement la bureautique',
			'keyword' => 'télécharger, zip, fichiers, bureatique, word, excel',
			'url' => 'télécharger/bureautique.html',
			'url-full' => 'télécharger/bureautique.html'		
		)
	),
	'cv' => array(			
		'title' => 'Curriculum vitæ',
		'description' => 'Voici la page de mon cv dédié aux recruteur qui pourrait m\'embauchée dans le domaine informatique',
		'keyword' => 'Curriculum vitæ, cv, recruter, embaucher moi, jobs, professionnels, informatique',
		'url' => 'cv.html',
		'url-full' => 'cv.html',
		'pro' => array(
			'title' => 'Expériences professionnels',
			'header' => array(
				'1' => '<h3>Novembre 2016 - Février 2019</h3> <h4>Alexon Balangue</h4>',
				'2' => '<h3>Février à Mars 2013</h3> <h4>Bestshore: Developpeur Web (J2.5) - En stage</h4>',
				'3' => '<h3>Fin Juin 2009</h3> <h4>WOLKSWAGEN: MECANICIEN EN STAGE</h4>',
				'4' => '<h3>Fin Juin 2008</h3> <h4>LE TOURBILLION: CUISINIER EN STAGE</h4>'
			),
			'content' => array(
				'1' => '<i class="fal fa-caret-right"></i> Micro-Entrepreneur - Assistant et Services Informatique (IT/WEB)<br />
				<i class="fal fa-caret-right"></i> Officiellement EI début activité le 20 Novembre 2017 (Programmation)<br/>
				<i class="fal fa-caret-right"></i> Paris (75)',
				'2' => '<i class="fal fa-caret-right"></i> Vérification des liens URL, Lire la documentation du composant JA_Jobs_Board.<br />
				<i class="fal fa-caret-right"></i> Sans tuteur et sans signature d\'un contrat stage conventionné j\'ai quitté au bout d\'une semaine normalement pour un mois.<br/>
				<i class="fal fa-caret-right"></i> Asnières-sur-Seine (92)',
				'3' => '<i class="fal fa-caret-right"></i>Changer les pneus, vidange<br />
				<i class="fal fa-caret-right"></i> J\'admirais mais enfin compte me plaît plus du tout. Petit mission facile.<br/>
				<i class="fal fa-caret-right"></i> Paris (75)',
				'4' => '<i class="fal fa-caret-right"></i>  Cuisinier, préparation des apéritifs.<br />
				<i class="fal fa-caret-right"></i>  J\'avais un bon chef comme tuteur c\'était mon premier choix après le collège, je ne suis pas suffisamment passionné.<br/>
				<i class="fal fa-caret-right"></i> Courbevoie (92)'
			)
		),
		'formation' => array(
			'title' => 'Formation',
			'header' => array(
				'1' => '<h3>Octobre 2012 à Mars 2013</h3> <h4>C.F.A.S. EUROPEAN TRANING CENTER: FORMATION</h4>',
				'2' => '<h3>Septembre 2009 à Mars 2012</h3> <h4>CNA CEFAG/TIPI/A.N.R.S. EMERGENCE: FORMATION</h4>',
				'3' => '<h3>Septembre 2008 à Juin 2009</h3> <h4>LP DUCHESNE: B.E.P NIVEAUX 1</h4>'
			),
			'content' => array(
				'1' => '<i class="fal fa-caret-right"></i> Assistant Ingénieur Sécurité en Informatique<br />
				<i class="fal fa-caret-right"></i>  Nanterre 92',
				'2' => '<i class="fal fa-caret-right"></i> Remise à niveaux et bilan d\'orientation<br />
				<i class="fal fa-caret-right"></i> Paris 75',
				'3' => '<i class="fal fa-caret-right"></i> Maintenance des véhicules particuliers<br />
				<i class="fal fa-caret-right"></i>  La celle Saint-Cloud 78'
			)
		),
		'skill' => array(
			'header' => array(
				'info' => 'Infogérance',
				'it' => 'IT & internet',
				'soft' => 'Logiciels',
				'lang' => 'Langues',
				'center' => 'Centre d\'intérêt',
				'downld' => 'Télécharger'
			),
			'content' => array(
				'info' => 'Debian, Ubuntu, CentOS, ISPConfig, Cpanel sans WHM, Plesk 12.5/17',
				'it' => 'FullStack PHP7, HTML5, Joomla, SEO A à Z, SEM, SERP & réseaux sociaux',
				'soft' => 'Notepad++, Cisco packet Tracer, VMware, VirtualBox, PAO: scribus, Microsoft Office, LibreOffice, internet, github-Fork',
				'lang' => 'Français & Anglais',
				'center' => 'Loisir: Passion en création et de développement des sites web pour particulier et entreprise, musique et sorties.<br />Voyage: Philippines',
				'downld' => '<a href="https://alexonbstudio.fr/download/cv-alexonbstudio-v5.pdf"><i class="fas fa-file-pdf fa-3x"></i> CV</a> <a href="https://alexonbstudio.fr/download/cv-alexonbstudio-v5.docx"><i class="fas fa-file-word fa-3x"></i> CV</a> <a href="https://alexonbstudio.fr/download/attestation-cfas-etc.pdf"><i class="fas fa-file-pdf fa-3x"></i> attestation</a>'
			)
		)
	),
	'links' => array(
		'title' => array(
			'1' => '',
			'2' => '',
			'3' => ''
		)
	),
	'server' => array(
		'default' => array(
			'title' => 'Serveur',
			'description' => 'Voici la page des serveur que je m\'occupe',
			'keyword' => 'serveur, minecraft, shoutcast, radio, web, infogérance',
			'url' => 'server.html',
			'url-full' => 'server.html',
			'content' => array(
				'access' => 'Accéder'
			),
			'supply' => array(
				'title-system' => 'Système d\'exploitation',
				'title-devs' => 'Développement',
				'title-hosting' => 'Hébergeur',
				'title-cloud' => 'Cloud Public'
			)
			
		),
		'minecraft' => array(
			'title' => 'Serveur Minecraft Bedrock Edition',
			'description' => 'Ce serveur minecraft Bedrock Edition le gameplay est 100% en mode survi Hardcore, vous débuterez ce jeux en partant de zéro et aucune triche est possible.',
			'keyword' => 'minecraft, bedrock edition, serveur, hardcore, survihard, survie',
			'url' => 'server/minecraft.html',
			'url-full' => 'server/minecraft.html',
			'content' => array(
				'name-serv' => 'Nom: SurviHard',
				'ip-serv' => 'IP: minecraft.alexonbstudio.fr',
				'port-serv' => 'Port: 19132',
				'info' => 'Ce serveur <strong>minecraft Bedrock Edition</strong> le gameplay est 100% en mode survi Hardcore, vous débuterez ce jeux en partant de zéro et aucune triche est possible. (Version: 1.14.60)',
				'option' => '<i class="fas fa-check"></i> Afficher les coordonnées <br />
							 <i class="fas fa-check"></i> Cracké <br />
							 <i class="fas fa-ban"></i> Triche<br />
							 <i class="fas fa-ban"></i> Carte de départ<br />
							 <i class="fas fa-ban"></i> Coffre bonus'
			)
			
		),
		'mcpe' => array(
			'title' => 'Serveur Minecraft PoketMine PE',
			'description' => 'Ce serveur minecraft PoketMine PE le gameplay est 100% en mode survi Hardcore, vous débuterez ce jeux en partant de zéro et aucune triche est possible.',
			'keyword' => 'minecraft, PoketMine PE, mcpe, ‎PMMP, ‎Poggit, serveur, hardcore, survihard, survie',
			'url' => 'server/mcpe.html',
			'url-full' => 'server/mcpe.html',
			'content' => array(
				'name-serv' => 'Nom: SurviHard',
				'ip-serv' => 'IP: mcpe.alexonbstudio.fr',
				'port-serv' => 'Port: 19132',
				'info' => 'Ce serveur <strong>minecraft PoketMine PE</strong> le gameplay est 100% en mode survi Hardcore, vous débuterez ce jeux en partant de zéro et aucune triche est possible. (Version actuel: 1.14.32)',
				'option' => '<i class="fas fa-check"></i> Afficher les coordonnées <br />
							 <i class="fas fa-check"></i> Cracké <br />
							 <i class="fas fa-ban"></i> Triche<br />
							 <i class="fas fa-ban"></i> Carte de départ<br />
							 <i class="fas fa-ban"></i> Coffre bonus'
			)
			
		),
		'shoutcast' => array(
			'title' => 'Serveur Shoutcast',
			'description' => 'Le serveur shoutcast radio en ligne',
			'keyword' => 'radio, shoutcast, server',
			'url' => 'server/shoutcast.html',
			'url-full' => 'server/shoutcasst.html',
			'content' => array(
			
			)	
		)
	)
);

$encoder = json_encode($trad);

?>