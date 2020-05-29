<?php
#exemple $trad['pages']['legal']['title']; 

$trad_invest = array(
	'invest' => array(
		'browser' => array(
			'title' => 'navigateur internet',
			'description' => 'Commencer pour avoir vos premiers crypto gratuitement et facilement',
			'keyword' => 'invest, investissement, navigateur internet',
			'url' => 'invest/browser.html',
			'url-full' => 'invest/browser.html',
			'cryptotab' => array(
				'title' => 'navigateur internet - cryptotab',
				'description' => 'Essayez le nouveau navigateur CryptoTab doté d\'un algorithme d\'exploration de données intégré et atteignez une vitesse jusqu\'à huit fois supérieure à celle de Google Chrome.',
				'keyword' => 'invest, investissement, navigateur internet, mining, cryptotab',
				'url' => 'invest/browser/cryptotab.html',
				'url-full' => 'invest/browser/cryptotab.html'
			),
			'brave' => array(
				'title' => 'navigateur internet - brave',
				'description' => 'Le navigateur Brave est un navigateur Web rapide, privé et sécurisé pour PC, Mac et mobile. Téléchargez maintenant pour profiter d\'une expérience de navigation sans publicité plus rapide qui économise les données et l\'autonomie de la batterie en bloquant le logiciel de suivi.',
				'keyword' => 'invest, investissement, navigateur internet, brave, BAT, Basic Attention Token',
				'url' => 'invest/browser/brave.html',
				'url-full' => 'invest/browser/brave.html'
			)
		),
		'trading' => array(
			'title' => 'trading',
			'description' => 'commencer le trading ensemble, à vous seul est responsable, la décision, stratégique et des risques à prendre',
			'keyword' => 'invest, investissement, trading',
			'url' => 'invest/trading.html',
			'url-full' => 'invest/trading.html',
			'binance' => array(
				'title' => 'trading - binance',
				'description' => 'Binance cryptocurrency exchange - Nous exploitons le plus grand échange de bitcoins et d\'échange de crypto-monnaies altcoins au monde en volume',
				'keyword' => 'invest, investissement, trading, binance, crypto',
				'url' => 'invest/trading/binance.html',
				'url-full' => 'invest/trading/binance.html'
			)
		),
		'mining' => array(
			'title' => 'mining',
			'description' => 'Commencer le mining par des différences méthodes pour avoir vos premières crypto monnaie',
			'keyword' => 'invest, investissement, mining, miner, cloud mining, solo mining',
			'url' => 'invest/mining.html',
			'url-full' => 'invest/mining.html',
			'just-mining' => array(
				'title' => 'cloud mining - just-mining',
				'description' => 'Just Mining est une société française spécialisée dans les univers de la blockchain et des cryptomonnaies. Notre objectif est de proposer des solutions d\'investissement plug&play. (masternodes, asics, miners, hosting, bictoin,...)',
				'keyword' => 'invest, investissement, cloud mining, mining, just-mining',
				'url' => 'invest/mining/just-mining.html',
				'url-full' => 'invest/mining/just-mining.html'
			),
			'hashshiny' => array(
				'title' => 'cloud mining - hashshiny',
				'description' => '',
				'keyword' => 'invest, investissement, cloud mining, mining, hashshiny',
				'url' => 'invest/mining/hashshiny.html',
				'url-full' => 'invest/mining/hashshiny.html'
			),
			'dualmine' => array(
				'title' => 'cloud mining - dualmine',
				'description' => 'Commencez l\'exploitation du cloud et augmentez votre capital cryptographique maintenant! Produit unique offrant l\'extraction des crypto-monnaies les plus rentables dans le cloud - BTC et ETH. Vous pouvez en extraire un ou les deux en même temps. Votre matériel fonctionne déjà et vous attend!',
				'keyword' => 'invest, investissement, cloud mining, mining, dualmine',
				'url' => 'invest/mining/dualmine.html',
				'url-full' => 'invest/mining/dualmine.html'
			),
			'btc-sweet' => array(
				'title' => 'cloud mining - btc sweet',
				'description' => '',
				'keyword' => 'invest, investissement, cloud mining, mining, btc sweet',
				'url' => 'invest/mining/btc-sweet.html',
				'url-full' => 'invest/mining/btc-sweet.html'
			)
		),
		'wallet' => array(
			'title' => 'Portefeuille',
			'description' => 'Quelles portefeuille choisir en ligne de décentraliser et sécurisé',
			'keyword' => 'invest, investissement, Portefeuille',
			'url' => 'invest/wallet.html',
			'url-full' => 'invest/wallet.html',
			'coinbase' => array(
				'title' => 'Portefeuille - coinbase',
				'description' => 'Coinbase est une plate-forme sécurisée qui facilite l\'achat, la vente et le stockage de crypto-monnaie comme Bitcoin, Ethereum, etc.',
				'keyword' => 'invest, investissement, Portefeuille, coinbase',
				'url' => 'invest/wallet/coinbase.html',
				'url-full' => 'invest/wallet/coinbase.html'
			),
			'uphold' => array(
				'title' => 'Portefeuille - uphold',
				'description' => 'Chez Uphold, nous facilitons l\'achat et la vente des principales devises numériques. Vous pouvez investir, transférer ou envoyer / recevoir entre 9 crypto-monnaies, 23 devises traditionnelles et 4 métaux précieux. Notre application de monnaie numérique est simple, facile et sécurisée.',
				'keyword' => 'invest, investissement, Portefeuille, uphold, crypto',
				'url' => 'invest/wallet/uphold.html',
				'url-full' => 'invest/wallet/uphold.html'
			)
		)
	)
);

$encoder_invest = json_encode($trad_invest);

?>