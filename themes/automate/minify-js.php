<?php 
$minifier->add($version['internal']['custom']['js']['tpl']);

$minifier->minify('assets/combined/main.js');

echo $minifier->minify();
?>