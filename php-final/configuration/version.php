<?php
$local_vendor = 'assets/vendor/';
$local_custom = 'assets/custom/';
$local_production = 'assets/production/';
$cdn_vendor = 'https://cdnjs.cloudflare.com/ajax/libs/';
$cdn_custom = 'https://www.alexonbstudio.fr/assets/';
$cdn_production = 'https://www.alexonbstudio.fr/assets/';

$version = array(
	'internal' => array(
		'bootstrap' => array(
			'css' => $local_vendor.'bootstrap/css/bootstrap.min.css',
			'js' => $local_vendor.'bootstrap/js/bootstrap.bundle.min.js'
		),
		'fontawesome' => array(
			'css' => $local_vendor.'fontawesome/css/all.min.css',
			'js' => $local_vendor.'fontawesome/js/all.min.js'
		),
		'aos' => array(
			'css' => $local_vendor.'aos/aos.css',
			'js' => $local_vendor.'aos/aos.js'
		),
		'boxicons' => array(
			'css' => $local_vendor.'boxicons/css/boxicons.min.css'
		),
		'icofont' => array(
			'css' => $local_vendor.'icofont/icofont.min.css'
		),
		'isotope-layout' => array(
			'js' => $local_vendor.'isotope-layout/isotope.pkgd.min.js'
		),
		'jquery' => array(
			'js' => $local_vendor.'jquery/jquery.min.js'
		),
		'jquery.easing' => array(
			'js' => $local_vendor.'jquery.easing/jquery.easing.min.js'
		),
		'jquery-sticky' => array(
			'js' => $local_vendor.'jquery-sticky/jquery-sticky.js'
		),
		'owl.carousel' => array(
			'css' => $local_vendor.'owl.carousel/assets/owl.carousel.min.css',
			'js' => $local_vendor.'owl.carousel/owl.carousel.min.js'
		),
		'php-email-form' => array(
			'js' => $local_vendor.'php-email-form/validate.js'
		),
		'venobox' => array(
			'css' => $local_vendor.'venobox/venobox.min.css',
			'js' => $local_vendor.'venobox/venobox.min.js'
		),
		'custom' => array(
			'css' => array(
				'default' => $local_custom.'css/default.css',
				'knight' => $local_custom.'css/knight.css',
				'langs' => $local_custom.'css/langs.css'
			),
			'js' => array(
				/*'default' => $local_custom.'js/default.js',*/
				'knight' => $local_custom.'js/knight.js'
			)
		),
		'production' => array(
			'css' => array(
				'default' => $local_production.'css/default.min.css',
				'knight' => $local_production.'css/knight.min.css',
				'langs' => $local_production.'css/langs.min.css'
			),
			'js' => array(
				/*'default' => $local_production.'js/default.js',*/
				'knight' => $local_production.'js/knight.min.js'
			)
		)
	),
	'external' => array(
		/*CDNJ*/
		'bootstrap' => array(
			'css' => $cdn_vendor.'twitter-bootstrap/4.5.0/css/bootstrap.min.css',
			'js' => $cdn_vendor.'twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js'
		),
		'fontawesome' => array(
			'css' => $cdn_vendor.'font-awesome/5.13.0/css/all.min.css',
			'js' => $cdn_vendor.'font-awesome/5.13.0/js/all.min.js'
		),
		'jquery' => array(
			'js' => $cdn_vendor.'jquery/3.5.1/jquery.min.js'
		),
		'aos' => array(
			'css' => $cdn_vendor.'aos/2.3.4/aos.css',
			'js' => $cdn_vendor.'aos/2.3.4/aos.js'
		),
		'boxicons' => array(
			'css' => $cdn_production.'vendor/boxicons/css/boxicons.min.css'
		),
		'icofont' => array(
			'css' => $cdn_production.'vendor/icofont/icofont.min.css'
		),
		'isotope-layout' => array(
			'js' => $cdn_production.'vendor/isotope-layout/isotope.pkgd.min.js'
		),
		'jquery.easing' => array(
			'js' => $cdn_vendor.'jquery-easing/1.4.1/jquery.easing.min.js'
		),
		'jquery-sticky' => array(
			'js' => $cdn_vendor.'jquery.sticky/1.0.4/jquery.sticky.min.js'
		),
		'owl.carousel' => array(
			'css' => $cdn_vendor.'OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
			'js' => $cdn_vendor.'OwlCarousel2/2.3.4/owl.carousel.min.js'
		),
		'php-email-form' => array(
			'js' => $cdn_production.'vendor/php-email-form/validate.js'
		),
		'venobox' => array(
			'css' => $cdn_vendor.'venobox/1.9.0/venobox.min.css',
			'js' => $cdn_vendor.'venobox/1.9.0/venobox.min.js'
		),
		'custom' => array(
			'css' => array(
				'langs' => $cdn_custom.'custom/css/langs.css',
				'default' => $cdn_custom.'custom/css/default.css',
				'knight' => $cdn_custom.'custom/css/knight.css'
			),
			'js' => array(
				/*'default' => $cdn_custom.'custom/js/default.js',*/
				'knight' => $cdn_custom.'custom/js/knight.js'
			)
		),
		'production' => array(
			'css' => array(
				'langs' => $cdn_production.'production/css/langs.min.css',
				'default' => $cdn_production.'production/css/default.min.css',
				'knight' => $cdn_production.'production/css/knight.min.css'
			),
			'js' => array(
				/*'default' => $cdn_production.'production/js/default.min.js',*/
				'knight' => $cdn_production.'production/js/knight.min.js'
			)
		)
	)
);

$JE_version = json_encode($version);

?>