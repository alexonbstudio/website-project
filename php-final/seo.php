<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

#require 'inc/compress.php'; 
#configuration
include_once 'configuration/sites.php';

#Decode
$sites = json_decode($JE_sites, true);
$translate = json_decode($JE_translate, true);

#Languages
$general = json_decode($JE_translate_general, true);

#Configuration
$lang_finales = 'languages/'.$translate['auto']['files'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
} else {
	include_once 'languages/fr/general.php'; 
}
#Syslink
$protocols = $sites['protocol'];

if(isset($_GET['xml'])){
	if($_GET['xml'] == 'sitemap'){
		include_once('themes/'.$sites['template'].'/seo/xml/sitemap.php');		
	} else if($_GET['xml'] == 'badge'){
		include_once('themes/'.$sites['template'].'/seo/xml/badge.php');		
	} else if($_GET['xml'] == 'dublincore'){
		include_once('themes/'.$sites['template'].'/seo/xml/dublincore.php';		
	} else if($_GET['xml'] == 'rss'){
		include_once('themes/'.$sites['template'].'/seo/xml/rss.php');
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else if(isset($_GET['txt'])){
	if($_GET['txt'] == 'robots'){
		include_once('themes/'.$sites['template'].'/seo/txt/robots.php');		
	} else if($_GET['txt'] == 'ads'){
		include_once('themes/'.$sites['template'].'/seo/txt/ads.php');		
	} else if($_GET['txt'] == 'humans'){
		include_once('themes/'.$sites['template'].'/seo/txt/humans.php');		
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else if(isset($_GET['json'])){
	if($_GET['json'] == 'manifest'){
		include_once('themes/'.$sites['template'].'/seo/json/manifest.php');		
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$sites['domain']);
	exit();
}
?>