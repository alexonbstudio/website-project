<?php 
#Show error
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'inc/compress.php';  

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


if(isset($_GET['pages'])){
	if($_GET['pages'] == 'browser'){
		if(isset($_GET['index'])){
			if($_GET['index'] == 'cryptotab'){
				$title = $trad_invest['invest']['browser']['cryptotab']['title'];
				$description = $trad_invest['invest']['browser']['cryptotab']['description'];
				$keyword = $trad_invest['invest']['browser']['cryptotab']['keyword'];
				$urls = $trad_invest['invest']['browser']['cryptotab']['url'];
				$translator = $trad_invest['invest']['browser']['cryptotab']['url'];
				include('pages/header.php');
				include_once('pages/invest/browser/cryptotab.php');
				include('pages/footer.php');			
			} else if($_GET['index'] == 'brave'){
				$title = $trad_invest['invest']['browser']['brave']['title'];
				$description = $trad_invest['invest']['browser']['brave']['description'];
				$keyword = $trad_invest['invest']['browser']['brave']['keyword'];
				$urls = $trad_invest['invest']['browser']['brave']['url'];
				$translator = $trad_invest['invest']['browser']['brave']['url'];
				include('pages/header.php');
				include_once('pages/invest/browser/brave.php');
				include('pages/footer.php');			
			} else {
				header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url']);
				exit();	

			}	
		} else {	
			$title = $trad_invest['invest']['browser']['title'];
			$description = $trad_invest['invest']['browser']['description'];
			$keyword = $trad_invest['invest']['browser']['keyword'];
			$urls = $trad_invest['invest']['browser']['url'];
			$translator = $trad_invest['invest']['browser']['url'];
			include('pages/header.php');
			include_once('pages/invest/browser/index.php');
			include('pages/footer.php');
		}
	} else if($_GET['pages'] == 'trading'){
		if(isset($_GET['index'])){
			if($_GET['index'] == 'binance'){
				$title = $trad_invest['invest']['trading']['binance']['title'];
				$description = $trad_invest['invest']['trading']['binance']['description'];
				$keyword = $trad_invest['invest']['trading']['binance']['keyword'];
				$urls = $trad_invest['invest']['trading']['binance']['url'];
				$translator = $trad_invest['invest']['trading']['binance']['url'];
				include('pages/header.php');
				include_once('pages/invest/trading/binance.php');
			} else {
				header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url']);
				exit();	

			}	
		} else {
			$title = $trad_invest['invest']['trading']['title'];
			$description = $trad_invest['invest']['trading']['description'];
			$keyword = $trad_invest['invest']['trading']['keyword'];
			$urls = $trad_invest['invest']['trading']['url'];
			$translator = $trad_invest['invest']['trading']['url'];
			include('pages/header.php');
			include_once('pages/invest/trading/index.php');
			include('pages/footer.php');
		}
	} else if($_GET['pages'] == 'mining'){
		if(isset($_GET['index'])){
			if($_GET['index'] == 'just-mining'){
				$title = $trad_invest['invest']['mining']['just-mining']['title'];
				$description = $trad_invest['invest']['mining']['just-mining']['description'];
				$keyword = $trad_invest['invest']['mining']['just-mining']['keyword'];
				$urls = $trad_invest['invest']['mining']['just-mining']['url'];
				$translator = $trad_invest['invest']['mining']['just-mining']['url'];
				include('pages/header.php');
				include_once('pages/invest/mining/just-mining.php');
			} else if($_GET['index'] == 'hashshiny'){
				$title = $trad_invest['invest']['mining']['hashshiny']['title'];
				$description = $trad_invest['invest']['mining']['hashshiny']['description'];
				$keyword = $trad_invest['invest']['mining']['hashshiny']['keyword'];
				$urls = $trad_invest['invest']['mining']['hashshiny']['url'];
				$translator = $trad_invest['invest']['mining']['hashshiny']['url'];
				include('pages/header.php');
				include_once('pages/invest/mining/hashshiny.php');
			} else if($_GET['index'] == 'dualmine'){
				$title = $trad_invest['invest']['mining']['dualmine']['title'];
				$description = $trad_invest['invest']['mining']['dualmine']['description'];
				$keyword = $trad_invest['invest']['mining']['dualmine']['keyword'];
				$urls = $trad_invest['invest']['mining']['dualmine']['url'];
				$translator = $trad_invest['invest']['mining']['dualmine']['url'];
				include('pages/header.php');
				include_once('pages/invest/mining/dualmine.php');
			} else if($_GET['index'] == 'btc-sweet'){
				$title = $trad_invest['invest']['mining']['btc-sweet']['title'];
				$description = $trad_invest['invest']['mining']['btc-sweet']['description'];
				$keyword = $trad_invest['invest']['mining']['btc-sweet']['keyword'];
				$urls = $trad_invest['invest']['mining']['btc-sweet']['url'];
				$translator = $trad_invest['invest']['mining']['btc-sweet']['url'];
				include('pages/header.php');
				include_once('pages/invest/mining/btc-sweet.php');
			} else {
				header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url']);
				exit();	

			}	
		} else {
			$title = $trad_invest['invest']['mining']['title'];
			$description = $trad_invest['invest']['mining']['description'];
			$keyword = $trad_invest['invest']['mining']['keyword'];
			$urls = $trad_invest['invest']['mining']['url'];
			$translator = $trad_invest['invest']['mining']['url'];
			include('pages/header.php');
			include_once('pages/invest/mining/index.php');
			include('pages/footer.php');
		}
	} else if($_GET['pages'] == 'wallet'){
		if(isset($_GET['index'])){
			if($_GET['index'] == 'coinbase'){
				$title = $trad_invest['invest']['wallet']['coinbase']['title'];
				$description = $trad_invest['invest']['wallet']['coinbase']['description'];
				$keyword = $trad_invest['invest']['wallet']['coinbase']['keyword'];
				$urls = $trad_invest['invest']['wallet']['coinbase']['url'];
				$translator = $trad_invest['invest']['wallet']['coinbase']['url'];
				include('pages/header.php');
				include_once('pages/invest/wallet/coinbase.php');
				include('pages/footer.php');
			} else if($_GET['index'] == 'uphold'){
				$title = $trad_invest['invest']['wallet']['uphold']['title'];
				$description = $trad_invest['invest']['wallet']['uphold']['description'];
				$keyword = $trad_invest['invest']['wallet']['uphold']['keyword'];
				$urls = $trad_invest['invest']['wallet']['uphold']['url'];
				$translator = $trad_invest['invest']['wallet']['uphold']['url'];
				include('pages/header.php');
				include_once('pages/invest/wallet/uphold.php');
				include('pages/footer.php');
			} else {
				header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url']);
				exit();	
			}	
		} else {
			$title = $trad_invest['invest']['wallet']['title'];
			$description = $trad_invest['invest']['wallet']['description'];
			$keyword = $trad_invest['invest']['wallet']['keyword'];
			$urls = $trad_invest['invest']['wallet']['url'];
			$translator = $trad_invest['invest']['wallet']['url'];
			include('pages/header.php');
			include_once('pages/invest/wallet/index.php');
			include('pages/footer.php');
		}
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url']);
		exit();		
	}
} else {
	header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url']);
	exit();	
}

?>