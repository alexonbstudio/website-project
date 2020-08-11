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
/* Take other method
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
*/
#frontend
if(isset($_GET['pages'])){
	if($_GET['pages'] == 'index'){
		$title = $general['index']['title'];
		$description = $general['index']['description'];
		$keyword = $general['index']['keyword'];
		$urls = $general['index']['url']['default'];
		$imgs = $general['index']['sitemap']['images'];
		$vdos = $general['index']['sitemap']['video'];
		define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$general['index']['url']['fr']);
		define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$general['index']['url']['en']);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/home.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'debug'){
		/**########## debug DIR ##########**/
		if(isset($_GET['json'])){
			if($_GET['json'] == 'sites'){
				include_once('themes/debug/sites.php');
			} else if($_GET['json'] == 'social'){
				include_once('themes/debug/social.php');
			} else if($_GET['json'] == 'private'){
				include_once('themes/debug/private.php');
			} else if($_GET['json'] == 'business'){
				include_once('themes/debug/business.php');
			} else if($_GET['json'] == 'images'){
				include_once('themes/debug/images.php');
			} else if($_GET['json'] == 'partner'){
				include_once('themes/debug/partner.php');
			} else if($_GET['json'] == 'sponsor'){
				include_once('themes/debug/sponsor.php');
			} else if($_GET['json'] == 'credits'){
				include_once('themes/debug/credits.php');
			} else {
				header('Location: '.$protocols.'://'.$domainTLD);
				exit();
			}
		} else {
			$title = $debug['index']['title'];
			$description = $debug['index']['description'];
			$keyword = $debug['index']['keyword'];
			$urls = $debug['index']['url']['default'];
			$imgs = $debug['index']['sitemap']['images'];
			$vdos = $debug['index']['sitemap']['video'];
			define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$debug['index']['url']['fr']);
			define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$debug['index']['url']['en']);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/debug/full.php');
			include('themes/'.$sites['template'].'/footer.php');	
		}
	} else if($_GET['pages'] == 'email'){
		/**########## EMAIL DIR ##########**/	
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
			if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
				date_default_timezone_set($sites['default-timezone']);
				
				$mail->setFrom($_POST['email'], $_POST['name']);
				if(!empty($private['mail']['public'])){
					$mail->addAddress($private['mail']['public'].'@'.$domainTLD, $domainTLD);
				} else {
					$mail->addAddress($private['mail']['private'].'@'.$private['mail']['@']['external'], $domainTLD);
				}
						
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
							#Solution 3
							$mail->Body = '
							<h2>'.$email['index']['title'].': '.$domainTLD.'</h2>
							<h4>'.$email['index']['content']['default']['subject'].':</h4> '.$_POST['subject'].'<br /><br />
							<strong>'.$email['index']['content']['default']['email'].':</strong> '.$_POST['email'].'<br /><br />
							<strong>'.$email['index']['content']['default']['name'].':</strong> '.$_POST['name'].'<br /><br />
							<strong>'.$email['index']['content']['default']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
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
	} else if($_GET['pages'] == 'sponsor'){
		/**########## SPONSOR DIR ##########**/	
		$title = $sponsor['index']['title'];
		$description = $sponsor['index']['description'];
		$keyword = $sponsor['index']['keyword'];
		$urls = $sponsor['index']['url']['default'];
		$imgs = $sponsor['index']['sitemap']['images'];
		$vdos = $sponsor['index']['sitemap']['video'];
		define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$sponsor['index']['url']['fr']);
		define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$sponsor['index']['url']['en']);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/sponsor/full.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'sitemap'){
		/**########## SITEMAP DIR ##########**/	
		$title = $sitemap['index']['title'];
		$description = $sitemap['index']['description'];
		$keyword = $sitemap['index']['keyword'];
		$urls = $sitemap['index']['url']['default'];
		$imgs = $sitemap['index']['sitemap']['images'];
		$vdos = $sitemap['index']['sitemap']['video'];
		define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$sitemap['index']['url']['fr']);
		define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$sitemap['index']['url']['en']);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/sitemap/default.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'partner'){
		/**########## PARTNER DIR ##########**/	
		$title = $partner['index']['title'];
		$description = $partner['index']['description'];
		$keyword = $partner['index']['keyword'];
		$urls = $partner['index']['url']['default'];
		$imgs = $partner['index']['sitemap']['images'];
		$vdos = $partner['index']['sitemap']['video'];
		define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$partner['index']['url']['fr']);
		define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$partner['index']['url']['en']);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/partner/full.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'success'){
		/**########## EMAIL - RECEIVE SUCCESS / BLOCK DIR ##########**/	
			$title = $block['success']['title'];
			$description = $block['success']['description'];
			$keyword = $block['success']['keyword'];
			$urls = $block['success']['url']['default'];
			$imgs = $block['success']['sitemap']['images'];
			$vdos = $block['success']['sitemap']['video'];
			define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$block['success']['url']['fr']);
			define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$block['success']['url']['en']);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/block/success.php');
			include('themes/'.$sites['template'].'/footer.php');
	} else if($_GET['pages'] == 'error'){
		/**########## ERROR PAGE/EMAIL / BLOCK DIR ##########**/	
			$title = $block['error']['title'];
			$description = $block['error']['description'];
			$keyword = $block['error']['keyword'];
			$urls = $block['error']['url']['default'];
			$imgs = $block['error']['sitemap']['images'];
			$vdos = $block['error']['sitemap']['video'];
			define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$block['error']['url']['fr']);
			define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$block['error']['url']['en']);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/block/error.php');
			include('themes/'.$sites['template'].'/footer.php');	
	} else if($_GET['pages'] == 'law'){
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
	$title = $general['index']['title'];
	$description = $general['index']['description'];
	$keyword = $general['index']['keyword'];
	$urls = $general['index']['url']['default'];
	$imgs = $general['index']['sitemap']['images'];
	$vdos = $general['index']['sitemap']['video'];
	define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$general['index']['url']['fr']);
	define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$general['index']['url']['en']);
	include('themes/'.$sites['template'].'/header.php');
	include_once('themes/'.$sites['template'].'/general/home.php');
	include('themes/'.$sites['template'].'/footer.php');	
}

?>