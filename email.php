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
$phone_results = json_decode($JE_translate_phone_results, true);

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
			if($_GET['pages'] == 'index'){
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
					$PhoneVerify = $phone_results['true'][$sites['email']['receive']];
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($_POST['phone-crountry-code']); # 33
					$PhonecarrerNumbers = $PhoneNumberCarrierMapper->getNameForNumber($phone, $DefineTranslateLang);
					$PhoneformatE164Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::E164);
					$PhoneformatNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::NATIONAL);
					$PhoneformatINTERNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::INTERNATIONAL);
					$PhoneformatRFC3966Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::RFC3966);
				} else {
					$PhoneVerify = $phone_results['false'][$sites['email']['receive']];
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($_POST['phone-crountry-code']); # 33
					$PhonecarrerNumbers = '';
					$PhoneformatE164Numbers = '#';
					$PhoneformatNATIONALNumbers = '000000000';
					$PhoneformatINTERNATIONALNumbers = '000000000';
					$PhoneformatRFC3966Numbers = '#';
				}
				
				switch ($PhoneNumberUtil->getNumberType($phone)) {
					case '0':
						$PhoneGetType = $phone_results['switch']['FIXED-LINE'];
					break;
					case '1':
						$PhoneGetType = $phone_results['switch']['MOBILE'];
					break;
					case '2':
						$PhoneGetType = $phone_results['switch']['FIXED-LINE-OR-MOBILE'];
					break;
					case '3':
						$PhoneGetType = $phone_results['switch']['TOLL-REE'];
					break;
					case '4':
						$PhoneGetType = $phone_results['switch']['PREMIUM-RATE'];
					break;
					case '5':
						$PhoneGetType = $phone_results['switch']['SHARED-COST'];
					break;
					case '6':
						$PhoneGetType = $phone_results['switch']['VOIP'];
					break;
					case '7':
						$PhoneGetType = $phone_results['switch']['PERSONAL-NUMBER'];
					break;
					case '8':
						$PhoneGetType = $phone_results['switch']['PAGER'];
					break;
					case '9':
						$PhoneGetType = $phone_results['switch']['UAN'];
					break;
					case '10':
						$PhoneGetType = $phone_results['switch']['UNKNOWN'];
					break;
					case '27':
						$PhoneGetType = $phone_results['switch']['EMERGENCY'];
					break;
					case '28':
						$PhoneGetType = $phone_results['switch']['VOICEMAIL'];
					break;
					case '29':
						$PhoneGetType = $phone_results['switch']['SHORT-CODE'];
					break;
					case '30':
						$PhoneGetType = $phone_results['switch']['STANDARD-RATE'];
					break;
					default:
						$PhoneGetType = $phone_results['switch']['UNKNOWN'];
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