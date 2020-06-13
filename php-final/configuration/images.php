<?php
# exemple $images['dir']
# exemple $images['manager']['pinned']['s:']
$root_imgs = 'assets/images'; 
#$cdn_imgs = 'HTTP'; # your own links 
$images = array(
	'manager' => array(
		/*Manager Images for Template */
		'logo' => array(
			'icon' => $root_imgs.'pinned/favicon.ico', /*ICO recommended oversize */
			'normal' => $root_imgs.'themes/logo-normal.png', /*size recommended ~60x60 */
			'small' => $root_imgs.'pinned/favicon-32x32.png', /*size recommended ~32x32 = favicon on PNG */
			'big' => $root_imgs.'themes/logo-big.png' /*size recommended ~200x200 */
		),
		/*Manager Images for SEO PINNED (Windows, Apple, Android/Safari, chrome) */
		'pinned' => array(
			'S:70x70' => $root_imgs.'pinned/mstile-70x70.png',
			'S:150x150' => $root_imgs.'pinned/mstile-150x150.png',
			'S:310x310' => $root_imgs.'pinned/mstile-310x310.png',
			'S:310x150' => $root_imgs.'pinned/mstile-310x150.png',
			'S:192x192' => $root_imgs.'pinned/android-chrome-192x192.png',
			'safari' => $root_imgs.'pinned/safari-pinned-tab.svg',
			'S:144x144' => $root_imgs.'pinned/mstile-144x144.png',
			'S:180x180' => $root_imgs.'pinned/apple-touch-icon-180x180.png',
			'S:32x32' => $root_imgs.'pinned/favicon-32x32.png',
			'S:16x16' => $root_imgs.'pinned/favicon-16x16.png',
			'S:57x57' => $root_imgs.'pinned/apple-touch-icon-57x57.png',
			'S:60x60' => $root_imgs.'pinned/apple-touch-icon-60x60.png',
			'S:72x72' => $root_imgs.'pinned/apple-touch-icon-72x72.png',
			'S:76x76' => $root_imgs.'pinned/apple-touch-icon-76x76.png',
			'S:114x114' => $root_imgs.'pinned/apple-touch-icon-114x114.png',
			'S:120x120' => $root_imgs.'pinned/apple-touch-icon-120x120.png',
			'S:152x152' => $root_imgs.'pinned/apple-touch-icon-152x152.png'
		),
		/*Manager Images */
		'category' => array(
			'hwc' => array(
				'hwv' => $root_imgs.'/*name*.jpg'
			)
			/*Custom your own*/
		)
	),
	'dir' => $root_imgs
);

$JE_images = json_encode($images);

?>