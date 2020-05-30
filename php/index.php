<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

#require 'inc/phpmailer/src/PHPMailer.php';
require 'inc/compress.php';  

include 'inc/owner.php';
//include 'inc/body.php';


$website = json_decode($encoder, true);


use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET['pages'])){
	if($_GET['pages'] == 'plombier'){
		$title = $website['plombier']['title'];
		$description = $website['plombier']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['plombier']['url'];
		include 'pages/header.php';
		include 'pages/plombier.php';
		include 'pages/footer.php';
	} else if($_GET['pages'] == 'chauffagiste'){
		$title = $website['chauffagiste']['title'];
		$description = $website['chauffagiste']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['chauffagiste']['url'];
		include 'pages/header.php';
		include 'pages/chauffagiste.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'vitrier'){
		$title = $website['vitrier']['title'];
		$description = $website['vitrier']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['vitrier']['url'];
		include 'pages/header.php';
		include 'pages/vitrier.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'electricien'){
		$title = $website['electricien']['title'];
		$description = $website['electricien']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['electricien']['url'];
		include 'pages/header.php';
		include 'pages/electricien.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'serrurier'){
		$title = $website['serrurier']['title'];
		$description = $website['serrurier']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['serrurier']['url'];
		include 'pages/header.php';
		include 'pages/serrurier.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'volet-roulant-et-store'){
		$title = $website['volet-roulant-et-store']['title'];
		$description = $website['volet-roulant-et-store']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['volet-roulant-et-store']['url'];
		include 'pages/header.php';
		include 'pages/volet-roulant-et-store.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'mention-legale'){
		$title = $website['notice-legal']['title'];
		$description = $website['notice-legal']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['notice-legal']['url'];
		include 'pages/header.php';
		include 'pages/notice-legal.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'demande-devis'){
		$title = $website['demande-devis']['title'];
		$description = $website['demande-devis']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['demande-devis']['url'];
					$msg = '';
					if (array_key_exists('email', $_POST)) {
						date_default_timezone_set('Etc/UTC');

						require 'inc/phpmailer/src/PHPMailer.php';

						$mail = new PHPMailer(true);
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($website['info']['site']['email-devis'], $website['info']['site']['default-url']);
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $website['demande-devis']['contents']['subject'].' '.$website['info']['site']['default-url'].'.';
							$mail->isHTML(true);
							$mail->Body = '
							<h2>'.$website['demande-devis']['contents']['title'].'</h2>
							<strong>'.$website['demande-devis']['contents']['email'].':</strong> '.$_POST['email'].'
							<strong>'.$website['demande-devis']['contents']['name'].':</strong> '.$_POST['name'].'
							<strong>'.$website['demande-devis']['contents']['phone'].':</strong> '.$_POST['phone'].'
							<strong>'.$website['demande-devis']['contents']['address'].':</strong> '.$_POST['address'].'
							<strong>'.$website['demande-devis']['contents']['message'].':</strong> '.$_POST['message'];
							if (!$mail->send()) {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['error']['url']);
							   exit();
							} else {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['pages']['success']['url']);
							   exit();
							}
						} else {
							  header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['error']['url']);
							   exit();

						}
					}
		include 'pages/header.php';
		include 'pages/demande-devis.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'contact'){
		$title = $website['contactez-nous']['title'];
		$description = $website['contactez-nous']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['contactez-nous']['url'];
	
					$msg = '';
					if (array_key_exists('email', $_POST)) {
						date_default_timezone_set('Etc/UTC');

						require 'inc/phpmailer/src/PHPMailer.php';

						$mail = new PHPMailer;
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($website['info']['site']['email-contact'], $website['info']['site']['default-url']);
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $website['contactez-nous']['contents']['subject'].' '.$website['info']['site']['default-url'].'.';
							$mail->isHTML(true);
							$mail->Body = '
							<h2>'.$website['contactez-nous']['contents']['title'].'</h2>
							<strong>'.$website['contactez-nous']['contents']['email'].':</strong> '.$_POST['email'].'
							<strong>'.$website['contactez-nous']['contents']['name'].':</strong> '.$_POST['name'].'
							<strong>'.$website['contactez-nous']['contents']['phone'].':</strong> '.$_POST['phone'].'
							<strong>'.$website['contactez-nous']['contents']['message'].':</strong> '.$_POST['message'];
							if (!$mail->send()) {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['error']['url']);
							   exit();
							} else {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['pages']['success']['url']);
							   exit();
							}
						} else {
							  header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['error']['url']);
							   exit();

						}
					}
		include 'pages/header.php';
		include 'pages/contact.php';
		include 'pages/footer.php';
		
	} else if($_GET['pages'] == 'plan-du-site'){
		$title = $website['plan-du-site']['title'];
		$description = $website['plan-du-site']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['plan-du-site']['url'];
		include 'pages/header.php';
		include 'pages/plan-du-site.php';
		include 'pages/footer.php';
		
	} else {
		header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['home']['url']);
	}
} else if(isset($_GET['files'])){
	if($_GET['files'] == 'xml-sitemap'){
		include 'pages/xml/sitemap.php';
	} else if($_GET['files'] == 'txt-robots'){
		include 'pages/txt/robots.php';
	} else if($_GET['files'] == 'txt-humans'){
		include 'pages/txt/humans.php';
	} else if($_GET['files'] == 'xml-badge'){
		include 'pages/xml/badge.php';
	} else if($_GET['files'] == 'xml-dublincore'){
		include 'pages/xml/dublincore.php';
	} else if($_GET['files'] == 'xml-rss'){
		include 'pages/xml/rss.php';
	} else {
		header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['home']['url']);
	}
} else if(isset($_GET['full'])){
	if($_GET['full'] == 'error'){
		$title = $website['error']['title'];
		$description = $website['error']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['error']['url'];
		include 'pages/header.php';
		include 'pages/error.php';
		include 'pages/footer.php';
	} else if($_GET['full'] == 'success'){
		$title = $website['success']['title'];
		$description = $website['success']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['success']['url'];
		include 'pages/header.php';
		include 'pages/success.php';
		include 'pages/footer.php';
	} else {
		header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['home']['url']);
	}
} else {
		$title = $website['home']['title'];
		$description = $website['home']['description'];
		$url = $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['home']['url'];
		include 'pages/header.php';
		include 'pages/home.php';
		include 'pages/footer.php';
}

?>