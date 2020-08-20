<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/autoload.php';

#require libs/custom/
foreach (glob('libs/custom/*.php') as $GlobRequire) { include_once $GlobRequire; }

#configuration
foreach (glob('configuration/*.php') as $GlobConfig) { include_once $GlobConfig; }

#Decode
$sites = json_decode($JE_sites, true);
$sponsor_config = json_decode($JE_sponsor_config, true);
$partner_config = json_decode($JE_partner_config, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$downloader = json_decode($JE_downloader, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$videos = json_decode($JE_videos, true);
$business = json_decode($JE_business, true);
$PhoneRegionCodeManualNumbers = json_decode($JE_PhoneRegionCodeManualNumbers, true);


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
$about = json_decode($JE_translate_about, true);
$pool = json_decode($JE_translate_pool, true);
$pricing = json_decode($JE_translate_pricing, true);
$faqs = json_decode($JE_translate_faqs, true);
$others = json_decode($JE_translate_others, true);
$debug = json_decode($JE_translate_debug, true);

#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);
use Joomla\Utilities\IpHelper;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberToCarrierMapper;
use libphonenumber\geocoding\PhoneNumberOfflineGeocoder;
use libphonenumber\PhoneNumberFormat;

$PhoneNumberUtil = PhoneNumberUtil::getInstance();
$PhoneNumberCarrierMapper = PhoneNumberToCarrierMapper::getInstance();
$PhoneNumberGeocoder = PhoneNumberOfflineGeocoder::getInstance();

#frontend

use VisualAppeal\SslLabs;
$api = new SslLabs(true);
$JE_DSslLabsOut = $api->analyze($protocols.'://'.$domainTLD);

echo $JE_DSslLabsOut->host;
echo $JE_DSslLabsOut->endpoints['0']->grade; #gRADE
echo $JE_DSslLabsOut->endpoints['0']->ipAddress; #ipADRESS


/*
##################################		DEBUG JSON DEBUG 20/08/2020 with cloudflare  		##################################
stdClass Object ( 
	[host] => https://cloudflare.com 
	[port] => 443 
	[protocol] => http 
	[isPublic] => 
	[status] => READY 
	[startTime] => 1597868471151 
	[testTime] => 1597868839912 
	[engineVersion] => 2.1.5 
	[criteriaVersion] => 2009q 
	[endpoints] => Array ( 
		[0] => stdClass Object ( 
			[ipAddress] => 2606:4700:0:0:0:0:6811:b055 
			[statusMessage] => Ready 
			[grade] => B 
			[gradeTrustIgnored] => B 
			[hasWarnings] => 
				[isExceptional] => 
					[progress] => 100 
					[duration] => 90289 
					[delegation] => 1 
		) 
		[1] => stdClass Object ( 
			[ipAddress] => 2606:4700:0:0:0:0:6811:af55 
			[statusMessage] => Ready 
			[grade] => B 
			[gradeTrustIgnored] => B 
			[hasWarnings] => 
				[isExceptional] => 
					[progress] => 100 
					[duration] => 89917 
					[delegation] => 1 
		) 
		[2] => stdClass Object ( 
			[ipAddress] => 104.17.175.85 
			[statusMessage] => Ready 
			[grade] => B 
			[gradeTrustIgnored] => B 
			[hasWarnings] => 
				[isExceptional] => 
					[progress] => 100 
					[duration] => 94098 
					[delegation] => 1 
		) 
		[3] => stdClass Object ( 
			[ipAddress] => 104.17.176.85 
			[statusMessage] => Ready 
			[grade] => B 
			[gradeTrustIgnored] => B 
			[hasWarnings] => 
				[isExceptional] => 
					[progress] => 100 
					[duration] => 94283 
					[delegation] => 1
		) 
	) 
)
*/
?>






