<?php 
$minifier->add($version['internal']['custom']['css']['langs']);
$minifier->add($version['internal']['custom']['css']['tpl']);
$minifier->minify('assets/combined/main.css');
#echo $minifier->minify();
?>



<?php ob_start("ob_html_compress"); ?>
<!doctype html>
<html lang="<?php echo $DefineTranslateLang; ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo htmlentities($sites['name']); ?> - Automate Minify (CSS)</title>
		<meta http-equiv="refresh" content="30; URL=<?php echo $protocols.'://'.$domainTLD; ?>" />
		<meta name="robots" content="noindex, nofollow">
		<link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
		<link href="<?php echo $version['external']['fontawesome']['css']; ?>" rel="stylesheet">
		<script defer src="<?php echo $version['external']['fontawesome']['js']; ?>"></script>
	</head>
	<body>
    <main role="main" class="container">
      <h1 class="mt-5">Automate Minify (CSS)</h1>
      <p class="lead">Hi guest, the automate minifies/compress CSS is done.<br> 
	  You will redirect on your home page in 30 secondes, thanks.</p>
      <p>Return on <a href="<?php echo $protocols.'://'.$domainTLD; ?>"><?php echo htmlentities($sites['name']); ?></a> </p>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright &copy; <a href="https://alexonbstudio.fr">AlexonbStudio</a> - Website Project WP <?php date(); ?></span>
      </div>
    </footer>
		<script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
		<script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>	
	</body>
</html>

<?php ob_end_flush(); ?>