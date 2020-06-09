<?php
# exemple $images['']['']
$root_imgs = 'assets/images'; 
$images = array(
	'manager' => array(
		/*Manager Images for Template */
		'logo' => array(
			'icon' => $root_imgs.'pinned/logo.ico', /*ICO recommended oversize */
			'normal' => $root_imgs.'logo.png', /*size recommended ~60x60 */
			'small' => $root_imgs.'logo-small.png' /*size recommended ~32x32 = favicon on PNG */
			'big' => $root_imgs.'logo-big.png' /*size recommended ~200x200 */
		),
		/*Manager Images for Template (BACKGROUND) */
		'background' => array(
			'page1' => $root_imgs.'bg1.png',
			'page2' => $root_imgs.'bg2.png'
		),
		/*Manager Images for SEO PINNED (Windows, Apple, Android/Safari, chrome) */
		'pinned' => array(
			'size1' => $root_imgs.'pinned/logo.png',
			'size2' => $root_imgs.'pinned/logo-small.png'
		),
		/*Manager Images for SEO FAVICON */
		'pinned' => array(
			'size2' => $root_imgs.'pinned/logo-small.png' /*PNG recommended*/
		)
	),
	'dir' => $root_imgs
);

$JE_images = json_encode($images);

?>