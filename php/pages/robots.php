<?php header('Content-Type: text/html; charset=utf-8'); ?>
User-agent: *
Disallow: /assets/
Disallow: /inc/
Disallow: /blocker/
Disallow: /langs/
Disallow: /pages/

Sitemap: <?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/sitemap.xml