<?php header('Content-Type: text/plain; charset=utf-8'); ?>
User-agent: *
Disallow: /themes/
Disallow: /libs/
Disallow: /configuration/
Disallow: /cache/
Allow: /

Sitemap: <?php echo $protocols.'://'.$domainTLD; ?>/sitemap.xml

<?php
/*

If you are using on production absolute deleted folder:
-apache
-nginx
-caddy

*/
?>