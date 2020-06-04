<?php header('Content-Type: text/html; charset=utf-8'); ?>
User-agent: *
Disallow: /themes/
Disallow: /libs/

Sitemap: <?php echo $protocols.'://'.$sites['domain']; ?>/sitemap.xml