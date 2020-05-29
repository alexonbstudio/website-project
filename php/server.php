<?php 
#Show error
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'inc/compress.php';  
require 'inc/phpmailer/src/PHPMailer.php';

include_once 'inc/own.php';  # propore info
include_once 'inc/offices.php';  #Bureaux
include_once 'inc/shoppers.php';  #Boutiques

$lang_finales = 'langs/'.$website['info']['langs']['files'].'.php';
if (file_exists($lang_finales)) {
    include_once 'langs/'.$website['info']['langs']['files'].'.php'; 
} else {
	include_once 'langs/fr.php'; 
}



#Decode true JSON variable use really
$trad = json_decode($encoder, true);
$markets = json_decode($encoder3, true);
$website = json_decode($encoder1, true);
$offices = json_decode($encoder2, true);

use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception; test


if(isset($_GET['pages'])){
	if($_GET['pages'] == 'minecraft'){
		$title = $trad['server']['minecraft']['title'];
		$description = $trad['server']['minecraft']['description'];
		$keyword = $trad['server']['minecraft']['keyword'];
		$urls = $trad['server']['minecraft']['url'];
		$translator = $trad['server']['minecraft']['url-full'];
		include('pages/header.php');
		include_once('pages/server/minecraft.php');
		include('pages/footer.php');
	} else if($_GET['pages'] == 'mcpe'){
		header('Location: https://www.globnations.alexonbstudio.fr/index.html');
		exit();	
	} else if($_GET['pages'] == 'shoutcast'){
		$title = $trad['server']['shoutcast']['title'];
		$description = $trad['server']['shoutcast']['description'];
		$keyword = $trad['server']['shoutcast']['keyword'];
		$urls = $trad['server']['shoutcast']['url'];
		$translator = $trad['server']['shoutcast']['url-full'];
		include('pages/header.php');
		include_once('pages/server/shoutcast.php');
		include('pages/footer.php');
	} else {
			header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();		
		}
} else {
	$title = $trad['server']['default']['title'];
	$description = $trad['server']['default']['description'];
	$keyword = $trad['server']['default']['keyword'];
	$urls = $trad['server']['default']['url'];
	$translator = $trad['server']['default']['url-full'];
	include('pages/header.php');
	include_once('pages/server/all.php');
	include('pages/footer.php');
}

?>