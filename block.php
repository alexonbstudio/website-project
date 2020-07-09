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


#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $Languages_translate){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'success'){
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