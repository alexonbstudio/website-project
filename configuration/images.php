<?php
# exemple $images['dir']
# exemple $images['manager']['logo']['normal']

$images = array(
	'manager' => array(
		/*Manager Images for Template */
		'logo' => array(
			'icon' => 'pinned/favicon.ico', /*ICO recommended oversize */
			'normal' => 'themes/logo-normal.png', /*size recommended ~60x60 */
			'small' => 'pinned/favicon-32x32.png', /*size recommended ~32x32 = favicon on PNG */
			'big' => 'themes/logo-big.png' /*size recommended ~200x200 */
		),
		/*Manager Images for SEO PINNED (Windows, Apple, Android/Safari, chrome) */
		'pinned' => array(
			's:70x70' => 'pinned/mstile-70x70.png',
			's:150x150' => 'pinned/mstile-150x150.png',
			's:310x310' => 'pinned/mstile-310x310.png',
			's:310x150' => 'pinned/mstile-310x150.png',
			's:192x192' => 'pinned/android-chrome-192x192.png',
			'safari' => 'pinned/safari-pinned-tab.svg',
			's:144x144' => 'pinned/mstile-144x144.png',
			's:180x180' => 'pinned/apple-touch-icon-180x180.png',
			's:32x32' => 'pinned/favicon-32x32.png',
			's:16x16' => 'pinned/favicon-16x16.png',
			's:57x57' => 'pinned/apple-touch-icon-57x57.png',
			's:60x60' => 'pinned/apple-touch-icon-60x60.png',
			's:72x72' => 'pinned/apple-touch-icon-72x72.png',
			's:76x76' => 'pinned/apple-touch-icon-76x76.png',
			's:114x114' => 'pinned/apple-touch-icon-114x114.png',
			's:120x120' => 'pinned/apple-touch-icon-120x120.png',
			's:152x152' => 'pinned/apple-touch-icon-152x152.png'
		),
		/*Manager Images */
		'category' => array(
			'hwc' => array(
				'hwv' => '*name*.jpg'
			)
			/*Custom your own*/
		)
	),
	'dir' => 'assets/images'
);

$JE_images = json_encode($images);

?>