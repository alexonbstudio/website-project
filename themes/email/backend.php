
<?php /***************			WARNING ONLY EMAIL-CONTACT TEMPLATES // REPLY			***************/ ?>
<!doctype html>
<html lang="<?php echo $Languages_translate; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=yes">
	<meta name="robots" content="nofollow, noindex">
	<?php if(!empty($images['manager']['logo']['icon'])){ ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['icon']; ?>">
	<?php } else { ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$sites['domain']; ?>/favicon.ico">
	<?php } ?>

  <link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $protocols.'://'.$sites['domain'].'/'.$version['internal']['fontawesome']['css']; ?>" rel="stylesheet">
  <script defer src="<?php echo $protocols.'://'.$sites['domain'].'/'.$version['internal']['fontawesome']['js']; ?>"></script> 
</head>
<body>

	<header class="text-center">
		<a href="<?php echo $protocols.'://'.$sites['domain']; ?>"><img src="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['normal']; ?>" alt="<?php echo $sites['name']; ?>"></a>
	</header>

	<section>
		<?php 
		echo '<h2>'.$email['index']['title'].': '.$sites['domain'].'</h2>
		<h4>'.$email['index']['content']['subject'].' - '.$subject_email.'</h4> 
		<strong>'.$email['index']['content']['email'].':</strong> '.$email_email.'<br /><br />
		<strong>'.$email['index']['content']['name'].':</strong> '.$name_email.'<br /><br />
		<strong>'.$email['index']['content']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
		<strong>'.$email['index']['content']['message'].':</strong> '.$message_email;
		?>
	</section>
	
	<footer class="text-center">
		<p><?php echo $sites['copyright']['frontend'].' <a href="'.$protocols.'://'.$sites['domain'].'">'.$sites['name'].'</a> .'.$law['full']['content']['footer']; ?>
	  </p>
	</footer>


  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
  

</body>
</html>
<?php /***************			WARNING ONLY EMAIL-CONTACT TEMPLATES // REPLY			***************/ ?>