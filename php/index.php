<?php 
#Show error
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'inc/compress.php';  
//require 'inc/phpmailer/src/PHPMailer.php';

include_once 'inc/own.php';  # propore info
include_once 'inc/offices.php';  #Bureaux
include_once 'inc/shoppers.php';  #Boutiques

$lang_finales = 'langs/'.$website['info']['langs']['files'].'.php';
if (file_exists($lang_finales)) {
    include_once 'langs/'.$website['info']['langs']['files'].'.php'; 
    include_once 'langs/invest.'.$website['info']['langs']['files'].'.php'; 
} else {
	include_once 'langs/fr.php'; 
	include_once 'langs/invest.fr.php'; 
}



#Decode true JSON variable use really
$trad = json_decode($encoder, true);
$trad_invest = json_decode($encoder_invest, true);
$markets = json_decode($encoder3, true);
$website = json_decode($encoder1, true);
$offices = json_decode($encoder2, true);


use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception; test

if(isset($_GET['lang'])){
	if($_GET['lang'] == 'all'){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
				$title = $trad['pages']['index']['title'];
				$description = $trad['pages']['index']['description'];
				$keyword = $trad['pages']['index']['keyword'];
				$urls = $trad['pages']['index']['url'];
				$translator = $trad['pages']['index']['url-full'];
				include('pages/header.php');
				include_once('pages/home.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'sponsor'){
				$title = $trad['pages']['sponsor']['title'];
				$description = $trad['pages']['sponsor']['description'];
				$keyword = $trad['pages']['sponsor']['keyword'];
				$urls = $trad['pages']['sponsor']['url'];
				$translator = $trad['pages']['sponsor']['url-full'];
				include('pages/header.php');
				include_once('pages/sponsor.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'telecharger'){
				if(isset($_GET['php'])){
					if($_GET['php'] == 'full'){
						$title = $trad['télécharger']['php']['title'];
						$description = $trad['télécharger']['php']['description'];
						$keyword = $trad['télécharger']['php']['keyword'];
						$urls = $trad['télécharger']['php']['url'];
						$translator = $trad['télécharger']['php']['url-full'];
						include('pages/header.php');
						include_once('pages/telecharger/php.php');
						include('pages/footer.php');
					}
				} else if(isset($_GET['office'])){	
					if($_GET['office'] == 'full'){
						$title = $trad['télécharger']['bureautique']['title'];
						$description = $trad['télécharger']['bureautique']['description'];
						$keyword = $trad['télécharger']['bureautique']['keyword'];
						$urls = $trad['télécharger']['bureautique']['url'];
						$translator = $trad['télécharger']['bureautique']['url-full'];
						include('pages/header.php');
						include_once('pages/telecharger/office.php');
						include('pages/footer.php');	
					}
				} else if(isset($_GET['joomla'])){	
					if($_GET['joomla'] == 'full'){
						$title = $trad['télécharger']['cms']['joomla']['title'];
						$description = $trad['télécharger']['cms']['joomla']['description'];
						$keyword = $trad['télécharger']['cms']['joomla']['keyword'];
						$urls = $trad['télécharger']['cms']['joomla']['url'];
						$translator = $trad['télécharger']['cms']['joomla']['url-full'];
						include('pages/header.php');
						include_once('pages/telecharger/joomla.php');
						include('pages/footer.php');
					}	
				} else {
					$title = $trad['télécharger']['title'];
					$description = $trad['télécharger']['description'];
					$keyword = $trad['télécharger']['keyword'];
					$urls = $trad['télécharger']['url'];
					$translator = $trad['télécharger']['url-full'];
					include('pages/header.php');
					include_once('pages/telecharger.php');
					include('pages/footer.php');	
				}
				
			} else if($_GET['pages'] == 'cv'){
				
				$title = $trad['cv']['title'];
				$description = $trad['cv']['description'];
				$keyword = $trad['cv']['keyword'];
				$urls = $trad['cv']['url'];
				$translator = $trad['cv']['url-full'];
				include('pages/header.php');
				include_once('pages/cv.php');
				include('pages/footer.php');	
				
			} else if($_GET['pages'] == 'market'){
				$title = $trad['pages']['market']['title'];
				$description = $trad['pages']['market']['description'];
				$keyword = $trad['pages']['market']['keyword'];
				$urls = $trad['pages']['market']['url'];
				$translator = $trad['pages']['market']['url-full'];
				include('pages/header.php');
				include_once('pages/projet/market.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'invest'){
				$title = $trad['pages']['invest']['title'];
				$description = $trad['pages']['invest']['description'];
				$keyword = $trad['pages']['invest']['keyword'];
				$urls = $trad['pages']['invest']['url'];
				$translator = $trad['pages']['invest']['url-full'];
				include('pages/header.php');
				include_once('pages/invest.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'projet'){
				if(isset($_GET['transport'])){
					if($_GET['transport'] == 'full'){
						$title = $trad['pages']['projet']['transport']['title'];
						$description = $trad['pages']['projet']['transport']['description'];
						$keyword = $trad['pages']['projet']['transport']['keyword'];
						$urls = $trad['pages']['projet']['transport']['url'];
						$translator = $trad['pages']['projet']['transport']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/transport.php');
						include('pages/footer.php');
					} else if($_GET['transport'] == 'readmore'){
						$title = $trad['pages']['projet']['transport']['content']['title'];
						$description = $trad['pages']['projet']['transport']['content']['description'];
						$keyword = $trad['pages']['projet']['transport']['content']['keyword'];
						$urls = $trad['pages']['projet']['transport']['content']['url'];
						$translator = $trad['pages']['projet']['transport']['content']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/transport-readmore.php');
						include('pages/footer.php');
					} else{
						header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
						exit();
					}
				} else if(isset($_GET['gaming'])){
					if($_GET['gaming'] == 'full'){
						$title = $trad['pages']['projet']['gaming']['title'];
						$description = $trad['pages']['projet']['gaming']['description'];
						$keyword = $trad['pages']['projet']['gaming']['keyword'];
						$urls = $trad['pages']['projet']['gaming']['url'];
						$translator = $trad['pages']['projet']['gaming']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/gaming.php');
						include('pages/footer.php');
					} else if($_GET['gaming'] == 'readmore'){
						$title = $trad['pages']['projet']['gaming']['content']['title'];
						$description = $trad['pages']['projet']['gaming']['content']['description'];
						$keyword = $trad['pages']['projet']['gaming']['content']['keyword'];
						$urls = $trad['pages']['projet']['gaming']['content']['url'];
						$translator = $trad['pages']['projet']['gaming']['content']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/gaming-readmore.php');
						include('pages/footer.php');
					} else{
						header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
						exit();
					}
				} else if(isset($_GET['dj-producer'])){
					if($_GET['dj-producer'] == 'full'){
						$title = $trad['pages']['projet']['dj-producer']['title'];
						$description = $trad['pages']['projet']['dj-producer']['description'];
						$keyword = $trad['pages']['projet']['dj-producer']['keyword'];
						$urls = $trad['pages']['projet']['dj-producer']['url'];
						$translator = $trad['pages']['projet']['dj-producer']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/dj-producer.php');
						include('pages/footer.php');

					} else if($_GET['dj-producer'] == 'readmore'){
						$title = $trad['pages']['projet']['dj-producer']['content']['title'];
						$description = $trad['pages']['projet']['dj-producer']['content']['description'];
						$keyword = $trad['pages']['projet']['dj-producer']['content']['keyword'];
						$urls = $trad['pages']['projet']['dj-producer']['content']['url'];
						$translator = $trad['pages']['projet']['dj-producer']['content']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/dj-producer-readmore.php');
						include('pages/footer.php');

					} else {
						header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
						exit();
					}
					
				} else if(isset($_GET['streaming'])){
					if($_GET['streaming'] == 'full'){
						$title = $trad['pages']['projet']['streaming']['title'];
						$description = $trad['pages']['projet']['streaming']['description'];
						$keyword = $trad['pages']['projet']['streaming']['keyword'];
						$urls = $trad['pages']['projet']['streaming']['url'];
						$translator = $trad['pages']['projet']['streaming']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/stream.php');
						include('pages/footer.php');

					} else if($_GET['streaming'] == 'shoutcast'){
						$title = $trad['pages']['projet']['streaming']['content']['shoutcast']['title'];
						$description = $trad['pages']['projet']['streaming']['content']['shoutcast']['description'];
						$keyword = $trad['pages']['projet']['streaming']['content']['shoutcast']['keyword'];
						$urls = $trad['pages']['projet']['streaming']['content']['shoutcast']['url'];
						$translator = $trad['pages']['projet']['streaming']['content']['shoutcast']['url-full'];
						include('pages/header.php');
						include_once('pages/streaming/shoutcast.php');
						include('pages/footer.php');
					} else {
						header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
						exit();
					}
					
				} else if(isset($_GET['informatique'])){
					if($_GET['informatique'] == 'full'){
						$title = $trad['pages']['projet']['IT']['title'];
						$description = $trad['pages']['projet']['IT']['description'];
						$keyword = $trad['pages']['projet']['IT']['keyword'];
						$urls = $trad['pages']['projet']['IT']['url'];
						$translator = $trad['pages']['projet']['IT']['url-full'];
						include('pages/header.php');
						include_once('pages/projet/it.php');
						include('pages/footer.php');
					
					} else if($_GET['informatique'] == 'security'){
						$title = $trad['pages']['projet']['IT']['content']['security']['title'];
						$description = $trad['pages']['projet']['IT']['content']['security']['description'];
						$keyword = $trad['pages']['projet']['IT']['content']['security']['keyword'];
						$urls = $trad['pages']['projet']['IT']['content']['security']['url'];
						$translator = $trad['pages']['projet']['IT']['content']['security']['url-full'];
						include('pages/header.php');
						include_once('pages/informatique/security.php');
						include('pages/footer.php');	
					} else if($_GET['informatique'] == 'maintenance'){
						$title = $trad['pages']['projet']['IT']['content']['maintenance']['title'];
						$description = $trad['pages']['projet']['IT']['content']['maintenance']['description'];
						$keyword = $trad['pages']['projet']['IT']['content']['maintenance']['keyword'];
						$urls = $trad['pages']['projet']['IT']['content']['maintenance']['url'];
						$translator = $trad['pages']['projet']['IT']['content']['maintenance']['url-full'];
						include('pages/header.php');
						include_once('pages/informatique/maintenance.php');
						include('pages/footer.php');
					} else {
						header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
						exit();
					}
				} else {

					$title = $trad['pages']['projet']['title'];
					$description = $trad['pages']['projet']['description'];
					$keyword = $trad['pages']['projet']['keyword'];
					$urls = $trad['pages']['projet']['url'];
					$translator = $trad['pages']['projet']['url-full'];
					include('pages/header.php');
					include_once('pages/project.php');
					include('pages/footer.php');
				
				}
				
			} else if($_GET['pages'] == 'programme'){
				$title = $trad['pages']['programme']['title'];
				$description = $trad['pages']['programme']['description'];
				$keyword = $trad['pages']['programme']['keyword'];
				$urls = $trad['pages']['programme']['url'];
				$translator = $trad['pages']['programme']['url-full'];
				include('pages/header.php');
				include_once('pages/programme.php');
				include('pages/footer.php');
				
			} else if($_GET['pages'] == 'donation'){
				if(isset($_GET['crypto'])){
					if($_GET['crypto'] == 'full'){
						/*
						$title = $trad['pages']['donation']['content']['crypto']['title'];
						$description = $trad['pages']['donation']['content']['crypto']['description'];
						$keyword = $trad['pages']['donation']['content']['crypto']['keyword'];
						$urls = $trad['pages']['donation']['content']['crypto']['url'];
						$translator = $trad['pages']['donation']['content']['crypto']['url-full'];
						include('pages/header.php');
						include_once('pages/donation/crypto.php');
						include('pages/footer.php');	
						*/
						header("Location: https://commerce.coinbase.com/checkout/129a7ffa-2284-4b98-b869-5e1b667840f5");
						exit();
					} else {
						header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
						exit();
					}
				} else {
					$title = $trad['pages']['donation']['title'];
					$description = $trad['pages']['donation']['description'];
					$keyword = $trad['pages']['donation']['keyword'];
					$urls = $trad['pages']['donation']['url'];
					$translator = $trad['pages']['donation']['url-full'];
					include('pages/header.php');
					include_once('pages/donation.php');
					include('pages/footer.php');
				}
			} else if($_GET['pages'] == 'legal'){
				$title = $trad['pages']['legal']['title'];
				$description = $trad['pages']['legal']['description'];
				$keyword = $trad['pages']['legal']['keyword'];
				$urls = $trad['pages']['legal']['url'];
				$translator = $trad['pages']['legal']['url-full'];
				include('pages/header.php');
				include_once('pages/legal.php');
				include('pages/footer.php');
				
			} else if($_GET['pages'] == 'policy-privacy'){
				header("Location: https://www.shop.alexonbstudio.fr/politique-de-confidentialite/");
				exit();
				
			} else if($_GET['pages'] == 'sitemap'){
				$title = $trad['pages']['sitemap']['title'];
				$description = $trad['pages']['sitemap']['description'];
				$keyword = $trad['pages']['sitemap']['keyword'];
				$urls = $trad['pages']['sitemap']['url'];
				$translator = $trad['pages']['sitemap']['url-full'];
				include('pages/header.php');
				include_once('pages/sitemap.php');
				include('pages/footer.php');
				
			} else if($_GET['pages'] == 'contact'){
					$title = $trad['pages']['contact']['title'];
					$description = $trad['pages']['contact']['description'];
					$keyword = $trad['pages']['contact']['keyword'];
					$urls = $trad['pages']['contact']['url'];
					$translator = $trad['pages']['contact']['url-full'];
					
					$msg = '';
					if (array_key_exists('email', $_POST)) {
						date_default_timezone_set('Etc/UTC');

						require 'inc/phpmailer/src/PHPMailer.php';

						$mail = new PHPMailer(true);
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($website['info']['site']['email-contact'], $website['info']['site']['default-url']);
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $trad['pages']['contact']['contents']['subject'].' '.$website['info']['site']['default-url'].'.';
							$mail->isHTML(true);
							$mail->Body = '
							<h2>'.$trad['pages']['contact']['contents']['title'].'</h2>
							<strong>'.$trad['pages']['contact']['contents']['email'].':</strong> '.$_POST['email'].'
							<strong>'.$trad['pages']['contact']['contents']['name'].':</strong> '.$_POST['name'].'
							<strong>'.$trad['pages']['contact']['contents']['phone'].':</strong> '.$_POST['phone'].'
							<strong>'.$trad['pages']['contact']['contents']['message'].':</strong> '.$_POST['message'];
							if (!$mail->send()) {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
							   exit();
							} else {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['success']['url']);
							   exit();
							}
						} else {
							  header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
							   exit();

						}
					}
					include('pages/header.php');
					include_once('pages/contact.php');
					include('pages/footer.php');
					
			} else if($_GET['pages'] == 'error'){
				$title = $trad['pages']['error']['title'];
				$description = $trad['pages']['error']['description'];
				$keyword = $trad['pages']['error']['keyword'];
				$urls = $trad['pages']['error']['url'];
				$translator = $trad['pages']['error']['url-full'];
				include('pages/header.php');
				include_once('pages/error.php');
				include('pages/footer.php');
				
			} else if($_GET['pages'] == 'image'){
				include_once('pages/blocker/stop.php');
				
			} else if($_GET['pages'] == 'success'){
				$title = $trad['pages']['success']['title'];
				$description = $trad['pages']['success']['description'];
				$keyword = $trad['pages']['success']['keyword'];
				$urls = $trad['pages']['success']['url'];
				$translator = $trad['pages']['success']['url-full'];
				include('pages/header.php');
				include_once('pages/success.php');
				include('pages/footer.php');
				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
				exit();
			}
		} else {
			header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['index']['url']);
			exit();			
		}
		
		
	} else {
			header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url-full']);
			exit();			
		}
} else if(isset($_GET['xml'])){
	if($_GET['xml'] == 'sitemap'){
		include_once('pages/xml/sitemap.php');		
	} else if($_GET['xml'] == 'badge'){
		include_once('pages/xml/badge.php');		
	} else if($_GET['xml'] == 'rss'){
		include_once('pages/xml/rss.php');
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();
	}
} else if(isset($_GET['txt'])){
	if($_GET['txt'] == 'robots'){
		include_once('pages/txt/robots.php');		
	} else if($_GET['txt'] == 'ads'){
		include_once('pages/txt/ads.php');		
	} else if($_GET['txt'] == 'humans'){
		include_once('pages/txt/humans.php');		
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();
	}
} else if(isset($_GET['json'])){
	if($_GET['json'] == 'manifest'){
		include_once('pages/json/manifest.php');		
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();
	}
} else {
	$title = $trad['default']['index']['title'];
	$description = $trad['default']['index']['description'];
	$keyword = $trad['default']['index']['keyword'];
	$urls = $trad['default']['index']['url'];
	$translator = $trad['default']['index']['url-full'];
	include('pages/header.php');
	include_once('pages/home.php');
	include('pages/footer.php');
}

?>