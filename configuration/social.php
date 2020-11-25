<?php
# exemple $social['pinterest']['name'];
$social_http_sites = isset($_SERVER["HTTPS"]) ? 'https' : 'http'; 

$social = array(
	'facebook' => array(
		'sites' => 'facebook',
		'name' => 'alexonbstudio.fr',
		'url' => $social_http_sites.'://fb.me/alexonbstudio.fr',
		'admins' => '103042234555592',
		'profile-id' => '100000686899395',
		'app-id' => '215266456206074'
	),
	'twitter' => array(
		'sites' => 'twitter',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://twitter.com/alexonbstudio'
	),
	'tiktok' => array(
		'sites' => 'tiktok',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://tiktok.com/@alexonbstudio'
	),
	'blogger' => array(
		'sites' => 'blogger',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://draft.blogger.com/profile/12116612549748477496'
	),
	'spotify' => array(
		'sites' => 'spotify',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://open.spotify.com/user/21cd2q2a2jbqpusnle6beyxwq?si=WhrDmqJSQISXuJ1Bi5jIDw'
	),
	'instagram' => array(
		'sites' => 'instagram',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://instagram.com/alexonbstudio'
	),
	'soundcloud' => array(
		'sites' => 'soundcloud',
		'name' => 'alexonbstudiofr',
		'url' => $social_http_sites.'://soundcloud.com/alexonbstudiofr'
	),
	'linkedin' => array(
		'sites' => 'linkedin',
		'name' => 'alexonbalangue',
		'url' => $social_http_sites.'://linkedin.com/alexonbalangue',
		'team' => array(
			'url' => $social_http_sites.'://linkedin.com/alexonbalangue'
		)
	),
	'youtube' => array(
		'sites' => 'youtube',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://www.youtube.com/channel/UCerEqBJT8YAgTWb9bCaNC4A'
	),
	'twitch' => array(
		'sites' => 'twitch',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://twitch.com/alexonbstudio'
	),
	'github' => array(
		'sites' => 'github',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://github.com/alexonbstudio',
		'sponsor' => $social_http_sites.'://github.com/sponsors/alexonbstudio'
	),
	'discord' => array(
		'sites' => 'discord',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://discord.gg/yn2v7es'
	),
	'viadeo' => array(
		'sites' => 'viadeo',
		'name' => 'alexon balangue',
		'url' => $social_http_sites.'://viadeo.journaldunet.com/p/alexon-balangue-1976544',
		'team' => array(
			'url' => $social_http_sites.'://viadeo.journaldunet.com/p/alexon-balangue-1976544'
		)
	),
	'mixcloud' => array(
		'sites' => 'mixcloud',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://mixcloud.com/alexonbstudio'
	),
	'dailymotion' => array(
		'sites' => 'dailymotion',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://www.dailymotion.com/alexonbstudio'
	),
	'pinterest' => array(
		'sites' => 'pinterest',
		'name' => 'alexonbstudiofr',
		'url' => $social_http_sites.'://pinterest.com/alexonbstudiofr'
	),
	'redbubble' => array(
		'sites' => 'redbubble',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://alexonbstudio.redbubble.com'
	),
	'spreadshirt' => array(
		'sites' => 'spreadshirt',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://shop.spreadshirt.co.uk/alexonbstudio'
	),
	'teespring' => array(
		'sites' => 'teespring',
		'name' => 'alexonbstudiofr',
		'url' => $social_http_sites.'://teespring.com/stores/alexonbstudiofr'
	),
	'shop' => array(
		'sites' => 'shop',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://shop.alexonbstudio.fr'
	),
	'coinbase' => array(
		'sites' => 'coinbase',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://commerce.coinbase.com/checkout/129a7ffa-2284-4b98-b869-5e1b667840f5'
	),
	'patreon' => array(
		'sites' => 'patreon',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://www.patreon.com/alexonbstudio'
	),
	'paypal' => array(
		'sites' => 'paypal',
		'name' => 'alexonbalangue',
		'url' => $social_http_sites.'://paypal.me/alexonbalangue'
	),
	'tipeee' => array(
		'sites' => 'tipeee',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://fr.tipeee.com/alexonbstudio'
	),
	'utip' => array(
		'sites' => 'utip',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://utip.io/alexonbstudio'
	),
	'omlet-arcade' => array(
		'sites' => 'omlet arcade',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://omlet.gg/profile/alexonbstudio'
	),
	'streamlabs' => array(
		'sites' => 'streamlabs',
		'name' => 'alexonbstudio1',
		'url' => $social_http_sites.'://streamlabs.com/alexonbstudio1'
	),
	'twitch' => array(
		'sites' => 'twitch',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://twitch.com/alexonbstudio'
	),
	'bigo' => array(
		'sites' => 'bigo',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://bigo.tv/alexonbstudio'
	),
	'slack' => array(
		'sites' => 'slack',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://alexonbstudio.slack.com'
	),
	'telegram' => array(
		'sites' => 'telegram',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://t.me/alexonbstudioworld'
	),
	'snapchat' => array(
		'sites' => 'snapchat',
		'name' => 'alexonbstudio',
		'url' => $social_http_sites.'://snapchat.com/alexonbstudio'
	)
);

$JE_social = json_encode($social);
?>