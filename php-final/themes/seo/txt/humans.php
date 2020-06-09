<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php if(!empty($private['name'])){ ?>
/* OWNER */
	name: <?php echo $private['name']; ?>
	Contact: <?php echo $private['mail']['public']; ?> 
	Site: <?php echo $sites['domain']; ?> 
	Twitter: @<?php echo $social['twitter']['name']; ?>
	Facebook: <?php echo $social['facebook']['name']; ?> 
	Instagram: <?php echo $social['instagram']['name']; ?> 
	Linkedin: <?php echo $social['linkedin']['name']; ?>
	From: <?php echo $private['local']['name'].' '.$private['local']['address'].' '.$private['local']['postal'].' '.$business['local']['city'].' '.$private['local']['contry']; ?>
<?php } ?>
<?php if(!empty($business['local']['name'])){ ?>
/* TEAM */
	compagny: <?php echo $business['local']['name']; ?>
	TVA: <?php echo $business['local']['tva']; ?>
	VAT: <?php echo $business['local']['vat']; ?>
	SIRET: <?php echo $business['local']['siret']; ?>
	Contact: <?php echo $business['local']['mail']['contact']; ?>
	Site: <?php echo $sites['domain']; ?> 
	Twitter: @<?php echo $social['twitter']['name']; ?>
	Facebook: <?php echo $social['facebook']['name']; ?> 
	Instagram: <?php echo $social['instagram']['name']; ?> 
	Linkedin: <?php echo $social['linkedin']['name']; ?>
	From: <?php echo $business['local']['name'].' '.$business['local']['address'].' '.$business['local']['postal'].' '.$business['local']['city'].' '.$business['local']['contry']; ?>
<?php } ?>

	

/* THANKS CONTRIBUTOR */
	
	Developper: <?php echo $credits['developper']['alexonbstudio']['name'].', '.$credits['developper']['PHPMailer']['name']; ?>
	WebDesigner: <?php echo $credits['webdesigner']['startbootstrap']['name'].', '.$credits['webdesigner']['bootstrapmade']['name']; ?>
	Webmaster: <?php echo $credits['webmaster']['alexonbstudio']['name']; ?>
	
#	Designer: <?php echo $credits['designer']['alexonbstudio']['name']; ?>
#	Photographer:  <?php echo $credits['photographer']['alexonbstudio']['name']; ?>
#	Images: <?php echo $credits['images']['alexonbstudio']['name']; ?>
#	Marketing: <?php echo $credits['marketing']['alexonbstudio']['name']; ?>
#	Video: <?php echo $credits['video']['alexonbstudio']['name']; ?>
	


/* SITE */
	Last update: <?php echo $credits['version']['date']; ?>
	Language: <?php echo $translate['manual']['frontend']['french']; ?>
	Multi-Language: <?php echo $translate['manual']['frontend']['english']; ?>
	Doctype: HTML5
	IDE Software: Notepad++
	Technologie: Bootstrap, Fontawesome, PHP, jQuery, Txt, Xml, JSON, Apache, nginx
	Copyright &copy; AlexonbStudio (Website Project) - Alexon Balangue
	Licences: CC-BY-SA
	Version: <?php echo $credits['version']['beta'].' '.$credits['version']['actual']; ?>