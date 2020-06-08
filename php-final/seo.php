<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


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

#Configuration
$lang_finales = 'languages/'.$translate['manual']['backend']['english'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 
} else {
    include_once 'languages/'.$translate['manual']['backend']['french'].'/general.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/partner.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/sponsor.php'; 
    include_once 'languages/'.$translate['manual']['backend']['french'].'/law.php'; 
}

#SEO sitemap
$lang_finales = 'themes/seo/xml/translate/default.php';
if (file_exists($lang_finales)) {
    include_once 'themes/seo/xml/translate/'.$translate['auto']['seo'].'.php'; 
} else {
    include_once 'themes/seo/xml/translate/'.$translate['manual']['frontend']['french'].'.php'; 
}

#Syslink
$protocols = $sites['protocol'];

#frontend
if(isset($_GET['xml'])){
	if($_GET['xml'] == 'sitemap'){
		if(isset($_GET['translate'])){
			if($_GET['translate'] == 'default'){
				include_once('themes/seo/xml/translate/default.php');	
			} else if($_GET['translate'] == $translate['auto']['seo']){
				include_once('themes/seo/xml/translate/'.$translate['auto']['seo'].'.php');	
			} else {
				header('Location: '.$protocols.'://'.$sites['domain']);
				exit();
			}
		} else {
			include_once('themes/seo/xml/sitemap.php');	
		}
	} else if($_GET['xml'] == 'badge'){
		include_once('themes/seo/xml/badge.php');		
	} else if($_GET['xml'] == 'dublincore'){
		include_once('themes/seo/xml/dublincore.php';		
	} else if($_GET['xml'] == 'rss'){
		include_once('themes/seo/xml/rss.php');
	} else if($_GET['xml'] == 'crossdomain'){
		include_once('themes/seo/xml/crossdomain.php');
	} else if($_GET['xml'] == 'bingsiteauth'){
		include_once('themes/seo/xml/BingSiteAuth.php');
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else if(isset($_GET['txt'])){
	if($_GET['txt'] == 'robots'){
		include_once('themes/seo/txt/robots.php');		
	} else if($_GET['txt'] == 'ads'){
		include_once('themes/seo/txt/ads.php');		
	} else if($_GET['txt'] == 'humans'){
		include_once('themes/seo/txt/humans.php');		
	} else if($_GET['txt'] == 'brave-rewards-verification'){
		include_once('themes/seo/txt/brave-rewards-verification.php');		
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else if(isset($_GET['json'])){
	if($_GET['json'] == 'manifest'){
		include_once('themes/seo/json/manifest.php');		
	} else if($_GET['json'] == 'ld'){
		include_once('themes/seo/json/json-ld.php');		
	} else if($_GET['json'] == 'microsoft-identity-association'){
		include_once('themes/seo/json/microsoft-identity-association.php');		
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else if(isset($_GET['html-verify'])){
	if($_GET['json'] == 'dailymotion'){
		include_once('themes/seo/html-verify/dailymotion.php');		
	} else if($_GET['html-verify'] == 'google'){
		include_once('themes/seo/html-verify/google.php');		
	} else if($_GET['html-verify'] == 'pinterest'){
		include_once('themes/seo/html-verify/pinterest.php');		
	} else if($_GET['html-verify'] == 'yandex'){
		include_once('themes/seo/html-verify/yandex.php');		
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$sites['domain']);
	exit();
}
?>