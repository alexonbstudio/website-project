<?php header('Content-Type: text/html; charset=utf-8'); ?>
User-agent: *
Disallow: /themes/
Disallow: /libs/
Disallow: /configuration/
Disallow: /cache/

Sitemap: <?php echo $protocols.'://'.$sites['domain']; ?>/sitemap.xml