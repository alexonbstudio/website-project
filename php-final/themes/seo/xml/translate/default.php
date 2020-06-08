<?php header('Content-type: application/xml; charset=utf-8'); ?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>0.80</priority>
		<?php 
		if(!empty($general['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$general['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	SPONSOR		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$sponsor['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($sponsor['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$sponsor['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$sponsor['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	PARTNER		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$partner['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($partner['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$partner['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$partner['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	LAW		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['pages']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['pages']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['pages']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['pages']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['cgu']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['cgu']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['cgu']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['cgu']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['cgv']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['cgv']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['cgv']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['cgv']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['dmca']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['dmca']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['dmca']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['dmca']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['legal']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['legal']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['legal']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['legal']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['policy-privacy']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['policy-privacy']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['policy-privacy']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['policy-privacy']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$law['rgpd']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['rgpd']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/assets/'.$law['rgpd']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['rgpd']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
</urlset>



























