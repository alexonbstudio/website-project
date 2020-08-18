
<?php if(!empty($private['name'])){ ?>
/* OWNER */
	<?php if(!empty($private['name'])){ ?>name: <?php echo $private['name']; } ?>
	<?php if(!empty($sites['domain'])){ ?>Site: <?php echo $sites['domain']; } ?>
	<?php if(!empty($social['twitter']['name'])){ ?>Twitter: @<?php echo $social['twitter']['name']; } ?>
	<?php if(!empty($social['dailymotion']['name'])){ ?>Facebook: <?php echo $social['facebook']['name']; } ?>
	<?php if(!empty($social['facebook']['name'])){ ?>Instagram: <?php echo $social['instagram']['name']; } ?> 
	<?php if(!empty($social['linkedin']['name'])){ ?>Linkedin: <?php echo $social['linkedin']['name']; } ?>
	<?php if(!empty($social['youtube']['name'])){ ?>Youtube: <?php echo $social['youtube']['name']; } ?>
	<?php if(!empty($social['twitch']['name'])){ ?>Twitch: <?php echo $social['twitch']['name']; } ?>
	<?php if(!empty($social['github']['name'])){ ?>Github: <?php echo $social['github']['name']; } ?>
	<?php if(!empty($social['discord']['name'])){ ?>Discord: <?php echo $social['discord']['name']; } ?>
	<?php if(!empty($social['viadeo']['name'])){ ?>Viadeo: <?php echo $social['viadeo']['name']; } ?>
	<?php if(!empty($social['mixcloud']['name'])){ ?>Mixcloud: <?php echo $social['mixcloud']['name']; } ?>
	<?php if(!empty($social['dailymotion']['name'])){ ?>Dailymotion: <?php echo $social['dailymotion']['name']; } ?>

<?php } ?>
<?php if(!empty($business['local']['name'])){ ?>
/* TEAM */
	compagny: <?php echo $business['local']['name']; ?><?php if(!empty($business['local']['status'])){ echo ' - '.$business['local']['status']; } ?>
	<?php if(!empty($business['local']['tva'])){ ?>TVA: <?php echo $business['local']['tva']; } ?>
	<?php if(!empty($business['local']['vat'])){ ?>VAT: <?php echo $business['local']['vat']; } ?>
	<?php if(!empty($business['local']['siret'])){ ?>SIRET: <?php echo $business['local']['siret']; } ?>
	Contact: <?php echo $business['local']['mail']['business']; ?>
	Site: <?php echo $sites['domain']; ?> 
	<?php if(!empty($social['twitter']['name'])){ ?>Twitter: @<?php echo $social['twitter']['name']; } ?>
	<?php if(!empty($social['dailymotion']['name'])){ ?>Facebook: <?php echo $social['facebook']['name']; } ?>
	<?php if(!empty($social['facebook']['name'])){ ?>Instagram: <?php echo $social['instagram']['name']; } ?> 
	<?php if(!empty($social['linkedin']['name'])){ ?>Linkedin: <?php echo $social['linkedin']['name']; } ?>
	<?php if(!empty($social['youtube']['name'])){ ?>Youtube: <?php echo $social['youtube']['name']; } ?>
	<?php if(!empty($social['twitch']['name'])){ ?>Twitch: <?php echo $social['twitch']['name']; } ?>
	<?php if(!empty($social['github']['name'])){ ?>Github: <?php echo $social['github']['name']; } ?>
	<?php if(!empty($social['discord']['name'])){ ?>Discord: <?php echo $social['discord']['name']; } ?>
	<?php if(!empty($social['viadeo']['name'])){ ?>Viadeo: <?php echo $social['viadeo']['name']; } ?>
	<?php if(!empty($social['mixcloud']['name'])){ ?>Mixcloud: <?php echo $social['mixcloud']['name']; } ?>
	<?php if(!empty($social['dailymotion']['name'])){ ?>Dailymotion: <?php echo $social['dailymotion']['name']; } ?>
	From: <?php echo $business['local']['name'].' '.$business['local']['address'].' '.$business['local']['postal'].' '.$business['local']['city'].' '.$business['local']['contry']; ?>

<?php } ?>

	

/* THANKS CONTRIBUTOR */
	
	Developper: <?php echo $credits['developper']['alexonbstudio']['name'].', '.$credits['developper']['PHPMailer']['name'].', '.$credits['developper']['joomla']['name'].', '.$credits['developper']['icamys']['name'].', '.$credits['developper']['giggsey']['name'].', '.$credits['developper']['google']['name']; ?>
	
	WebDesigner: <?php echo $credits['webdesigner']['startbootstrap']['name'].', '.$credits['webdesigner']['bootstrapmade']['name']; ?>
	
	Webmaster: <?php echo $credits['webmaster']['alexonbstudio']['name']; ?>
	
	Designer: <?php echo $credits['designer']['alexonbstudio']['name']; ?>
	
	Images: <?php 
		echo $credits['images']['alexonbstudio']['name'].', '.
		$credits['images']['pexels']['name'].', '.
		$credits['images']['unsplash']['name'].', '.
		$credits['images']['pixabay']['name'].', '.
		$credits['images']['wikimedia']['name']; 
		
	?>
	Marketing: <?php echo $credits['marketing']['alexonbstudio']['name']; ?>
	
	Video: <?php 
		echo $credits['video']['alexonbstudio']['name'].', '.
		$credits['images']['pexels']['name'].', '.
		$credits['images']['pixabay']['name']; 
	
	?>
	


/* SITE */
	Last update: <?php echo $credits['version']['date']; ?>
	Language: <?php echo $translate['manual']['frontend']['french']; ?>
	Multi-Language: <?php echo $translate['manual']['backend']['english'].', '.$translate['manual']['backend']['french']; ?>
	Doctype: HTML5
	IDE Software: Notepad++
	Technologie: Bootstrap, Fontawesome, PHP, jQuery, Txt, Xml, JSON, Apache, nginx, caddy, html, css
	Copyright &copy; AlexonbStudio (Website Project = WP) - Alexon Balangue - CC-BY-SA
	Licenses: GPL v3.0
	Version: <?php echo $credits['version']['stable'].' '.$credits['version']['actual']; ?>