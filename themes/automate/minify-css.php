<?php 
$minifier->add($version['internal']['custom']['css']['langs']);
$minifier->add($version['internal']['custom']['css']['tpl']);

$minifier->minify('assets/combined/main.css');

echo $minifier->minify();
?>