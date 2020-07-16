<?php

$debug = array(
	'index' => array(
		'title' => 'Developer side -Debug',
		'description' => 'Here is all the information from the JSON debug that you can take from the necessary data on any type of technology',
		'keyword' => 'debug, php, json, information, website, data, technology, developer, programmer',
		'url' => array(
			'default' => 'debug.html',
			'fr' => 'debug.html',
			'en' => 'debug.html'
		),
		'content' => array(
			'table' => array(
				'title' => array(
					'1' => 'Type',
					'2' => 'Variable',
					'3' => 'Others'
				),
				'tr' => array(
					'sites' => array(
						'1' => '$sites',
						'2' => 'name',
						'3' => '$sites[\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'social' => array(
						'1' => '$social',
						'2' => 'facebook->name',
						'3' => '$social[\'facebook\'][\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'private' => array(
						'1' => '$private',
						'2' => 'name',
						'3' => '$private[\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'business' => array(
						'1' => '$business',
						'2' => 'local->name',
						'3' => '$business[\'local\'][\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'images' => array(
						'1' => '$images',
						'2' => 'manager->logo->big',
						'3' => '$images[\'manager\'][\'logo\'][\'big\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'partner' => array(
						'1' => '$partner',
						'2' => 'planethoster->name',
						'3' => '$partner[\'planethoster\'][\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'sponsor' => array(
						'1' => '$sponsor',
						'2' => 'empty->name',
						'3' => '$sponsor[\'\'][\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					),
					'credits' => array(
						'1' => '$credits',
						'2' => 'developper->alexonbstudio->name',
						'3' => '$credits[\'developper\'][\'alexonbstudio\'][\'name\'] example in PHP<br> using the <i>json_decode/json_encode</i> <br>function The file is located internally on '
					)
				)
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/debug.jpg'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_debug = json_encode($debug);

?>