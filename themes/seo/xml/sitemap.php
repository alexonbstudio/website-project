<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<sitemap>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/sitemap-index.xml'; ?></loc>
		<lastmod><?php echo $sites['update']['xml']['date'].'T'.$sites['update']['xml']['time'];?>+00:00</lastmod>
	</sitemap>
	<sitemap>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/sitemap-'.$translate['manual']['frontend']['french'].'.xml'; ?></loc>
		<lastmod><?php echo $sites['update']['xml']['date'].'T'.$sites['update']['xml']['time'];?>+00:00</lastmod>
	</sitemap>
	<sitemap>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/sitemap-'.$translate['manual']['frontend']['english'].'.xml'; ?></loc>
		<lastmod><?php echo $sites['update']['xml']['date'].'T'.$sites['update']['xml']['time'];?>+00:00</lastmod>
	</sitemap>
</sitemapindex>