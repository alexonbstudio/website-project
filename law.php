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
if(isset($_GET['lang'])){
	if($_GET['lang'] == $DefineTranslateLang){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'law'){
			/**########## LAW DIR ##########**/	
				if(isset($_GET['full'])){
					if($_GET['full'] == 'cgu'){
						$title = $law['cgu']['title'];
						$description = $law['cgu']['description'];
						$keyword = $law['cgu']['keyword'];
						$urls = $law['cgu']['url']['default'];
						$imgs = $law['cgu']['sitemap']['images'];
						$vdos = $law['cgu']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['cgu']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['cgu']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/cgu.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'cgv'){
						$title = $law['cgv']['title'];
						$description = $law['cgv']['description'];
						$keyword = $law['cgv']['keyword'];
						$urls = $law['cgv']['url']['default'];
						$imgs = $law['cgv']['sitemap']['images'];
						$vdos = $law['cgv']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['cgv']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['cgv']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/cgv.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'dmca'){
						$title = $law['dmca']['title'];
						$description = $law['dmca']['description'];
						$keyword = $law['dmca']['keyword'];
						$urls = $law['dmca']['url']['default'];
						$imgs = $law['dmca']['sitemap']['images'];
						$vdos = $law['dmca']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['dmca']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['dmca']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/dmca.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'legal'){
						$title = $law['legal']['title'];
						$description = $law['legal']['description'];
						$keyword = $law['legal']['keyword'];
						$urls = $law['legal']['url']['default'];
						$imgs = $law['legal']['sitemap']['images'];
						$vdos = $law['legal']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['legal']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['legal']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/legal.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'policy-privacy'){
						$title = $law['policy-privacy']['title'];
						$description = $law['policy-privacy']['description'];
						$keyword = $law['policy-privacy']['keyword'];
						$urls = $law['policy-privacy']['url']['default'];
						$imgs = $law['policy-privacy']['sitemap']['images'];
						$vdos = $law['policy-privacy']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['policy-privacy']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['policy-privacy']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'cookies'){
						$title = $law['cookies']['title'];
						$description = $law['cookies']['description'];
						$keyword = $law['cookies']['keyword'];
						$urls = $law['cookies']['url']['default'];
						$imgs = $law['cookies']['sitemap']['images'];
						$vdos = $law['cookies']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['cookies']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['cookies']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/cookies.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'rgpd'){
						$title = $law['rgpd']['title'];
						$description = $law['rgpd']['description'];
						$keyword = $law['rgpd']['keyword'];
						$urls = $law['rgpd']['url']['default'];
						$imgs = $law['rgpd']['sitemap']['images'];
						$vdos = $law['rgpd']['sitemap']['video'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['rgpd']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['rgpd']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/rgpd.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else {
						header('Location: '.$protocols.'://'.$domainTLD);
						exit();
					}
				} else {
					$title = $law['pages']['title'];
					$description = $law['pages']['description'];
					$keyword = $law['pages']['keyword'];
					$urls = $law['pages']['url']['default'];
					$imgs = $law['pages']['sitemap']['images'];
					$vdos = $law['pages']['sitemap']['video'];
					define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['pages']['url']['fr']);
					define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['pages']['url']['en']);
					include('themes/'.$sites['template'].'/header.php');
					include_once('themes/'.$sites['template'].'/law/full.php');
					include('themes/'.$sites['template'].'/footer.php');
				}
			} else {
				header('Location: '.$protocols.'://'.$domainTLD);
				exit();
			}
		} else {
			header('Location: '.$protocols.'://'.$domainTLD);
			exit();
		}
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
	exit();
}

?>