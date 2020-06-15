<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/custom/compress.php'; 
#configuration
include_once 'configuration/sites.php';
include_once 'configuration/social.php';
include_once 'configuration/sponsor.php';
include_once 'configuration/translate.php';
include_once 'configuration/version.php';
include_once 'configuration/seo.php';
include_once 'configuration/private.php';
include_once 'configuration/partner.php';
include_once 'configuration/hosting.php';
include_once 'configuration/credits.php';
include_once 'configuration/marketing.php';
include_once 'configuration/images.php';
/*
include_once 'configuration/business.php';
include_once 'configuration/market.php';
include_once 'configuration/restaurant.php';
*/


#Decode
$sites = json_decode($JE_sites, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$partner = json_decode($JE_partner, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
/*
#Supplémentaire
$business = json_decode($JE_business, true);
$markets = json_decode($JE_markets, true);
$restaurant = json_decode($JE_restaurant, true);
*/
#Configuration
$lang_finales = 'languages/'.$translate['manual']['frontend']['french'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/email.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/block.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sitemap.php'; 
} else {
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/general.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/partner.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sponsor.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/law.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/email.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/block.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sitemap.php'; 
}

#Translate
$general = json_decode($JE_translate_general, true);
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);

#Syslink
$protocols = $sites['protocol'];

#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception; test

#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $translate['auto']['seo']){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
				$title = $email['index']['title'];
				$description = $email['index']['description'];
				$keyword = $email['index']['keyword'];
				$urls = $email['index']['url']['default'];
				$imgs = $email['index']['sitemap']['images'];
				
				if(!empty($business['local']['name'])){
		
					if (array_key_exists('teams', $_POST) && in_array($_POST['teams'], [$business['local']['mail']['text']['contact'], $business['local']['mail']['text']['support'], $business['local']['mail']['text']['commercial'], $business['local']['mail']['text']['sponsor'], $business['local']['mail']['text']['partner'], $business['local']['mail']['text']['business']], true)) {
						$teams = $_POST['team'].'@'.$sites['domain'];
					} else {
						$teams = $business['local']['mail']['text']['contact'].'@'.$sites['domain'];
					}	
					# $msg = '';
					if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
						date_default_timezone_set($sites['default-timezone']);

						require 'libs/phpmailer/src/PHPMailer.php';

						$mail = new PHPMailer(true);
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($teams, $sites['domain']);
				
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $email['index']['title'].' - '.$sites['domain'].'.';
							$mail->isHTML(true);
							$mail->Body = '
							<h2>'.$email['index']['title'].': '.$sites['domain'].'</h2>
							<h4>'.$email['index']['content']['subject'].' - '.$_POST['subject'].'</h4> 
							<strong>'.$email['index']['content']['email'].':</strong> '.$_POST['email'].'<br /><br />
							<strong>'.$email['index']['content']['name'].':</strong> '.$_POST['name'].'<br /><br />
							<strong>'.$email['index']['content']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
							<strong>'.$email['index']['content']['message'].':</strong> '.$_POST['message'];
							if (!$mail->send()) {
							   header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
							   exit();
							} else {
							   header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['success']['url']['default']);
							   exit();
							}
						} else {
							header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
							exit();

						}
					}
				} else {
					# $msg = '';
					if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
						date_default_timezone_set($sites['default-timezone']);

						require 'libs/phpmailer/src/PHPMailer.php';

						$mail = new PHPMailer(true);
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($private['mail']['public'], $sites['domain']);
				
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $email['index']['title'].' - '.$sites['domain'].'.';
							$mail->isHTML(true);
							$mail->Body = '
							<h2>'.$email['index']['title'].': '.$sites['domain'].'</h2>
							<h4>'.$email['index']['content']['subject'].' - '.$_POST['subject'].'</h4> 
							<strong>'.$email['index']['content']['email'].':</strong> '.$_POST['email'].'<br /><br />
							<strong>'.$email['index']['content']['name'].':</strong> '.$_POST['name'].'<br /><br />
							<strong>'.$email['index']['content']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
							<strong>'.$email['index']['content']['message'].':</strong> '.$_POST['message'];
							if (!$mail->send()) {
							   header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
							   exit();
							} else {
							   header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['success']['url']['default']);
							   exit();
							}
						} else {
							header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
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
				header('Location: '.$protocols.'://'.$sites['domain']);
				exit();
			}
		} else {
			header('Location: '.$protocols.'://'.$sites['domain']);
			exit();
		}
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$sites['domain']);
	exit();
}

?>