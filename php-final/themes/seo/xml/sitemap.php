<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '<urlset
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
	xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>'.$protocols.'://'.$sites['domain'].'</loc>
		<changefreq>monthly</changefreq>
		<priority>0.80</priority>
	</url>
	<url>
		<loc>'.$protocols.'://'.$sites['domain'].'/'.$general['index']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
</urlset>'; ?>