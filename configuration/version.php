<?php
#TESTING
$protocols_v = isset($_SERVER["HTTPS"]) ? 'https' : 'http';


$cdn_vendor = $protocols_v.'://cdnjs.cloudflare.com/ajax/libs/'; #cdnjs by Cloudflare (vendor directories)
#host external

# IF USING CDN (sub-domain on configuration/site) take out assets/
$local_vendor = 'assets/vendor/';
$local_custom = 'assets/custom/';
$local_production = 'production/';
$local_combined = 'combined/';


$version = array(
	'internal' => array(
		'fontawesome' => array(
			'css' => 'vendor/fontawesome/css/all.min.css',
			'js' => 'vendor/fontawesome/js/all.min.js'
		),
		'custom' => array(
			'css' => array(
				'knight' => $local_custom.'css/knight.css',
				'langs' => $local_custom.'css/langs.css',
				'mamba' => $local_custom.'css/mamba.css',
				'urgence' => $local_custom.'css/urgence.css',
				'tplsgen' => $local_custom.'css/tplsgen.css',
				'tpl' => $local_custom.'css/tpl.css'
			),
			'js' => array(
				/*'default' => $local_custom.'js/default.js',*/
				'knight' => $local_custom.'js/knight.js',
				'mamba' => $local_custom.'js/mamba.js',
				'urgence' => $local_custom.'js/urgence.js',
				'tpl' => $local_custom.'js/tpl.js'
			)
		),
		'production' => array(
			'css' => array(
				'knight' => $local_production.'css/knight.min.css',
				'langs' => $local_production.'css/langs.min.css',
				'mamba' => $local_production.'css/mamba.min.css',
				'urgence' => $local_production.'css/urgence.min.css',
				'tplsgen' => $local_production.'css/tplsgen.min.css',
				'tpl' => $local_production.'css/tpl.min.css'
			),
			'js' => array(
				'knight' => $local_production.'js/knight.min.js',
				'mamba' => $local_production.'js/mamba.min.js',
				'urgence' => $local_production.'js/urgence.min.js',
				'tpl' => $local_production.'js/tpl.min.js'
			)
		),
		'combined' => array(
			'css' => array(
				'all' => $local_combined.'css/main.css'
			),
			'js' => array(
				'all' => $local_combined.'js/main.js'
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
			'css' => $cdn_vendor.'font-awesome/5.15.1/css/all.min.css',
			'js' => $cdn_vendor.'font-awesome/5.15.1/js/all.min.js'
		),
		'jquery' => array(
			'js' => $cdn_vendor.'jquery/3.5.1/jquery.min.js'
		),
		'aos' => array(
			'css' => $cdn_vendor.'aos/2.3.4/aos.css',
			'js' => $cdn_vendor.'aos/2.3.4/aos.js'
		),
		'intl-tel-input' => array(
			'css' => $local_vendor.'intl-tel-input/17.0.3/css/intlTelInput.min.css',
			'js' => $local_vendor.'intl-tel-input/17.0.3/js/intlTelInput.min.js'
		),
		'boxicons' => array(
			'css' => $local_vendor.'boxicons/css/boxicons.min.css'
		),
		'icofont' => array(
			'css' => $local_vendor.'icofont/icofont.min.css'
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
			'js' => $local_vendor.'php-email-form/validate.js'
		),
		'venobox' => array(
			'css' => $cdn_vendor.'venobox/1.9.0/venobox.min.css',
			'js' => $cdn_vendor.'venobox/1.9.0/venobox.min.js'
		)
	)
);

$JE_version = json_encode($version);

?>