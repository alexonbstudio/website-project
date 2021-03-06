<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php /***************			WARNING ONLY EMAIL-CONTACT TEMPLATES // REPLY			***************/ ?>
<!doctype html>
<html lang="<?php echo $DefineTranslateLang; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=yes">
	<meta name="robots" content="nofollow, noindex">
	<?php if(!empty($images['manager']['logo']['icon'])){ ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['icon']; ?>">
	<?php } else { ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$domainTLD; ?>/favicon.ico">
	<?php } ?>

  <link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $protocols.'://'.$domainTLD.'/'.$version['internal']['fontawesome']['css']; ?>" rel="stylesheet">
  <script defer src="<?php echo $protocols.'://'.$domainTLD.'/'.$version['internal']['fontawesome']['js']; ?>"></script> 
</head>
<body>

	<header class="text-center">
		<a href="<?php echo $protocols.'://'.$domainTLD; ?>"><img src="<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['big']; ?>" alt="<?php echo $sites['name']; ?>"></a>
	</header>

	<section>
		<?php 
		echo '<h2>'.$email['index']['title'].': '.$domainTLD.'</h2>
		<h4>'.$email['index']['content']['subject'].' - {subject}</h4> 
		<strong>'.$email['index']['content']['email'].':</strong> {email}<br />
		<strong>'.$email['index']['content']['name'].':</strong> {name}<br />
		<strong>'.$email['index']['content']['phone'].':</strong> {phone}<br />
		<strong>'.$email['index']['content']['message'].':</strong> {message}';
		?>
	</section>
	
	<footer class="text-center">
		<p><?php echo $sites['copyright']['frontend'].' <a href="'.$protocols.'://'.$domainTLD.'">'.$sites['name'].'</a> .'.$law['full']['content']['footer']; ?>
	  </p>
	</footer>


  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
  

</body>
</html>
<?php /***************			WARNING ONLY EMAIL-CONTACT TEMPLATES // REPLY			***************/ ?>