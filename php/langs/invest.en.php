<?php
#exemple $trad['pages']['legal']['title']; 

$trad_invest = array(
	'invest' => array(
		'browser' => array(
			'title' => 'browser',
			'description' => 'Start getting your first crypto for free and easily',
			'keyword' => 'invest, investment, browser',
			'url' => 'invest/browser.html',
			'url-full' => 'invest/browser.html',
			'cryptotab' => array(
				'title' => 'browser - cryptotab',
				'description' => 'Try the new CryptoTab browser featuring a built-in mining algorithm and achieve up to eight times faster speed compared to Google Chrome.',
				'keyword' => 'invest, investment, browser, mining, cryptotab',
				'url' => 'invest/browser/cryptotab.html',
				'url-full' => 'invest/browser/cryptotab.html'
			),
			'brave' => array(
				'title' => 'browser - brave',
				'description' => 'The Brave browser is a fast, private and secure web browser for PC, Mac and mobile. Download now to enjoy a faster ad-free browsing experience that saves data and battery life by blocking tracking software.',
				'keyword' => 'invest, investment, browser, brave, BAT, Basic Attention Token',
				'url' => 'invest/browser/brave.html',
				'url-full' => 'invest/browser/brave.html'
			)
		),
		'trading' => array(
			'title' => 'trading',
			'description' => 'start trading together, you alone are responsible, the decision, strategic and risk to take',
			'keyword' => 'invest, investment, trading',
			'url' => 'invest/trading.html',
			'url-full' => 'invest/trading.html',
			'binance' => array(
				'title' => 'trading - binance',
				'description' => 'Binance cryptocurrency exchange - We operate the worlds biggest bitcoin exchange and altcoin crypto exchange in the world by volume',
				'keyword' => 'invest, investment, trading, binance, crypto',
				'url' => 'invest/trading/binance.html',
				'url-full' => 'invest/trading/binance.html'
			)
		),
		'mining' => array(
			'title' => 'mining',
			'description' => 'Start mining with different methods to get your first cryptocurrency',
			'keyword' => 'invest, investment, cloud, mining',
			'url' => 'invest/mining.html',
			'url-full' => 'invest/mining.html',
			'just-mining' => array(
				'title' => 'mining - just-mining',
				'description' => 'Just Mining is a French company specializing in the world of blockchain and cryptocurrency. Our goal is to offer plug&amp;play investment solutions. (masternodes, asics, miners, hosting, bictoin,...)',
				'keyword' => 'invest, investment, cloud, mining, just-mining, cloud mining',
				'url' => 'invest/mining/just-mining.html',
				'url-full' => 'invest/mining/just-mining.html'
			),
			'hashshiny' => array(
				'title' => 'mining - hashshiny',
				'description' => '',
				'keyword' => 'invest, investment, cloud, mining, hashshiny, cloud mining',
				'url' => 'invest/mining/hashshiny.html',
				'url-full' => 'invest/mining/hashshiny.html'
			),
			'dualmine' => array(
				'title' => 'mining - dualmine',
				'description' => 'Start cloud mining and increase your crypto capital now! Unique product offering the mining of the most profitable cryptocurrencies in the cloud - BTC and ETH. You can mining one of them or both at the same time. Your hardware is already running and waiting for You!',
				'keyword' => 'invest, investment, cloud, mining, dualmine, cloud mining',
				'url' => 'invest/mining/dualmine.html',
				'url-full' => 'invest/mining/dualmine.html'
			),
			'btc-sweet' => array(
				'title' => 'mining - btc sweet',
				'description' => '',
				'keyword' => 'invest, investment, cloud, mining, btc sweet, cloud mining',
				'url' => 'invest/mining/btc-sweet.html',
				'url-full' => 'invest/mining/btc-sweet.html'
			)
		),
		'wallet' => array(
			'title' => 'wallet',
			'description' => 'Which portfolio to choose online to decentralize and secure',
			'keyword' => 'invest, investment, wallet, crypto',
			'url' => 'invest/wallet.html',
			'url-full' => 'invest/wallet.html',
			'coinbase' => array(
				'title' => 'wallet - coinbase',
				'description' => 'Coinbase is a secure platform that makes it easy to buy, sell, and store cryptocurrency like Bitcoin, Ethereum, and more.',
				'keyword' => 'invest, investment, wallet, coinbase',
				'url' => 'invest/wallet/coinbase.html',
				'url-full' => 'invest/wallet/coinbase.html'
			),
			'uphold' => array(
				'title' => 'wallet - uphold',
				'description' => 'At Uphold, we make it easy to buy and sell any major digital currency. You can invest, transfer or send/receive between 9 cryptocurrencies, 23 traditional currencies and 4 precious metals. Our digital money app is slick, easy, and secure.',
				'keyword' => 'invest, investment, wallet, uphold, crypto',
				'url' => 'invest/wallet/uphold.html',
				'url-full' => 'invest/wallet/uphold.html'
			)
		)
	)
);

$encoder_invest = json_encode($trad_invest);

?>