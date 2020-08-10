<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

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
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$videos = json_decode($JE_videos, true);
$business = json_decode($JE_business, true);


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
/************************************************************************************************************/		
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

$SelectPhoneNumberRegionCode = 'CH';
$SelectPhoneNumberRegionCode = $phone_langs;
$DataPhoneNumberCheck = '798765432';

echo '<br><br>DEFAULT CH<br><br>';
#$PhoneNumberData = $PhoneNumberUtil->parse('7987654', 'FR');
$PhoneNumberData = $PhoneNumberUtil->parse($DataPhoneNumberCheck, $SelectPhoneNumberRegionCode);//CH
echo '<br><br>';
if($PhoneNumberUtil->isValidNumber($PhoneNumberData)){
	echo 'true number valid for '.$SelectPhoneNumberRegionCode.' phone';
} else {
	echo 'false number not valid for '.$SelectPhoneNumberRegionCode.' phone';
}
echo '<br><br>';

$WPRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion('FR'); # 33
echo $PhoneNumberUtil->getCountryCodeForRegion($SelectPhoneNumberRegionCode); # 33

echo '<br><br>';

$WPcarrerNumbers = $PhoneNumberCarrierMapper->getNameForNumber($PhoneNumberData, $DefineTranslateLang);
echo $PhoneNumberCarrierMapper->getNameForNumber($PhoneNumberData, $DefineTranslateLang);

echo '<br><br>';

$WPGeocoderNumbers = $PhoneNumberGeocoder->getDescriptionForNumber($PhoneNumberData, "fr_FR");
echo $PhoneNumberGeocoder->getDescriptionForNumber($PhoneNumberData, "fr_FR");

echo '<br><br>';

$WPformatE164Numbers = $PhoneNumberUtil->format($PhoneNumberData, PhoneNumberFormat::E164);
echo $PhoneNumberUtil->format($PhoneNumberData, PhoneNumberFormat::E164);

echo '<br><br>';

$WPformatNATIONALNumbers = $PhoneNumberUtil->format($PhoneNumberData, PhoneNumberFormat::NATIONAL);
echo $PhoneNumberUtil->format($PhoneNumberData, PhoneNumberFormat::NATIONAL);

echo '<br><br>';

$WPformatINTERNATIONALNumbers = $PhoneNumberUtil->format($PhoneNumberData, PhoneNumberFormat::INTERNATIONAL);
echo $PhoneNumberUtil->format($PhoneNumberData, PhoneNumberFormat::INTERNATIONAL);


/************************************************************************************************************/		
#frontend - https://numverify.com/documentation Verify number phone
/*
// set API Access Key
$access_key = 'YOUR_ACCESS_KEY';

// set phone number
$phone_number = '14158586273';

// Initialize CURL:
$ch = curl_init('http://apilayer.net/api/validate?access_key='.$access_key.'&number='.$phone_number.'');  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$validationResult = json_decode($json, true);

// Access and use your preferred validation result objects
$validationResult['valid'];
$validationResult['country_code'];
$validationResult['carrier'];

*/







































?>