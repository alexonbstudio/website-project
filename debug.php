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

    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/email.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/block.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sitemap.php'; 



?>
<html>
	<head>
		<title>
			Website Project (WP) - Debug json V1.5
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

