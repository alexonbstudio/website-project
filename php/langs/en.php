<?php
#exemple $trad['pages']['legal']['title']; 

$trad = array(
	'pages' => array(
		'index' => array(
			'title' => 'Home',
			'description' => 'Welcome to the AlexonbStudio project page',
			'keyword' => 'video games, mobile, dj, server, streaming, computing, gaming',
			'url' => 'accueil.html',
			'url-full' => 'accueil.html'
		),
		'sponsor' => array(
			'title' => 'Sponsor',
			'description' => 'Here is the specially sponsored product placement pages',
			'keyword' => 'product, sponsored, digital, sale, purchase, marketing, customer',
			'url' => 'sponsorisé.html',
			'url-full' => 'sponsorisé.html'
		),
		'market' => array(
			'title' => 'Shop',
			'description' => 'The shop contains several goodie products managed by intermediaries',
			'keyword' => 'store, shop, sale, purchase, product, goodies, t-shirt, mug',
			'url' => 'boutiques.html',
			'url-full' => 'boutiques.html',
			'content' => array(
				'buyit' => 'Buy now',
				'custom' => 'Custom'
			),
			'supply' => array(
				'shop' => 'Official shop',
				'without-inter' => 'without intermediate',
				'title-gateway' => 'Payment Gateways',
				'title-delivery' => 'Delivery',
				'title-brands' => 'Brands',
				'span-delivery' => '',
				'span-madein-eu' => 'Made in Europe'
			),
			'faqs' => array(
				'title' => 'Frequently Asked Questions',
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
			'title' => 'investment',
			'description' => 'Here is the page dedicated to investments whether mining or something else',
			'keyword' => 'invest, project, cloud',
			'url' => 'invest.html',
			'url-full' => 'invest.html',
			'content' => array(
				'buyit' => 'Invest now',
				'mine' => 'mining',
				'referral' => 'Set of 10% profit'
			)
		),
		'projet' => array(
			'title' => 'Project',
			'description' => 'Here is the page of all my projects',
			'keyword' => 'project, transport, gaming, dj, producer, gaming, stream, IT',
			'url' => 'projet.html',
			'url-full' => 'projet.html',
			'transport' => array(
				'title' => 'Transport',
				'description' => 'Here is the page dedicated to transport means of transport',
				'keyword' => 'transport, ratp, electric scooter',
				'url' => 'projet/transport.html',
				'url-full' => 'projet/transport.html',
				'content' => array(
					'title' => 'Read more',
					'description' => 'Here is an overview of some software or hardware that I am currently using for transport',
					'keyword' => 'software, hardware, transportation',
					'url' => 'projet/transport/lire-plus.html',
					'url-full' => 'projet/transport/lire-plus.html',
					'readmore' => array(
						'title1' => 'Software',
						'title2' => 'Materials'
					)
				),
				'short-content' => 'Carry out different daily journeys on the Ile-de-France roads around Paris'
			),
			'gaming' => array(
				'title' => 'Gaming',
				'description' => 'Here is the page dedicated to gamers of all necessity',
				'keyword' => 'gamer, video games, gaming, mobile, pc',
				'url' => 'projet/gaming.html',
				'url-full' => 'projet/gaming.html',
				'content' => array(
					'title' => 'Read more',
					'description' => 'Here is an overview of some software or hardware that I am currently using for gaming',
					'keyword' => 'software, hardware, gaming, gamers',
					'url' => 'projet/gaming/lire-plus.html',
					'url-full' => 'projet/gaming/lire-plus.html',
					'readmore' => array(
						'title1' => 'Software',
						'title2' => 'Materials'
					)
				),
				'short-content' => 'I show you my setup, what I play with, what hardware and software i\'m using right now.'
			),
			'dj-producer' => array(
				'title' => 'Dj & Producteur',
				'description' => 'Here is the page dedicated to music producer and deejay',
				'keyword' => 'dj, producer, deejay, music, mix',
				'url' => 'projet/dj-producer.html',
				'url-full' => 'projet/dj-producer.html',
				'content' => array(
					'title' => 'Read more',
					'description' => 'Here is an overview of some software or hardware that I am currently using for dj and producer',
					'keyword' => 'dj, producer, deejay, music, mix, software, hardware',
					'url' => 'projet/dj-producer/lire-plus.html',
					'url-full' => 'projet/dj-producer/lire-plus.html',
					'readmore' => array(
						'title1' => 'Software',
						'title2' => 'Materials'
					)
				),
				'short-content' => 'What software and hardware of Dj\'s and music production.'
			),
			'streaming' => array(
				'title' => 'Streaming',
				'description' => 'Here is the page dedicated to streaming',
				'keyword' => 'streaming, radio, video',
				'url' => 'projet/streaming.html',
				'url-full' => 'projet/streaming.html',
				'content' => array(
					'subscribe' => 'Subscribe',
					'shoutcast' => array(
						'title' => 'Radio',
						'description' => 'Here is an overview of some software or hardware that I am currently using for radio',
						'keyword' => 'radio, shoutcast',
						'url' => 'projet/streaming/radio.html',
						'url-full' => 'projet/streaming/radio.html',
						'player' => array(
							'current' => 'Current song:',
							'load' => 'Loading ...',
							'streamt' => 'Stream title:',
							'bit' => 'Bit rate:',
							'curr-lis' => 'Current listeners:',
							'max-lis' => 'Maximum listeners:',
							'serv-stat' => 'Server status:',
							'autodj-stat' => 'AutoDJ status:',
							'source-connect' => 'Source connected:',
							'stat-time' => 'Station time:',
							'curr-plist' => 'Current playlist:',
							'track-de' => 'Track details:',
							'raw-meta' => 'Raw metadata:',
							'album-img' => 'Album image:',
							'buy-album' => 'Buy this album',
							'other-r' => 'Other radio available from 1 to 4 every month from midnight on <a href="http://alexonbstudio.freeboxos.fr:8000/index.html">http://alexonbstudio.freeboxos.fr:8000/index.html</a>'
						)
					)
				)
			),
			'IT' => array(
				'title' => 'IT',
				'description' => '',
				'keyword' => '',
				'url' => 'projet/informatique.html',
				'url-full' => 'projet/informatique.html',
				'content' => array(
					'btn' => 'Access',
					'codeur' => 'Coding',
					'maintenance' => array(
						'title' => 'Maintenance',
						'description' => 'Here is an overview of some software or hardware that I am currently using for maintenance',
						'keyword' => 'project, IT, maintenance',
						'url' => 'projet/informatique/maintenance.html',
						'url-full' => 'projet/informatique/maintenance.html',
						'ask' => 'All the software and hardware used to help you easily.',
						'readmore' => array(
							'title1' => 'Software',
							'title2' => 'Material'
						)
					),
					'security' => array(
						'title' => 'Security',
						'description' => 'Here is an overview of some software or hardware that I am currently using for security',
						'keyword' => 'project, IT, internet, security',
						'url' => 'projet/informatique/security.html',
						'url-full' => 'projet/informatique/security.html',
						'ask' => 'With what security I use before connecting to dual authentication and other ways that I secure my public internet connection every day ...'
					
					),
					'cloud' => 'Cloud'
				)
			)
		),	
		'programme' => array(
			'title' => 'Programs',
			'description' => 'Here is the scheduled program',
			'keyword' => 'program, stream, youtube, twitch, radio',
			'url' => 'programme.html',
			'url-full' => 'programme.html',
			'up' => array(
				'1' => 'Date',
				'2' => 'Hours',
				'3' => 'Program',
				'4' => 'Mode'
			),
			'content' => array(
				'music-ultimate' => 'unlimited music',
				'stream' => 'Streaming',
				'start' => 'From ',
				'pending' => 'Pending..',
				'allmercre' => 'All Wenesday',
				'allvendre' => 'All Friday',
				'mc' => 'Computer & Mobile'
			) 
		),		
		'donation' => array(
			'title' => 'donation',
			'content' => array(
				'full' => 'You can support me!',
				'btn' => 'make a donation',
				'crypto' => array(
					'title' => 'Cryptocurrency',
					'description' => 'Give me a crypto donation',
					'keyword' => 'donation, Cryptocurrency, btc, eth',
					'url' => 'donation/crypto.html',
					'url-full' => 'donation/crypto.html'
				)
			),
			'description' => 'Here is the donation page to support me',
			'keyword' => 'donation',
			'url' => 'donation.html',
			'url-full' => 'donation.html'
		),
		'legal' => array(
			'title' => 'Notice Legal',
			'description' => 'Here is the legal notice',
			'keyword' => '',
			'url' => 'mention-legales.html',
			'url-full' => 'mention-legales.html',
			'contents' => array(
				'identification-title' => 'Identification of site',
				'name-site' => 'Name of site:',
				'name-domaine' => 'Domain name:',
				'site-secure' => 'Site secure (under HTTPS/SSL):',
				'owner-site' => 'Owner of site',
				'statut' => 'Statut:',
				'ID-numeric-laposte' => 'Numeric identity LA POSTE: under reference',
				'webmaster' => 'Webmaster:',
				'designer' => 'Designer:',
				'developper' => 'Developper:',
				'webdesigner' => 'WebDesigner:',
				'assurance-rcpro' => 'Inssurance RC PRO:',
				'siret' => 'SIREN/SIRET:',
				'sap-declared' => 'Services to the personne: N°',
				'tva-intra' => 'Number TVA Intracommunautaire:',
				'code-ape' => 'Code APE/NAF:',
				'address' => 'Address:',
				'email' => 'E-mail:',
				'tel-fix' => 'Phone:',
				'tel-mobile' => 'Phone Mobile:',
				'tel-fax' => 'Fax:',
				'hoster-title' => 'Hosting site',
				'hoster-name' => 'Name compagny business:',
				'siteweb' => 'Website:',
				'head-officer' => 'Head officer:',
				'private-title' => 'confidentiality',
				'private-description' => 'Number of the declaration obtained xxxx from the CNIL (Commission Nationale Informatique et Libertés)',
				'credit-title' => 'Honnor:',
				'images' => 'Images:',
				'tiers' => 'Third:'
			)
		),	
		'sitemap' => array(
			'title' => 'Sitemap',
			'description' => 'Here is the sitemap',
			'keyword' => 'sitemap, xml',
			'url' => 'plan-du-site.html',
			'url-full' => 'plan-du-site.html'
		),	
		'contact' => array(
			'title' => 'Contact',
			'description' => 'Do not hesitate to contact me via the contact form',
			'keyword' => 'contact, form, sponsor, useful request, support',
			'url' => 'contact.html',
			'url-full' => 'contact.html',
			'contents' => array(
				'subject' => 'Ask need more info',
				'title' => 'Contact',
				'email' => 'E-mail',
				'name' => 'Full Name',
				'phone' => 'Phone number',
				'message' => 'Message',
				'put' => 'Enter your',
				'ask' => 'Send me your request at any time!',
				'send' => 'Send',
				'disponible' => 'Week-ends'
			)
		),	
		'error' => array(
			'title' => 'Error',
			'description' => 'Sorry your message was not sent',
			'keyword' => '',
			'url' => 'erreur-404.html',
			'url-full' => 'erreur-404.html',
			'contents' => array(
				'col1' => array(
					'line1' => 'An error occurred while running the query.',
					'line2' => 'You can not visit this page because:',
					'line3' => 'bookmark / expired bookmark',
					'line4' => 'an incorrect address',
					'line5' => 'A search engine has an outdated listing for this site',
					'line6' => 'You do not have access to this page',
					'line7' => 'Your message has not been successfully sent successfully'
				),
				'col2' => array(
					'line1' => 'Go to the home page'
				)
			)
		),	
		'success' => array(
			'title' => 'Success',
			'description' => 'Your message has been sent successfully',
			'keyword' => '',
			'url' => 'success.html',
			'url-full' => 'success.html',
			'contents' => array(
				'info' => 'Your message has been sent successfully',
				'return' => 'return to the home page'
			)
		)
	),
	'default' => array(
		'index' => array(
			'url' => 'index.html',
			'url-full' => 'index.html',
			'title' => 'Home',
			'description' => 'Welcome to the AlexonbStudio project page',
			'keyword' => 'video games, mobile, dj, server, streaming, computing, gaming',
			'content' => array(
				'livingxworld' => array(
					 '1' => 'Contractor',
					 '2' => 'Consumer',
					 '3' => 'Comparator'
				),
				'alexonbalangue' => array(
					 '1' => 'Webmaster',
					 '2' => 'Web',
					 '3' => 'Offices'
				), 
				'dyiprod' => array(
					 '1' => 'Marketplace',
					 '2' => 'Social',
					 '3' => 'Traning'
				),
				'btn' => 'visit now',
				'copyright_full' => 'All Right Reserved.'
			)
		),
		'copyright' => array(
			'designer' => 'Designer by',
			'webdesigner' => 'WebDesigner by',
			'developper' => 'Developper by',
			'others' => 'Others links'
		),
		'menu' => array(
			'fr' => 'fr',
			'en' => 'en',
			'contents' => array(
				'fr' => 'French',
				'en' => 'English'
			),
			'translate' => 'Translate'
		),
		'slide' => array(
			'0' => array(
				'title' => 'Transport',
				'description' => 'Carry out different daily journeys on the Ile-de-France roads around Paris'
			),
			'1' => array(
				'title' => 'Gaming',
				'description' => 'Simulation, racing, strategy games on computer and smartphone.'
			),
			'2' => array(
				'title' => 'Dj & Producer',
				'description' => 'According to my creativity creating sounds depends on my imagination to set up and excluvity of mixed.'
			),
			'3' => array(
				'title' => 'Streaming',
				'description' => 'A program will be available either playing live or mixing sounds'
			),
			'4' => array(
				'title' => 'Stores',
				'description' => 'Ready to order available goodies are jacket, t-shirt, mug, shell, etc ...'
			),
			'5' => array(
				'title' => 'IT',
				'description' => 'The website projects, rasperry, blog, marketing, and IT'
			),
			'access' => 'Access'
		),
		'url-extern' => array(
			'spreadshirt' => 'https://shop.spreadshirt.co.uk/alexonbstudio/'
		)
	),
	'télécharger' => array(			
		'title' => 'Download',
		'description' => 'Here is the useful file download page',
		'keyword' => 'download, file, zip, joomla, php, office',
		'url' => 'télécharger.html',
		'url-full' => 'télécharger.html',
		'cms' => array(
			'joomla' => array(
				'title' => 'Joomla',
				'description' => 'Here is the dedicated page for only on joomla',
				'keyword' => 'download, zip, joomla, cms, module, plugin',
				'url' => 'télécharger/joomla.html',
				'url-full' => 'télécharger/joomla.html'
			)
		),
		'php' => array(
			'title' => 'PHP',
			'description' => 'Here is the dedicated page for only PHP',
			'keyword' => 'download, zip, php, files, bootstrap, js, css',
			'url' => 'télécharger/php.html',
			'url-full' => 'télécharger/php.html'		
		),
		'bureautique' => array(
			'title' => 'Offices',
			'description' => 'Here is the dedicated page for office automation only',
			'keyword' => 'download, zip, files, office, word, excel',
			'url' => 'télécharger/bureautique.html',
			'url-full' => 'télécharger/bureautique.html'		
		)
	),
	'cv' => array(			
		'title' => 'Curriculum vitæ',
		'description' => 'Here is the page of my CV dedicated to the recruiter who could hire me in the IT field',
		'keyword' => 'Resume, CV, recruit, hire me, jobs, professionals, IT',
		'url' => 'cv.html',
		'url-full' => 'cv.html',
		'pro' => array(
			'title' => 'Professional experience',
			'header' => array(
				'1' => '<h3>20 Novembre 2016 - 20 febrary 2019</h3> <h4>Alexon Balangue</h4>',
				'2' => '<h3>February to March 2013</h3> <h4>Bestshore: Web developer (J2.5) - Internship</h4>',
				'3' => '<h3>End of June 2009</h3> <h4>WOLKSWAGEN: MECHANIC Internship</h4>',
				'4' => '<h3>End of June 2008</h3> <h4>LE TOURBILLION: COOKER Internship</h4>'
			),
			'content' => array(
				'1' => '<i class="fal fa-caret-right"></i> Self-Contractors - Assistant and IT Services<br />
				<i class="fal fa-caret-right"></i> Officially AND first activity on 20 November 2017 (Programming)<br/>
				<i class="fal fa-caret-right"></i> Paris (75)',
				'2' => '<i class="fal fa-caret-right"></i> Check URL Links, Read Component Documentation JA_Jobs_Board.<br />
				<i class="fal fa-caret-right"></i> Without a guardian and without a contract signed contract I left after a week normally for a month.<br/>
				<i class="fal fa-caret-right"></i> Asnières-sur-Seine (92)',
				'3' => '<i class="fal fa-caret-right"></i> Change tires, drain<br />
				<i class="fal fa-caret-right"></i> I admired but at last I like more at all. Easy little mission.<br/>
				<i class="fal fa-caret-right"></i> Paris (75)',
				'4' => '<i class="fal fa-caret-right"></i> Cook, preparation of aperitifs.<br />
				<i class="fal fa-caret-right"></i>  I had a good chef as tutor this was my first choice after college, I\'m not passionate enough.<br/>
				<i class="fal fa-caret-right"></i> Courbevoie (92)'
			)
		),
		'formation' => array(
			'title' => 'Training',
			'header' => array(
				'1' => '<h3>October 2012 to March 2013</h3> <h4>C.F.A.S. EUROPEAN TRANING CENTER: FORMATION</h4>',
				'2' => '<h3>September 2009 to March 2012</h3> <h4>CNA CEFAG/TIPI/A.N.R.S. EMERGENCE: FORMATION</h4>',
				'3' => '<h3>September 2008 to June 2009</h3> <h4>LP DUCHESNE: B.E.P NIVEAUX 1</h4>'
			),
			'content' => array(
				'1' => '<i class="fal fa-caret-right"></i> Assistant Engineer in Computer Security<br />
				<i class="fal fa-caret-right"></i>  Nanterre 92',
				'2' => '<i class="fal fa-caret-right"></i> Shed levels to balance and orientation<br />
				<i class="fal fa-caret-right"></i> Paris 75',
				'3' => '<i class="fal fa-caret-right"></i> Maintenance des véhicules particuliers<br />
				<i class="fal fa-caret-right"></i>  La celle Saint-Cloud 78'
			)
		),
		'skill' => array(
			'header' => array(
				'info' => 'Outsourcing',
				'it' => 'IT & internet',
				'soft' => 'Software',
				'lang' => 'Language',
				'center' => 'Center of interest',
				'downld' => 'Download'
			),
			'content' => array(
				'info' => 'Debian, Ubuntu, CentOS, ISPConfig, Cpanel without WHM, Plesk 12.5/17',
				'it' => 'FullStack PHP7, HTML5, Joomla, SEO A à Z, SEM, SERP and social network',
				'soft' => 'Notepad++, Cisco packet Tracer, VMware, VirtualBox, PAO: scribus, Microsoft Office, LibreOffice, web, github-Fork',
				'lang' => 'French and english',
				'center' => 'Hobby: Passion in the creation and development of websites for individual and business, music and events.<br />travel: Philippines',
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
			'title' => 'Server',
			'description' => 'Here is the page of the servers I take care',
			'keyword' => 'server, minecraft, shoutcast, radio, web, outsourcing',
			'url' => 'server.html',
			'url-full' => 'server.html',
			'content' => array(
				'access' => 'Access'
			),
			'supply' => array(
				'title-system' => 'Operating system',
				'title-devs' => 'Development',
				'title-hosting' => 'hosting',
				'title-cloud' => 'Cloud computing'
			)
			
		),
		'minecraft' => array(
			'title' => 'Minecraft Bedrock Edition server',
			'description' => 'This minecraft Bedrock Edition server the gameplay is 100% in Hardcore survival mode, you will start this game from scratch and no cheating is possible.',
			'keyword' => 'minecraft, bedrock edition, server, hardcore, survihard, survival',
			'url' => 'server/minecraft.html',
			'url-full' => 'server/minecraft.html',
			'content' => array(
				'name-serv' => 'Name: SurviHard',
				'ip-serv' => 'IP: minecraft.alexonbstudio.fr',
				'port-serv' => 'Port: 19132',
				'info' => 'This <strong>minecraft Bedrock Edition</strong> server the gameplay is 100% in Hardcore survival mode, you will start this game from scratch and no cheating is possible. (Version: 1.14.60)',
				'option' => '<i class="fas fa-check"></i> Show coordonates <br />
							 <i class="fas fa-check"></i> Cracked <br />
							 <i class="fas fa-ban"></i> Cheat<br />
							 <i class="fas fa-ban"></i> Departure map<br />
							 <i class="fas fa-ban"></i> Bonus Chest'
			)	
		),
		'mcpe' => array(
			'title' => 'Minecraft PoketMine PE server',
			'description' => 'This minecraft PoketMine PE server the gameplay is 100% in Hardcore survival mode, you will start this game from scratch and no cheating is possible.',
			'keyword' => 'minecraft, PoketMine PE, ‎PMMP, ‎Poggit, server, hardcore, survihard, survival',
			'url' => 'server/mcpe.html',
			'url-full' => 'server/mcpe.html',
			'content' => array(
				'name-serv' => 'Name: SurviHard',
				'ip-serv' => 'IP: mcpe.alexonbstudio.fr',
				'port-serv' => 'Port: 19132',
				'info' => 'This <strong>minecraft PoketMine PE</strong> server the gameplay is 100% in Hardcore survival mode, you will start this game from scratch and no cheating is possible. (Version actual: 1.14.32)',
				'option' => '<i class="fas fa-check"></i> Show coordonates <br />
							 <i class="fas fa-check"></i> Cracked <br />
							 <i class="fas fa-ban"></i> Cheat<br />
							 <i class="fas fa-ban"></i> Departure map<br />
							 <i class="fas fa-ban"></i> Bonus Chest'
			)	
		),
		'shoutcast' => array(
			'title' => 'Shoutcast server',
			'description' => 'The server shoutcast radio online',
			'keyword' => 'server, shoutcast, radio, online',
			'url' => 'server/shoutcast.html',
			'url-full' => 'server/shoutcasst.html'	,
			'content' => array(
			
			)
		)
	)
);

$encoder = json_encode($trad);

?>