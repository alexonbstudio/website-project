<?php

$debug = array(
	'index' => array(
		'title' => 'Côté Développeur - Déboguer',
		'description' => 'Voici toutes les informations du debug en JSON que vous pouvez prendre de la data nécessaire sur n\'importe quel type de technologie',
		'keyword' => 'déboguer, php, json, information, site internet, data, technologie, développeur, programmeur',
		'url' => array(
			'default' => 'debug',
			'fr' => 'déboguer',
			'en' => 'debug'
		),
		'content' => array(
			'table' => array(
				'title' => array(
					'1' => 'Type',
					'2' => 'Variable',
					'3' => 'Autres'
				),
				'tr' => array(
					'sites' => array(
						'1' => '$sites',
						'2' => 'name',
						'3' => '$sites[\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'social' => array(
						'1' => '$social',
						'2' => 'facebook->name',
						'3' => '$social[\'facebook\'][\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'private' => array(
						'1' => '$private',
						'2' => 'name',
						'3' => '$private[\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'business' => array(
						'1' => '$business',
						'2' => 'local->name',
						'3' => '$business[\'local\'][\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'images' => array(
						'1' => '$images',
						'2' => 'manager->logo->big',
						'3' => '$images[\'manager\'][\'logo\'][\'big\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'partner' => array(
						'1' => '$partner',
						'2' => 'planethoster->name',
						'3' => '$partner[\'planethoster\'][\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'sponsor' => array(
						'1' => '$sponsor',
						'2' => 'empty->name',
						'3' => '$sponsor[\'\'][\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					),
					'credits' => array(
						'1' => '$credits',
						'2' => 'developper->alexonbstudio->name',
						'3' => '$credits[\'developper\'][\'alexonbstudio\'][\'name\'] exemple en PHP <br>en utilisant la fonction <i>json_decode/json_encode</i> <br>Le fichier ce situe en interne sur '
					)
				)
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/debug.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_debug = json_encode($debug);

?>