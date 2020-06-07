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
$lang_finales = 'languages/en-US/general.php';
if (!file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 

}

#Syslink
$protocols = $sites['protocol'];

#frontend
if(isset($_GET['pages'])){
	if($_GET['pages'] == 'index'){
		$title = $general['index']['title'];
		$description = $general['index']['description'];
		$keyword = $general['index']['keyword'];
		$urls = $general['index']['url'];
		$translator = $general['index']['url-full'];
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/home.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'law'){
		/**########## LAW DIR ##########**/	
		if(isset($_GET['full'])){
			if($_GET['full'] == 'cgu'){
				$title = $law['cgu']['title'];
				$description = $law['cgu']['description'];
				$keyword = $law['cgu']['keyword'];
				$urls = $law['cgu']['url'];
				$translator = $law['cgu']['url-full'];
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/cgu.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'cgv'){
				$title = $law['cgv']['title'];
				$description = $law['cgv']['description'];
				$keyword = $law['cgv']['keyword'];
				$urls = $law['cgv']['url'];
				$translator = $law['cgv']['url-full'];
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/cgv.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'dmca'){
				$title = $law['dmca']['title'];
				$description = $law['dmca']['description'];
				$keyword = $law['dmca']['keyword'];
				$urls = $law['dmca']['url'];
				$translator = $law['dmca']['url-full'];
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/dmca.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'legal'){
				$title = $law['legal']['title'];
				$description = $law['legal']['description'];
				$keyword = $law['legal']['keyword'];
				$urls = $law['legal']['url'];
				$translator = $law['legal']['url-full'];
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/legal.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'policy-privacy'){
				$title = $law['policy-privacy']['title'];
				$description = $law['policy-privacy']['description'];
				$keyword = $law['policy-privacy']['keyword'];
				$urls = $law['policy-privacy']['url'];
				$translator = $law['policy-privacy']['url-full'];
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'rgpd'){
				$title = $law['rgpd']['title'];
				$description = $law['rgpd']['description'];
				$keyword = $law['rgpd']['keyword'];
				$urls = $law['rgpd']['url'];
				$translator = $law['rgpd']['url-full'];
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
			$urls = $law['pages']['url'];
			$translator = $law['pages']['url-full'];
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
	$urls = $general['index']['url'];
	$translator = $general['index']['url-full'];
	include('themes/'.$sites['template'].'/header.php');
	include_once('themes/'.$sites['template'].'/general/home.php');
	include('themes/'.$sites['template'].'/footer.php');	
}

?>