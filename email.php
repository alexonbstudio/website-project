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
include_once 'configuration/business.php';
/*
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
$business = json_decode($JE_business, true);
/*
#Supplémentaire
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
$Languages_translate = isset($translate['auto']['seo']) ? $translate['manual']['frontend']['french'] : $translate['manual']['frontend']['english'];

#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception; test

require 'libs/phpmailer/src/PHPMailer.php';
$mail = new PHPMailer(true);
				
#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $Languages_translate){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
				$title = $email['index']['title'];
				$description = $email['index']['description'];
				$keyword = $email['index']['keyword'];
				$urls = $email['index']['url']['default'];
				$imgs = $email['index']['sitemap']['images'];

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
							$name_email = $email['index']['content']['placeholder']['name'];
						}
						//Validate teams address
						//Never allow arbitrary input for the 'teams' address as it will turn your form inteams a spam gateway!
						//Substitute appropriate addresses from your own domain, or simply use a single, fixed address
						if (array_key_exists('teams', $_POST) && in_array($_POST['teams'], [$business['local']['mail']['contact'], $business['local']['mail']['support'], $business['local']['mail']['commercial'], $business['local']['mail']['sponsor'], $business['local']['mail']['partner'], $business['local']['mail']['business']], true)) {
							$teams = $_POST['teams'].'@'.$sites['domain'];
						} else {
							$teams = $business['local']['mail']['contact'].'@'.$sites['domain'];
						}
						//Make sure the address they provided is valid before trying teams use it
						if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
							date_default_timezone_set($sites['default-timezone']);
							$email_email = $_POST['email'];
						} else {
							$msg_email .= $email['index']['content']['placeholder']['email'];
							$err_email = true;
						}
						if (!$err_email) {
							$mail->setFrom($business['local']['mail']['contact'].'@'.$sites['domain'], (empty($name_email) ? '<Anonymous>' : $name_email));
							$mail->addAddress($teams, $sites['domain']);
							$mail->addReplyteams($email_email, $name_email);
							
							if ($mail->addReplyTo($email_email, $name_email)) {
								$mail->isHTML(true);
								$mail->Subject = $subject_email.' ('.$email['index']['title'].') - '.$sites['domain'].'.';
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
								$mail->Body = '<h2>'.$email['index']['title'].': '.$sites['domain'].'</h2>
									<h4>'.$email['index']['default']['content']['default']['subject'].':</h4> '.$subject_email.'<br /><br />
									<strong>'.$email['index']['content']['default']['email'].':</strong> '.$email_email.'<br /><br />
									<strong>'.$email['index']['content']['default']['name'].':</strong> '.$name_email.'<br /><br />
									<strong>'.$email['index']['content']['default']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
									<strong>'.$email['index']['content']['default']['message'].':</strong> '.$message_email;
									
									
								if (!$mail->send()) {
									header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
								} else {
									header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['success']['url']['default']);
								}
							} else {
								header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
							}
						}
					} 
				} else {
					# $msg = '';
					if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
						date_default_timezone_set($sites['default-timezone']);
						
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($private['mail']['public'], $sites['domain']);
						# $mail->msgHTML(); #preparing email template
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $email['index']['title'].' - '.$sites['domain'].'.';
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
							<h2>'.$email['index']['title'].': '.$sites['domain'].'</h2>
							<h4>'.$email['index']['content']['default']['subject'].':</h4> '.$_POST['subject'].'<br /><br />
							<strong>'.$email['index']['content']['default']['email'].':</strong> '.$_POST['email'].'<br /><br />
							<strong>'.$email['index']['content']['default']['name'].':</strong> '.$_POST['name'].'<br /><br />
							<strong>'.$email['index']['content']['default']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
							<strong>'.$email['index']['content']['default']['message'].':</strong> '.$_POST['message'];
					
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