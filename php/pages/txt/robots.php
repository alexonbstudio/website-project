<?php header('Content-Type: text/plain; charset=utf-8'); ?>
User-agent: *<?php echo "\n"; ?>
Disallow: /inc/<?php echo "\n"; ?>
Disallow: /tpl/<?php echo "\n"; ?>
Disallow: /pages/<?php echo "\n"; ?>
Allow: /<?php echo "\n"; ?>
<?php echo "\n"; ?><?php echo "\n"; ?>
sitemap: <?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/sitemap.xml
