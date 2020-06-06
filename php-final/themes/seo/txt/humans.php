<?php header('Content-Type: text/html; charset=utf-8'); ?>
/* Private */
	name: <?php echo $sites['name']; ?>
	Contact: <?php echo $private['mail']['public']; ?> 
	Site: <?php echo $social['domain']; ?> 
	Twitter: @<?php echo $social['twitter']['name']; ?>
	Facebook: <?php echo $social['facebook']['name']; ?> 
	Instagram: <?php echo $social['instagram']['name']; ?> 
	Linkedin: <?php echo $social['linkedin']['name']; ?>

#/* TEAM */
#	function: 
#	Contact: 
#	Site: 
#	Twitter: @
#	Facebook: 
#	Linkedin: 
#	From: 
	

/* THANKS CONTRIBUTOR */
	
	Developper: <?php echo $credits['developper']['alexonbstudio']['name']; ?>
#	Designer: <?php echo $credits['designer']['alexonbstudio']['name']; ?>
	WebDesigner: <?php echo $credits['webdesigner']['startbootstrap']['name'].', '.$credits['webdesigner']['bootstrapmade']['name']; ?>
	Webmaster: <?php echo $credits['webmaster']['alexonbstudio']['name']; ?>
#	Photographer:  <?php echo $credits['photographer']['alexonbstudio']['name']; ?>
#	Images: <?php echo $credits['images']['alexonbstudio']['name']; ?>
#	Marketing: <?php echo $credits['marketing']['alexonbstudio']['name']; ?>
#	Video: <?php echo $credits['video']['alexonbstudio']['name']; ?>
	


/* SITE */
	Last update: 2020/06/07
	Language: French (fr-FR)
	Multi-Language: English (en-US/en-GB)
	Doctype: HTML5
	IDE Software: Notepad++
	Technologie: Bootstrap, Font-awesome, PHP, jQuery, JSON, Apache, nginx