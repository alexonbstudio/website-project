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
$sites = json_decode($JE_sites);
$translate = json_decode($JE_translate);
$credits = json_decode($JE_credits);
$private = json_decode($JE_private);
$seo = json_decode($JE_seo);
$partner = json_decode($JE_partner);
$social = json_decode($JE_social);
$hosting = json_decode($JE_hosting);
$marketing = json_decode($JE_marketing);
$images = json_decode($JE_images);
$business = json_decode($JE_business);
/*
#Supplémentaire
$markets = json_decode($JE_markets);
$restaurant = json_decode($JE_restaurant);
*/
    include_once 'languages/fr/general.php'; 
    include_once 'languages/fr/partner.php'; 
    include_once 'languages/fr/sponsor.php'; 
    include_once 'languages/fr/law.php'; 
    include_once 'languages/fr/email.php'; 
    include_once 'languages/fr/block.php'; 
    include_once 'languages/fr/sitemap.php'; 


#Translate
$general = json_decode($JE_translate_general);
$partner = json_decode($JE_translate_partner);
$sponsor = json_decode($JE_translate_sponsor);
$law = json_decode($JE_translate_law);
$email = json_decode($JE_translate_email);
$block = json_decode($JE_translate_block);
$sitemap = json_decode($JE_translate_sitemap);


?>
<html>
	<head>
		<title>
			Website Project (WP) - Debug json V1.4 RC
		</title>
	</head>
	<body>
		<h2>Sites - Json</h2>
		<?php echo $JE_sites; ?>
		
		<h2>translate - Json</h2>
		<?php echo $JE_translate; ?>
		
		<h2>credits - Json</h2>
		<?php echo $JE_credits; ?>
		
		<h2>private - Json</h2>
		<?php echo $JE_private; ?>
		
		<h2>seo - Json</h2>
		<?php echo $JE_seo; ?>
		
		<h2>partner - Json</h2>
		<?php echo $JE_partner; ?>
		
		<h2>social - Json</h2>
		<?php echo $JE_social; ?>
		
		<h2>hosting - Json</h2>
		<?php echo $JE_hosting; ?>
		
		<h2>marketing - Json</h2>
		<?php echo $JE_marketing; ?>
		
		<h2>images - Json</h2>
		<?php echo $JE_images; ?>
		<p style="text-align: center;">################Translate LANGS ISO  639-1 ##################</p>
		<h2>general - Json</h2>
		<?php echo $JE_translate_general; ?>
		
		<h2>partner - Json</h2>
		<?php echo $JE_translate_partner; ?>
		
		<h2>sponsor - Json</h2>
		<?php echo $JE_translate_sponsor; ?>
		
		<h2>law - Json</h2>
		<?php echo $JE_translate_law; ?>
		
		<h2>email - Json</h2>
		<?php echo $JE_translate_email; ?>
		
		<h2> block - Json</h2>
		<?php echo $JE_translate_block; ?>
		
		<h2>sitemap - Json</h2>
		<?php echo $JE_translate_sitemap; ?>
		<h4 style="text-align: center;">##########		Copyright &copy; AlexonbStudio CC-BY-SA - GNU GPL V3.0		##########</h4>
		
	</body>
<html>

