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
$business = json_decode($JE_business, true);


#Syslink
$protocols = $sites['protocol'];
$Languages_translate = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $translate['auto']['seo'] : $translate['manual']['frontend']['french'];

#Configuration
$lang_finales = 'languages/'.$Languages_translate.'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$Languages_translate.'/general.php'; 
    include_once 'languages/'.$Languages_translate.'/partner.php'; 
    include_once 'languages/'.$Languages_translate.'/sponsor.php'; 
    include_once 'languages/'.$Languages_translate.'/law.php'; 
    include_once 'languages/'.$Languages_translate.'/email.php'; 
    include_once 'languages/'.$Languages_translate.'/block.php'; 
    include_once 'languages/'.$Languages_translate.'/sitemap.php'; 
    include_once 'languages/'.$Languages_translate.'/about.php'; 
    include_once 'languages/'.$Languages_translate.'/pool-services.php'; 
    include_once 'languages/'.$Languages_translate.'/pricing.php'; 
    include_once 'languages/'.$Languages_translate.'/faqs.php'; 
    include_once 'languages/'.$Languages_translate.'/others.php'; 
    include_once 'languages/'.$Languages_translate.'/debug.php'; 
} else {
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/general.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/partner.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sponsor.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/law.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/email.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/block.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sitemap.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/about.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/pool-services.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/pricing.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/faqs.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/others.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/debug.php'; 
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
#use PHPMailer\PHPMailer\Exception; test
require 'libs/phpmailer/src/PHPMailer.php';
$mail = new PHPMailer(true);
			
#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $Languages_translate){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
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
						header('Location: '.$protocols.'://'.$sites['domain']);
						exit();
					}
				} else {
					$title = $debug['index']['title'];
					$description = $debug['index']['description'];
					$keyword = $debug['index']['keyword'];
					$urls = $debug['index']['url']['default'];
					$imgs = $debug['index']['sitemap']['images'];
					define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$debug['index']['url']['fr']);
					define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$debug['index']['url']['en']);
					include('themes/'.$sites['template'].'/header.php');
					include_once('themes/'.$sites['template'].'/debug/full.php');
					include('themes/'.$sites['template'].'/footer.php');
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
} else {
	header('Location: '.$protocols.'://'.$sites['domain'].'/'.$debug['index']['url']['default']);
	exit();
}

?>