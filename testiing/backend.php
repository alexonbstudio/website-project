<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

# NOT RECOMMEND PRODUCER LIVE, ONLY FOR TESTING (Developper Experimental Advanced Config)

require 'libs/custom/compress.php'; 

#minifier CSS/JS - minifier.org
require 'libs/minify/src/Exception.php'; 
require 'libs/minify/src/Exceptions/BasicException.php'; 
require 'libs/minify/src/Exceptions/FileImportException.php'; 
require 'libs/minify/src/Exceptions/IOException.php'; 
require 'libs/minify/src/Minify.php'; 
use MatthiasMullie\Minify;

#Compressor JPG/PNG - TinyPNG.com
require 'libs/minify/tinify/Tinify/Exception.php';
require 'libs/minify/tinify/Tinify/ResultMeta.php';
require 'libs/minify/tinify/Tinify/Result.php';
require 'libs/minify/tinify/Tinify/Source.php';
require 'libs/minify/tinify/Tinify/Client.php';
require 'libs/minify/tinify/Tinify.php'; 
use Tinify;

# PHPMailer 
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
# https://stackoverflow.com/questions/38158181/send-html-emails-using-phpmailer-and-html-templates/38158566

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
#Configuration
$lang_finales = 'languages/'.$translate['manual']['frontend']['french'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/email.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/block.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sitemap.php'; 
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

#Syslink
$protocols = $sites['protocol'];

#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $translate['auto']['seo']){
		if(isset($_GET['pages'])){
			# link is backend.php?lang=(fr|en)&pages=minify
			if($_GET['pages'] == 'minify'){
				#TESTING JS/CSS minify
				$sourcePath = '/libs/minify/testing/test.js';
				$minifier = new Minify\JS($sourcePath);

				// we can even add another file, they'll then be
				// joined in 1 output file
				#$sourcePath2 = '/libs/minify/testing/test.min.js';
				#$minifier->add($sourcePath2);

				// or we can just add plain js
				$js = 'var test = 1';
				$minifier->add($js);

				// save minified file to disk
				$minifiedPath = '/libs/minify/testing/test.min.js';
				$minifier->minify($minifiedPath);

				// or just output the content
				echo $minifier->minify();

			# link is backend.php?lang=(fr|en)&pages=images
			} else if($_GET['pages'] == 'images'){
				#TESTING JS/CSS minify
				$minifier = new Minify\JS($sourcePath);
				$tinypng = new Tinify;
				$tinypng->setKey("YOUR_API_KEY");
				$tinypng->fromFile("unoptimized.png")->toFile("optimized.png");
				/*
				Tinify\setKey("YOUR_API_KEY");
				Tinify\fromFile("unoptimized.png")->toFile("optimized.png");
				*/

			
			} else if($_GET['pages'] == 'contact'){
				$mail = new PHPMailer(true);

				try {
					//Server settings
					$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
					$mail->isSMTP();                                            // Send using SMTP
					$mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
					$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
					$mail->Username   = 'user@example.com';                     // SMTP username
					$mail->Password   = 'secret';                               // SMTP password
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
					$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
					// To load the French version
					$mail->setLanguage('fr', '/optional/path/to/language/directory/');
					//Recipients
					$mail->setFrom('from@example.com', 'Mailer');
					$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
					$mail->addAddress('ellen@example.com');               // Name is optional
					$mail->addReplyTo('info@example.com', 'Information');
					$mail->addCC('cc@example.com');
					$mail->addBCC('bcc@example.com');

					// Attachments
					$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
					$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

					// Content
					$mail->isHTML(true);                                  // Set email format to HTML
					$mail->Subject = 'Here is the subject';
					$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					$mail->send();
					echo 'Message has been sent';
				} catch (Exception $e) {
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
	header('Location: '.$protocols.'://'.$sites['domain']);
	exit();
}

?>