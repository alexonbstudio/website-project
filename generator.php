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
/*
switch ($PhoneNumberUtil->getNumberType($PhoneNumberData)) {
	case '0':
		$PhoneGetType = 'FIXED LINE';
	break;
	case '1':
		$PhoneGetType = 'MOBILE';
	break;
	case '2':
		$PhoneGetType = 'FIXED LINE OR MOBILE';
	break;
	case '3':
		$PhoneGetType = 'TOLL REE';
	break;
	case '4':
		$PhoneGetType = 'PREMIUM RATE';
	break;
	case '5':
		$PhoneGetType = 'SHARED COST';
	break;
	case '6':
		$PhoneGetType = 'VOIP';
	break;
	case '7':
		$PhoneGetType = 'PERSONAL NUMBER';
	break;
	case '8':
		$PhoneGetType = 'PAGER';
	break;
	case '9':
		$PhoneGetType = 'UAN';
	break;
	case '10':
		$PhoneGetType = 'UNKNOWN';
	break;
	case '27':
		$PhoneGetType = 'EMERGENCY';
	break;
	case '28':
		$PhoneGetType = 'VOICEMAIL';
	break;
	case '29':
		$PhoneGetType = 'SHORT CODE';
	break;
	case '30':
		$PhoneGetType = 'STANDARD RATE';
	break;
	default:
		$PhoneGetType = 'UNKNOWN';
}*/


use Icamys\SitemapGenerator\SitemapGenerator;	

$outputDir = getcwd();
	
$generator = new SitemapGenerator($protocols.'://'.$domainTLD, $outputDir);
$generator->toggleGZipFileCreation();
$generator->setMaxURLsPerSitemap(50000);

#frontend
if(isset($_GET['sitemaps'])){
	if($_GET['sitemaps'] == 'index'){
		// sitemap file name
		$generator->setSitemapFileName("sitemap-index.xml");
		include_once('themes/automate/sitemap-index.php');
	} else if($_GET['sitemaps'] == 'fr'){
		// sitemap file name
		$generator->setSitemapFileName("sitemap-fr.xml");
		include_once('themes/automate/sitemap-'.$translate['manual']['frontend']['french'].'.php');	
	} else if($_GET['sitemaps'] == 'en'){
		// sitemap file name
		$generator->setSitemapFileName("sitemap-en.xml");
		include_once('themes/automate/sitemap-'.$translate['manual']['frontend']['english'].'.php');	
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
	exit();
}

?>