<?php
#TESTING
$protocols_v = isset($_SERVER["HTTPS"]) ? 'https' : 'http';


$cdn_vendor = $protocols_v.'://cdnjs.cloudflare.com/ajax/libs/'; #cdnjs by Cloudflare (vendor directories)
#host external
$cdn_exvendor = $protocols_v.'://'.$_SERVER['SERVER_NAME'].'/assets/vendor/'; #HTTPS/HTTPS TESTING

$version = array(
	'dir' => 'assets',
	'internal' => array(
		'pro' => array(
			'fontawesome' => array
				'css' => 'vendor/fontawesome/css/all.min.css',
				'js' => 'vendor/fontawesome/js/all.min.js'
			)
		),
		'custom' => array(
			'css' => array(
				'knight' => 'custom/css/knight.css',
				'langs' => 'custom/css/langs.css',
				'tpl' => 'custom/css/tpl.css',
			),
			'js' => array(
				/*'default' => $local_custom.'js/default.js',*/
				'knight' => 'custom/js/knight.js'
			)
		),
		'production' => array(
			'css' => array(
				'knight' => 'production/css/knight.min.css',
				'langs' => 'production/css/langs.min.css',
				'tpl' => 'production/css/tpl.min.css'
			),
			'js' => array(
				'knight' => 'production/js/knight.min.js'
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
		)
		'aos' => array(
			'css' => $cdn_vendor.'aos/2.3.4/aos.css',
			'js' => $cdn_vendor.'aos/2.3.4/aos.js'
		),
		'boxicons' => array(
			'css' => $cdn_exvendor.'boxicons/css/boxicons.min.css'
		),
		'icofont' => array(
			'css' => $cdn_exvendor.'icofont/icofont.min.css'
		),
		'isotope-layout' => array(
			'js' => $cdn_vendor.'jquery.isotope/3.0.6/isotope.pkgd.min.js'
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
			'js' => $cdn_exvendor.'php-email-form/validate.js'
		),
		'venobox' => array(
			'css' => $cdn_vendor.'venobox/1.9.0/venobox.min.css',
			'js' => $cdn_vendor.'venobox/1.9.0/venobox.min.js'
		)
	)
);

$JE_version = json_encode($version);

?>