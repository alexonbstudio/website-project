<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xhtml="http://www.w3.org/1999/xhtml" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$general['index']['url']['fr']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>0.80</priority>
		<?php 
		if(!empty($general['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$general['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['index']['title'].']]></image:title>
		</image:image>';
		}
		
		if(!empty($general['index']['sitemap']['video'])){
		echo '<video:video>
			<video:thumbnail_loc>'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$general['index']['sitemap']['images'].'</video:thumbnail_loc> 
			<video:title>'.$general['index']['title'].'</video:title>
			<video:description>'.$general['index']['description'].'</video:description>
			<video:player_loc allow_embed="yes" autoplay="ap=1">'.$protocols.'://'.$general['index']['sitemap']['video'].'</video:player_loc>
		</video:video>';
		?>
	</url>
	<? #################################	ABOUT		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$about['index']['url']['fr']; ?></loc>
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
	<? #################################	SPONSOR		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$sponsor['index']['url']['fr']; ?></loc>
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
	<? #################################	PARTENAIRE		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$partner['index']['url']['fr']; ?></loc>
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
	<? #################################	REGLE		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['pages']['url']['fr']; ?></loc>
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
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['cgu']['url']['fr']; ?></loc>
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
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['cgv']['url']['fr']; ?></loc>
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
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['dmca']['url']['fr']; ?></loc>
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
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['legal']['url']['fr']; ?></loc>
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
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['policy-privacy']['url']['fr']; ?></loc>
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
		<loc><?php echo $protocols.'://'.$domainTLD.'/'.$translate['manual']['frontend']['english'].'/'.$law['rgpd']['url']['fr']; ?></loc>
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