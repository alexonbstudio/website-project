<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'inc/compress.php'; 

#Decode
$sites = json_decode($JE_sites, true);
$translate = json_decode($JE_translate, true);

#Translate
$general = json_decode($JE_translate_general, true);

#Configuration
$lang_finales = 'languages/'.$translate['auto']['files'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
} else {
	include_once 'languages/fr/general.php'; 
}

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