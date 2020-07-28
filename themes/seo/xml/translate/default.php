<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$general['index']['url']['default']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>0.80</priority>
		<?php 
		if(!empty($general['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$general['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	ABOUT		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$about['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($about['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$about['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$about['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	CONTACT		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$email['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($email['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$email['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$email['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	SPONSOR		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$sponsor['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($sponsor['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$sponsor['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$sponsor['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	PARTNER		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$partner['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($partner['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$partner['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$partner['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	LAW		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['pages']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['pages']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['pages']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['pages']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['cgu']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['cgu']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['cgu']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['cgu']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['cgv']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['cgv']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['cgv']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['cgv']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['dmca']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['dmca']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['dmca']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['dmca']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['legal']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['legal']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['legal']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['legal']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['policy-privacy']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['policy-privacy']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['policy-privacy']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['policy-privacy']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$law['rgpd']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['rgpd']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$law['rgpd']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['rgpd']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
</urlset>