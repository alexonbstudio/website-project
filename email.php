<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

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
$videos = json_decode($JE_videos, true);
$hosting = json_decode($JE_hosting, true);
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
#use PHPMailer\PHPMailer\Exception; test

require 'libs/phpmailer/src/PHPMailer.php';
$mail = new PHPMailer(true);

#Joomla utilities
require 'libs/joomla/utilities/src/IpHelper.php';
use Joomla\Utilities\IpHelper;

# anti spam with HCAPTCHA
/*
$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$seo['hcaptcha']['private-key'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
$hcaptcha_RData = json_decode($hcaptcha_VResponse);
*/


#LibPhoneNumber-for-php - check only
require 'libs/Locale/src/Locale.php';
require 'libs/libphonenumber-for-php/src/prefixmapper/PhonePrefixMap.php';
require 'libs/libphonenumber-for-php/src/prefixmapper/MappingFileProvider.php';
require 'libs/libphonenumber-for-php/src/prefixmapper/PrefixFileReader.php';
require 'libs/libphonenumber-for-php/src/PhoneNumberFormat.php';
require 'libs/libphonenumber-for-php/src/PhoneNumberToCarrierMapper.php';
require 'libs/libphonenumber-for-php/src/geocoding/PhoneNumberOfflineGeocoder.php';
require 'libs/libphonenumber-for-php/src/ValidationResult.php';
require 'libs/libphonenumber-for-php/src/PhoneNumberType.php';
require 'libs/libphonenumber-for-php/src/NumberFormat.php';
require 'libs/libphonenumber-for-php/src/PhoneNumberDesc.php';
require 'libs/libphonenumber-for-php/src/PhoneMetadata.php';
require 'libs/libphonenumber-for-php/src/Matcher.php';
require 'libs/libphonenumber-for-php/src/CountryCodeSource.php';
require 'libs/libphonenumber-for-php/src/PhoneNumber.php';
require 'libs/libphonenumber-for-php/src/MatcherAPIInterface.php';
require 'libs/libphonenumber-for-php/src/RegexBasedMatcher.php';
require 'libs/libphonenumber-for-php/src/MetadataSourceInterface.php';
require 'libs/libphonenumber-for-php/src/MultiFileMetadataSourceImpl.php';
require 'libs/libphonenumber-for-php/src/MetadataLoaderInterface.php';
require 'libs/libphonenumber-for-php/src/DefaultMetadataLoader.php';
require 'libs/libphonenumber-for-php/src/CountryCodeToRegionCodeMap.php';
require 'libs/libphonenumber-for-php/src/PhoneNumberUtil.php';
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberToCarrierMapper;
use libphonenumber\geocoding\PhoneNumberOfflineGeocoder;
use libphonenumber\PhoneNumberFormat;


$PhoneNumberUtil = PhoneNumberUtil::getInstance();
$PhoneNumberCarrierMapper = PhoneNumberToCarrierMapper::getInstance();
$PhoneNumberGeocoder = PhoneNumberOfflineGeocoder::getInstance();

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
}

#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $DefineTranslateLang){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
				$title = $email['index']['title'];
				$description = $email['index']['description'];
				$keyword = $email['index']['keyword'];
				$urls = $email['index']['url']['default'];
				$imgs = $email['index']['sitemap']['images'];
				$vdos = $email['index']['sitemap']['video'];
				//$pattern_out = '/^\+[0-9]{1,3}\.[0-9]{4,14}(?:x.+)?$/';

				if(!empty($business['local']['name'])){
		
					if (array_key_exists('teams', $_POST)) {
						$err_email = false;
						$msg_email = '';
						$email_email = '';
						//Apply some basic validation and filtering teams the subject
						if (array_key_exists('subject', $_POST)) {
							$subject_email = substr(strip_tags($_POST['subject']), 0, 255);
						} else {
							$subject_email = $email['index']['content']['placeholder']['subject'];
						}
						//Apply some basic validation and filtering teams the message
						if (array_key_exists('message', $_POST)) {
							//Limit length and strip HTML tags
							$message_email = substr(strip_tags($_POST['message']), 0, 16384);
						} else {
							$message_email = '';
							$msg_email = $email['index']['content']['placeholder']['message'];
							$err_email = true;
						}
						//Apply some basic validation and filtering teams the name
						if (array_key_exists('name', $_POST)) {
							//Limit length and strip HTML tags
							$name_email = substr(strip_tags($_POST['name']), 0, 255);
						} else {
							$name_email = '';
							$msg_email .= $email['index']['content']['placeholder']['name'];
							$err_email = true;
						}
						
						if (array_key_exists('phone-crountry-code', $_POST) && in_array($_POST['phone-crountry-code'], [$PhoneRegionCodeManualNumbers[strtolower('AF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('EC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('EG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GQ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ER')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('EE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ET')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ID')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IQ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('JM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('JP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('JO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ML')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MQ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('YT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MX')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ME')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('OM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('QA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('WS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ST')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ZA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ES')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('US')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('WF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('YE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ZM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ZW')]['COUNTRY-CODE']], true)) {
							//Limit length and strip HTML tags
							$name_phone_country_code = $_POST['phone-crountry-code'];
						} else {
							$name_phone_country_code = $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE'];
							$msg_phone_country_code .= 'phone error';
							$err_phone_country_code = true;
						}
						
						//Validate teams address
						//Never allow arbitrary input for the 'teams' address as it will turn your form inteams a spam gateway!
						//Substitute appropriate addresses from your own domain, or simply use a single, fixed address
						if (array_key_exists('teams', $_POST) && in_array($_POST['teams'], [$business['local']['mail']['contact'], $business['local']['mail']['support'], $business['local']['mail']['commercial'], $business['local']['mail']['sponsor'], $business['local']['mail']['partner'], $business['local']['mail']['business']], true)) {
							$teams = $_POST['teams'].'@'.$domainTLD;
						} else {
							$teams = $business['local']['mail']['contact'].'@'.$domainTLD;
						}
						//Make sure the address they provided is valid before trying teams use it
						if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])/* && preg_match($pattern_out, $_POST['phone'] */) {
							date_default_timezone_set($sites['default-timezone']);
							$email_email = $_POST['email'];
						} else {
							$msg_email .= $email['index']['content']['placeholder']['email'];
							$err_email = true;
						}
						if (!$err_email) {
							$mail->setFrom($business['local']['mail']['contact'].'@'.$domainTLD, (empty($name_email) ? '<Anonymous>' : $name_email));
							$mail->addAddress($teams, $domainTLD);
							$mail->addReplyteams($email_email, $name_email);
							
							if ($mail->addReplyTo($email_email, $name_email)) {
								$mail->isHTML(true);
								$mail->Subject = $subject_email.' ('.$email['index']['title'].') - '.$domainTLD.'.';
								/*
								#Solution 1
								ob_start("ob_html_compress");
								include 'themes/email/backend.php';
								$body = ob_get_clean();
								$mail->msgHTML($body, dirname(__FILE__));
								*/
								#Solution 2
								/*$vars = array(
									'subject' => $_POST['subject'],
									'email' => $_POST['email'],
									'name' => $_POST['name'],
									'phone' => $_POST['phone'],
									'message' => $_POST['message'],
								);
								$body = file_get_contents('themes/email/public.php');

								if(isset($vars)){
									foreach($email_vars as $k=>$v){
										$body = str_replace('{'.strtoupper($k).'}', $v, $body);
									}
								}
								$mail->msgHTML($body, dirname(__FILE__));
								#$mail->msgHTML(file_get_contents('contents.html'), __DIR__);*/
								# Solution 3
								$mail->Body = '<h2>'.$email['index']['title'].': '.$domainTLD.'</h2>
									<h4>'.$email['index']['default']['content']['default']['subject'].':</h4> '.$subject_email.'<br /><br />
									<strong>'.$email['index']['content']['default']['email'].':</strong> '.$email_email.'<br /><br />
									<strong>'.$email['index']['content']['default']['name'].':</strong> '.$name_email.'<br /><br />
									<strong>'.$email['index']['content']['default']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
									<strong>'.$email['index']['content']['default']['message'].':</strong> '.$message_email;
									
									
								if (!$mail->send()) {
									header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
								} else {
									header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['success']['url']['default']);
								}
							} else {
								header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
							}
						}
					} 
				} else {
					# $msg = '';
						if (array_key_exists('phone-crountry-code', $_POST) && in_array($_POST['phone-crountry-code'], [$PhoneRegionCodeManualNumbers[strtolower('AF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('EC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('EG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GQ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ER')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('EE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ET')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('DE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('HU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ID')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IQ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('IT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('JM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('JP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('JO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ML')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MQ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('YT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MX')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('FM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ME')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MP')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('NO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('OM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('QA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('BL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('KN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('MF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('PM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('WS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ST')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('RS')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ZA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ES')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('LK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SD')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('CH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('SY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TW')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TJ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TH')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TL')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TK')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TO')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TT')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TR')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TC')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('TV')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UG')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UA')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('AE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('GB')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('US')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UY')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VI')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('UZ')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VU')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('VN')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('WF')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('YE')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ZM')]['COUNTRY-CODE'], $PhoneRegionCodeManualNumbers[strtolower('ZW')]['COUNTRY-CODE']], true)) {
							//Limit length and strip HTML tags
							$phone_country_code = $_POST['phone-crountry-code'];
						} else {
							$phone_country_code = $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE'];
						}
						
					
					if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
						date_default_timezone_set($sites['default-timezone']);
						
						$mail->setFrom($_POST['email'], $_POST['name']);
						if(!empty($private['mail']['public'])){
							$mail->addAddress($private['mail']['public'].'@'.$domainTLD, $domainTLD);
						} else {
							$mail->addAddress($private['mail']['private'].'@'.$private['mail']['@']['external'], $domainTLD);
						}
						
						if(array_key_exists('phone', $_POST) && $PhoneNumberUtil->isValidNumber($_POST['phone'])){
							$PhoneCheckNumbers = 'true';
							$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($phone_country_code); # 33
							$PhonecarrerNumbers = $PhoneNumberCarrierMapper->getNameForNumber($_POST['phone'], $DefineTranslateLang);
							$PhoneformatE164Numbers = $PhoneNumberUtil->format($_POST['phone'], PhoneNumberFormat::E164);
							$PhoneformatNATIONALNumbers = $PhoneNumberUtil->format($_POST['phone'], PhoneNumberFormat::NATIONAL);
							$PhoneformatINTERNATIONALNumbers = $PhoneNumberUtil->format($_POST['phone'], PhoneNumberFormat::INTERNATIONAL);
							$PhoneformatRFC3966Numbers = $PhoneNumberUtil->format($_POST['phone'], PhoneNumberFormat::RFC3966);
						} else {
							$PhoneCheckNumbers = 'false';
							$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($phone_country_code); # 33
							$PhonecarrerNumbers = '-';
							$PhoneformatE164Numbers = '-';
							$PhoneformatNATIONALNumbers = '-';
							$PhoneformatINTERNATIONALNumbers = '-';
							$PhoneformatRFC3966Numbers = '#';
						}
						
						# $mail->msgHTML(); #preparing email template
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $email['index']['title'].' - '.$domainTLD.'.';
							$mail->isHTML(true);
							/*
							#Solution 1
							ob_start("ob_html_compress");
							include 'themes/email/backend.php';
							$body = ob_get_clean();
							$mail->msgHTML($body, dirname(__FILE__));
							*/
							#Solution 2
							/*$vars = array(
								'subject' => $_POST['subject'],
								'email' => $_POST['email'],
								'name' => $_POST['name'],
								'phone' => $_POST['phone'],
								'message' => $_POST['message'],
							);
							$body = file_get_contents('themes/email/public.php');

							if(isset($vars)){
								foreach($email_vars as $k=>$v){
									$body = str_replace('{'.strtoupper($k).'}', $v, $body);
								}
							}
							$mail->msgHTML($body, dirname(__FILE__));
							#$mail->msgHTML(file_get_contents('contents.html'), __DIR__);*/
							#solution 3
							$mail->Body = '
							<h2>'.$email['index']['title'].': '.$domainTLD.'</h2>
							<h4>'.$email['index']['content']['default']['subject'].':</h4> '.$_POST['subject'].'<br /><br />
							<strong>'.$email['index']['content']['default']['email'].':</strong> '.$_POST['email'].'<br /><br />
							<strong>'.$email['index']['content']['default']['name'].':</strong> '.$_POST['name'].'<br /><br />
							<strong>'.$email['index']['content']['default']['phone'].':</strong> <a href="'.$PhoneformatRFC3966Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> '.$PhoneCheckNumbers.' ('.$PhonecarrerNumbers.'/'.$PhoneRegionCodeNumbers.')<br /><br />
							<strong>'.$email['index']['content']['default']['message'].':</strong> '.$_POST['message'];
					
							if (!$mail->send()) {
							   header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
							   exit();
							} else {
							   header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['success']['url']['default']);
							   exit();
							}
						} else {
							header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
							exit();

						}
					}
				}
				define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$email['index']['url']['fr']);
				define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$email['index']['url']['en']);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/email/full.php');
				include('themes/'.$sites['template'].'/footer.php');	
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
} else if(isset($_GET['security'])){
	if($_GET['security'] == 'csp'){
		if(!empty($business['local']['name'])){
			$SecurityCSP_emailTo=$business['local']['mail']['contact'].'@'.$domainTLD;
		} else {
			$SecurityCSP_emailTo=$private['mail']['public'].'@'.$domainTLD;
		}

		http_response_code(204);

		// Only run if proper input data received
		if ($SecurityCSP_data=json_decode(file_get_contents('php://input'), true)){
			if (!isset($SecurityCSP_data['csp-report'])){ return; }
				
			$SecurityCSP_data=$SecurityCSP_data['csp-report'];
			ksort($SecurityCSP_data);
			
			if ($SecurityCSP_data['blocked-uri']==''){ return; }
			
			// Filter out junk reports
			$blockedUris=array('127.0.0.1', 'blur://', 'mbinit://', 'ms-appx-web:', 'mx:', 'opera://', 'safari-extension:', 'self');
			
			foreach($blockedUris as $uri){
				if (strpos($SecurityCSP_data['blocked-uri'], $uri)!==FALSE){
					return;
				}
			}
			
			// Prettify the JSON-formatted data
			$SecurityCSP_email=json_encode($SecurityCSP_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)."\r\n\r\n";

			$SecurityCSP_email.=sprintf("%s (%s)\r\n", $_SERVER['REMOTE_ADDR'], gethostbyaddr($_SERVER['REMOTE_ADDR']));
			$SecurityCSP_email.=sprintf("%s\r\n\r\n", $_SERVER['HTTP_USER_AGENT']);
			
			// Mail the CSP violation report
			mail($ecurityCSP_emailTo, 'CSP Violation - '.$domainTLD, $SecurityCSP_email, 'Content-Type: text/plain;charset=utf-8');
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