<?php
# Check out if have error and fix
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

require 'libs/autoload.php';
#require libs/custom/
foreach (glob('libs/custom/*.php') as $GlobRequire) { include_once $GlobRequire; }

#configuration
foreach (glob('configuration/*.php') as $GlobConfig) { include_once $GlobConfig; }

#Decode
$sites = json_decode($JE_sites, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$partner = json_decode($JE_partner, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$videos = json_decode($JE_videos, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$business = json_decode($JE_business, true);
$PhoneRegionCodeManualNumbers = json_decode($JE_PhoneRegionCodeManualNumbers, true);
/*
#Supplémentaire
$markets = json_decode($JE_markets, true);
$restaurant = json_decode($JE_restaurant, true);
*/


#Syslink
$protocols = $sites['protocol'];
$CDNdomainTLD = (!empty($sites['sub-domain']) ? $sites['sub-domain'] : $sites['domain']);
$domainTLD = (!empty($sites['domain']) ? $sites['domain'] : $sites['auto']['domain']);

#auto translate
$browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : $translate['meta']['lang']['FR'];
$Languages_translate = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($browser_lang, 0,2) : $translate['manual']['frontend']['french'];
$phone_langs = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($browser_lang, 3,4) : $translate['manual']['backend']['french'];
$meta_langs = $browser_lang;


#Configuration
$lang_finales = 'languages/'.$Languages_translate.'/general.php';
if (file_exists($lang_finales)) {
	foreach (glob('languages/'.$Languages_translate.'/*.php') as $GlobLangAuto) { include_once $GlobLangAuto; }
	$DefineMajLang = strtoupper($Languages_translate);
	$DefineTranslateLang = $Languages_translate;
} else {
	foreach (glob('languages/'.$translate['manual']['frontend']['french'].'/*.php') as $GlobLangManual) { include_once $GlobLangManual; }
	$DefineMajLang = strtoupper($translate['manual']['frontend']['french']);
	$DefineTranslateLang = $translate['manual']['frontend']['french'];
}

#Translate
$general = json_decode($JE_translate_general, true);
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);

#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

use Joomla\Utilities\IpHelper;

# anti spam with HCAPTCHA
/*
$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$seo['hcaptcha']['private-key'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
$hcaptcha_RData = json_decode($hcaptcha_VResponse);
*/

#LibPhoneNumber-for-php - check only
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberToCarrierMapper;
use libphonenumber\geocoding\PhoneNumberOfflineGeocoder;
use libphonenumber\PhoneNumberFormat;

$PhoneNumberUtil = PhoneNumberUtil::getInstance();
$PhoneNumberCarrierMapper = PhoneNumberToCarrierMapper::getInstance();
$PhoneNumberGeocoder = PhoneNumberOfflineGeocoder::getInstance();

use VisualAppeal\SslLabs;
$api = new SslLabs(true);
$JE_DSslLabsOut = $api->analyze($protocols.'://'.$domainTLD);

#frontend
if(isset($_GET['html-verify'])){
	if($_GET['html-verify'] == 'dailymotion'){
		include_once('themes/seo/html-verify/dailymotion.php');	
	} else if($_GET['html-verify'] == 'google'){
		include_once('themes/seo/html-verify/google.php');	
	} else if($_GET['html-verify'] == 'pinterest'){
		include_once('themes/seo/html-verify/pinterest.php');	
	} else if($_GET['html-verify'] == 'yandex'){
		include_once('themes/seo/html-verify/yandex.php');	
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		
	}
} else if(isset($_GET['json'])){
	if($_GET['json'] == 'manifest'){
		header('Content-type: application/json; charset=utf-8');
		include_once('themes/seo/json/manifest.php');	
	} else if($_GET['json'] == 'ld'){
		header('Content-type: ld+json; charset=utf-8');
		include_once('themes/seo/json/json-ld.php');	
	} else if($_GET['json'] == 'microsoft-identity-association'){
		header('Content-type: application/json; charset=utf-8');
		include_once('themes/seo/json/microsoft-identity-association.php');	
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		
	}
} else if(isset($_GET['txt'])){
	if($_GET['txt'] == 'robots'){
		header('Content-type: text/plain; charset=utf-8');
		include_once('themes/seo/txt/robots.php');		
	} else if($_GET['txt'] == 'ads'){
		header('Content-type: text/plain; charset=utf-8');
		include_once('themes/seo/txt/ads.php');		
	} else if($_GET['txt'] == 'humans'){
		header('Content-type: text/plain; charset=utf-8');
		include_once('themes/seo/txt/humans.php');		
	} else if($_GET['txt'] == 'brave-rewards-verification'){
		header('Content-type: text/plain; charset=utf-8');
		include_once('themes/seo/txt/brave-rewards-verification.php');	
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
	
}
?>