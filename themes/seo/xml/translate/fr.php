

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['index']['url']['fr']; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>0.80</priority>
		<?php 
		if(!empty($general['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	POOL SERVICES		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['informatique']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['informatique']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['informatique']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['informatique']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['webmaster']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['webmaster']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['webmaster']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['webmaster']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['list']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['list']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['list']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['list']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['formation']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['formation']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['formation']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['formation']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['seo']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['seo']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['seo']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['seo']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['developper']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['developper']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['developper']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['developper']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['hacker']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['hacker']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['hacker']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['hacker']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['music']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['music']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['music']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['music']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['gaming']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['gaming']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['gaming']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['gaming']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['entrepreneur']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['entrepreneur']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['entrepreneur']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['entrepreneur']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['animal']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['animal']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['animal']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['animal']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['immo']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['immo']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['immo']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['immo']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['sport']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['sport']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['sport']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['sport']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['designer']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['designer']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['designer']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['designer']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['translator']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['translator']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['translator']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['translator']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['editor']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['editor']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['editor']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['editor']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['lawyer']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['lawyer']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['lawyer']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['lawyer']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['meet']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['meet']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['meet']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['meet']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['photo']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['photo']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['photo']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['photo']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pool['crypto']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pool['crypto']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pool['crypto']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pool['crypto']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	ABOUT		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$about['index']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($about['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$about['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$about['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	Tarif		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pricing['index']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pricing['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pricing['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pricing['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pricing['devis']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pricing['devis']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pricing['devis']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pricing['devis']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pricing['freelancer']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pricing['freelancer']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pricing['freelancer']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pricing['freelancer']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$pricing['base']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($pricing['base']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$pricing['base']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$pricing['base']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	CONTACT		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$email['index']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($email['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$email['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$email['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	CV		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['cv']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['cv']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['cv']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['cv']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	SHOP		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['shop']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['shop']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['shop']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['shop']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	SERVER		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['server']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['server']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['server']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['server']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	PROJECT		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['project']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['project']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['project']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['project']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	INVEST		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['invest']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['invest']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['invest']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['invest']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	DOWNLOAD		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['download']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['download']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['download']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['download']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	DONATION		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['donation']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['donation']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['donation']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['donation']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	STREAM		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['stream']['url']['default']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($general['stream']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$general['stream']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$general['stream']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	SPONSOR		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$sponsor['index']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($sponsor['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$sponsor['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$sponsor['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	PARTENAIRE		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$partner['index']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($partner['index']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$partner['index']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$partner['index']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<? #################################	REGLE		################################# ?>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['pages']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['pages']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['pages']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['pages']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['cgu']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['cgu']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['cgu']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['cgu']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['cgv']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['cgv']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['cgv']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['cgv']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['dmca']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['dmca']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['dmca']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['dmca']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['legal']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['legal']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['legal']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['legal']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['policy-privacy']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['policy-privacy']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['policy-privacy']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['policy-privacy']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
	<url>
		<loc><?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['rgpd']['url']['fr']; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
		<?php 
		if(!empty($law['rgpd']['sitemap']['images'])){
			echo '<image:image>
			<image:loc>'.$protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$law['rgpd']['sitemap']['images'].'</image:loc>
			<image:title><![CDATA['.$law['rgpd']['title'].']]></image:title>
		</image:image>';
		}
		?>
	</url>
</urlset>



























