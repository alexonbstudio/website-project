<?php header('Content-Type: text/html; charset=utf-8'); ?>
/* TEAM */
	function: <?php echo $offices['all']['siege-social']['status']; ?> 
	Contact: <?php echo $offices['all']['siege-social']['full-name']; ?>
	Site: <?php echo $website['info']['site']['default-url']; ?>
	Twitter: @<?php echo $offices['all']['siege-social']['web']['social']['twitter']; ?>
	Facebook: <?php echo $offices['all']['siege-social']['web']['social']['facebook']; ?>
	Linkedin: <?php echo $offices['all']['siege-social']['web']['pro']['linkedin']; ?>
	From: <?php echo $offices['all']['siege-social']['adresse'].' '.$offices['all']['siege-social']['adresse'].''.$offices['all']['siege-social']['code-postal'].' '.$offices['all']['siege-social']['villes'].' '.$offices['all']['siege-social']['pays']; ?>
	

/* THANKS CONTRIBUTOR */
	
	Developper: <?php echo $website['credits']['developper']; ?>
	Designer: <?php echo $website['credits']['designer']; ?>
	WebDesigner: <?php echo $website['credits']['webdesigner']; ?>


/* SITE */
	Last update: 2019/11/19
	Language: French (fr-FR)
	Multi-Language: English (en-US/en-GB)
	Doctype: HTML5
	IDE Software: Notepad++, wamp, gimp
	Technologie: Bootstrap, Font-awesome, PHP, jQuery, JSON, Apache