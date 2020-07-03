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

#frontend
if(isset($_GET['pages'])){
	if($_GET['pages'] == 'index'){
		$title = $general['index']['title'];
		$description = $general['index']['description'];
		$keyword = $general['index']['keyword'];
		$urls = $general['index']['url']['default'];
		$imgs = $general['index']['sitemap']['images'];
		define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$general['index']['url']['fr']);
		define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$general['index']['url']['en']);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/home.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'email'){
		/**########## EMAIL DIR ##########**/	
		$title = $email['index']['title'];
		$description = $email['index']['description'];
		$keyword = $email['index']['keyword'];
		$urls = $email['index']['url']['default'];
		$imgs = $email['index']['sitemap']['images'];
		$imgs = $email['index']['sitemap']['images'];

				require 'libs/phpmailer/src/PHPMailer.php';

				$mail = new PHPMailer(true);
				
		if(!empty($business['local']['name'])){		
		
			if (array_key_exists('teams', $_POST) && in_array($_POST['teams'], [$business['local']['mail']['text']['contact'], $business['local']['mail']['text']['support'], $business['local']['mail']['text']['commercial'], $business['local']['mail']['text']['sponsor'], $business['local']['mail']['text']['partner'], $business['local']['mail']['text']['business']], true)) {
			#if (array_key_exists('teams', $_POST) && in_array($_POST['teams'], true)) {
				$teams = $_POST['team'].'@'.$sites['domain'];
			} else {
				$teams = $business['local']['mail']['text']['contact'].'@'.$sites['domain'];
			}		
		
		
			# $msg = '';
			if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
				date_default_timezone_set($sites['default-timezone']);
				$mail->setFrom($_POST['email'], $_POST['name']);
				$mail->addAddress($teams, $sites['domain']);
				
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
							
							#Solution 3
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
		} else {		
			# $msg = '';
			if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
				date_default_timezone_set($sites['default-timezone']);
				
				$mail->setFrom($_POST['email'], $_POST['name']);
				$mail->addAddress($private['mail']['public'], $sites['domain']);
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
							#Solution 3
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
	} else if($_GET['pages'] == 'sponsor'){
		/**########## SPONSOR DIR ##########**/	
		$title = $sponsor['index']['title'];
		$description = $sponsor['index']['description'];
		$keyword = $sponsor['index']['keyword'];
		$urls = $sponsor['index']['url']['default'];
		$imgs = $sponsor['index']['sitemap']['images'];
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
				define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['policy-privacy']['url']['fr']);
				define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['policy-privacy']['url']['en']);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'rgpd'){
				$title = $law['rgpd']['title'];
				$description = $law['rgpd']['description'];
				$keyword = $law['rgpd']['keyword'];
				$urls = $law['rgpd']['url']['default'];
				$imgs = $law['rgpd']['sitemap']['images'];
				define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['rgpd']['url']['fr']);
				define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['rgpd']['url']['en']);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/rgpd.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else {
				header('Location: '.$protocols.'://'.$sites['domain']);
				exit();
			}
		} else {
			$title = $law['pages']['title'];
			$description = $law['pages']['description'];
			$keyword = $law['pages']['keyword'];
			$urls = $law['pages']['url']['default'];
			$imgs = $law['pages']['sitemap']['images'];
			define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['pages']['url']['fr']);
			define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['pages']['url']['en']);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/law/full.php');
			include('themes/'.$sites['template'].'/footer.php');
		}
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else {
	$title = $general['index']['title'];
	$description = $general['index']['description'];
	$keyword = $general['index']['keyword'];
	$urls = $general['index']['url']['default'];
	$imgs = $general['index']['sitemap']['images'];
	define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$general['index']['url']['fr']);
	define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$general['index']['url']['en']);
	include('themes/'.$sites['template'].'/header.php');
	include_once('themes/'.$sites['template'].'/general/home.php');
	include('themes/'.$sites['template'].'/footer.php');	
}

?>