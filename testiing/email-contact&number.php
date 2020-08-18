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

				$title = $email['index']['title'];
				$description = $email['index']['description'];
				$keyword = $email['index']['keyword'];
				$urls = $email['index']['url']['default'];
				$imgs = $email['index']['sitemap']['images'];
				$vdos = $email['index']['sitemap']['video'];




			if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
				date_default_timezone_set($sites['default-timezone']);
				
				$mail->setFrom($_POST['email'], $_POST['name']);
				
				if(!empty($private['mail']['public'])){
					$mail->addAddress($private['mail']['public'].'@'.$domainTLD, $domainTLD);
				} else {
					$mail->addAddress($private['mail']['private'].'@'.$private['mail']['@']['external'], $domainTLD);
				}

				# Verify Number libphonenumber-for-php		
				if(!empty($_POST['phone'])){
					$phone = $PhoneNumberUtil->parse(substr(strip_tags($_POST['phone']), 0, 255), $_POST['phone-crountry-code']); # Default FR
				} else {
					$phone = $PhoneNumberUtil->parse('000000000', $_POST['phone-crountry-code']); # Default FR
				}
				if ($PhoneNumberUtil->isValidNumber($phone)){
					$PhoneVerify = 'TRUE';
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($_POST['phone-crountry-code']); # 33
					$PhonecarrerNumbers = $PhoneNumberCarrierMapper->getNameForNumber($phone, $DefineTranslateLang);
					$PhoneformatE164Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::E164);
					$PhoneformatNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::NATIONAL);
					$PhoneformatINTERNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::INTERNATIONAL);
					$PhoneformatRFC3966Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::RFC3966);
				} else {
					$PhoneVerify = 'FAKE';
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($_POST['phone-crountry-code']); # 33
					$PhonecarrerNumbers = '';
					$PhoneformatE164Numbers = '#';
					$PhoneformatNATIONALNumbers = '000000000';
					$PhoneformatINTERNATIONALNumbers = '000000000';
					$PhoneformatRFC3966Numbers = '#';
				}
				
				switch ($PhoneNumberUtil->getNumberType($phone)) {
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
						
				if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
					$mail->Subject = $_POST['subject'].' ('.$email['index']['title'].') - '.$domainTLD.'.';
					$mail->isHTML(true);
							/*
							#Solution 1
							ob_start("ob_html_compress");
							include 'themes/email/backend.php';
							$body = ob_get_clean();
							$mail->msgHTML($body, dirname(__FILE__));
							*/
							#Solution 2
							/*$email_vars_tpl = array(
								'subject' => $_POST['subject'],
								'email' => $_POST['email'],
								'name' => $_POST['name'],
								'phone' =>  '(Type:'.$PhoneGetType.'/'.$PhoneVerify.')='.$phone.' | +('.$PhoneRegionCodeNumbers.') <a href="'.$PhoneformatE164Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> <strong>(info: '.$PhonecarrerNumbers.')',
								'message' => $_POST['message'],
							);
							$body_tpl = file_get_contents('themes/email/public.php');

							if(isset($vars_tpl)){
								foreach($email_vars_tpl as $code_tpl=>$value){
									$body_tpl = str_replace('{'.strtoupper($code_tpl).'}', $value, $body_tpl);
								}
							}
							$mail->msgHTML($body_tpl, dirname(__FILE__));
							#Solution 3
							#$mail->msgHTML(file_get_contents('contents.html'), __DIR__);*/
							#Solution 0 = basic
							$mail->Body = '
							<h2>'.$email['index']['title'].': '.$domainTLD.'</h2>
							<h4>'.$email['index']['content']['default']['subject'].' - '.$_POST['subject'].'</h4>
							<strong>'.$email['index']['content']['default']['email'].':</strong> '.$_POST['email'].'<br />
							<strong>'.$email['index']['content']['default']['name'].':</strong> '.$_POST['name'].'<br />
							<strong>'.$email['index']['content']['default']['phone'].':</strong> (Type:'.$PhoneGetType.'/'.$PhoneVerify.')='.$phone.' | +('.$PhoneRegionCodeNumbers.') <a href="'.$PhoneformatE164Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> <strong>(info: '.$PhonecarrerNumbers.')</strong><br /><br />
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


				define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$email['index']['url']['fr']);
				define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$email['index']['url']['en']);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/email/full.php');
				include('themes/'.$sites['template'].'/footer.php');

?>
