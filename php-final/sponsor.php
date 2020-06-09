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
#Translate
$general = json_decode($JE_translate_general, true);
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);

#Configuration
$lang_finales = 'languages/'.$translate['manual']['backend']['english'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/email.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/block.php'; 
} else {
    include_once 'languages/'.$translate['manual']['backend']['french'].'/general.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/partner.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/sponsor.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/law.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/email.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/block.php'; 
}

#Syslink
$protocols = $sites['protocol'];

#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $translate['auto']['seo']){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
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