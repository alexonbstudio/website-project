<?php

header('Content-Type: image/png');
// Charge le cachet et la photo afin d'y appliquer le tatouage numérique
$im = imagecreatefrompng('assets/stop.png');

// Tout d'abord, nous créons un cachet manuellement grâce à GD
$stamp = imagecreatetruecolor(200, 39);
$string = $_GET['copyright'];
imagefilledrectangle($stamp, 0, 0, 0, 0, 0xFFFFFF);
imagefilledrectangle($stamp, 0, 0, 0, 0, 0xFFFFFF);
$im = imagecreatefrompng('assets/stop.png');
$px     = (imagesx($im) - 5.5 * strlen($string)) / 2;

imagestring($im, 2, $px, 6, $string, 0xFFFFFF);
imagestring($stamp, 2, 10, 0, $trad['blocker']['image']['title'], 0xFFFFFF);
imagestring($stamp, 2, 10, 10, $trad['pages']['image']['description'], 0xFFFFFF);
imagestring($stamp, 2, 10, 20, $_SERVER['SERVER_NAME'], 0xFFFFFF);

// Définit les marges du cachet et récupère la largeur et la hauteur du cachet
$marge_right = 57;
$marge_bottom = 39;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Fusionne le cachet dans notre photo avec une opacité de 70%
imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 100);

// Sauvegarde l'image dans un fichier et libère la mémoire
imagepng($im);
imagedestroy($im);

?>