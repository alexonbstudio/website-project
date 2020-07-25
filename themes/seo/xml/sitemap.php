<?php header('Content-type: application/xml; charset=utf-8'); ?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<sitemap>
		<loc><?php echo $protocols.'://'.$domainTLD.'/sitemap-index.xml'; ?></loc>
		<lastmod><?php echo date('Y-d-m').'T'.time();?>+00:00</lastmod>
	</sitemap>
	<sitemap>
		<loc><?php echo $protocols.'://'.$domainTLD.'/sitemap-'.$translate['manual']['frontend']['french'].'.xml'; ?></loc>
		<lastmod><?php echo date('Y-d-m').'T'.time();?>+00:00</lastmod>
	</sitemap>
	<sitemap>
		<loc><?php echo $protocols.'://'.$domainTLD.'/sitemap-'.$translate['manual']['frontend']['english'].'.xml'; ?></loc>
		<lastmod><?php echo date('Y-d-m').'T'.time();?>+00:00</lastmod>
	</sitemap>
</sitemapindex>