<?php

# Preparing integrated on the sitemap
$generator->addURL('/fr/'.$general['index']['url']['fr'], new DateTime(), 'monthly', 0.5, null);
$generator->addURL('/fr/'.$about['index']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$email['index']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$sponsor['index']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$partner['index']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['pages']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['cgu']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['cgv']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['dmca']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['legal']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['policy-privacy']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['rgpd']['url']['fr'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/fr/'.$law['cookies']['url']['fr'], new DateTime(), 'weekly', 1, null);

$generator->createSitemap();
$generator->writeSitemap();
$generator->submitSitemap();

?>



<?php ob_start("ob_html_compress"); ?>
<!doctype html>
<html lang="<?php echo $DefineTranslateLang; ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo htmlentities($sites['name']); ?> - Automate Generator Sitemap (french)</title>
		<meta http-equiv="refresh" content="30; URL=<?php echo $protocols.'://'.$domainTLD; ?>" />
		<meta name="robots" content="noindex, nofollow">
		<link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
		<link href="<?php echo $version['external']['fontawesome']['css']; ?>" rel="stylesheet">
		<script defer src="<?php echo $version['external']['fontawesome']['js']; ?>"></script>
	</head>
	<body>
    <main role="main" class="container">
      <h1 class="mt-5">Automate Generator Sitemap (french)</h1>
      <p class="lead">Hi guest, the automate generator your sitemap is done.<br> 
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