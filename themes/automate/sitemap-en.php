<?php



# Preparing integrated on the sitemap
$generator->addURL('/en/'.$general['index']['url']['en'], new DateTime(), 'monthly', 0.5, null);
$generator->addURL('/en/'.$about['index']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$email['index']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$sponsor['index']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$partner['index']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['pages']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['cgu']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['cgv']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['dmca']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['legal']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['policy-privacy']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['rgpd']['url']['en'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/en/'.$law['cookies']['url']['en'], new DateTime(), 'weekly', 1, null);

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
		<title><?php echo htmlentities($sites['name']); ?> - Automate Generator Sitemap (english)</title>
		<meta http-equiv="refresh" content="30; URL=<?php echo $protocols.'://'.$domainTLD; ?>" />
		<meta name="robots" content="noindex, nofollow">
		<link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
		<link href="<?php echo $version['external']['fontawesome']['css']; ?>" rel="stylesheet">
		<script defer src="<?php echo $version['external']['fontawesome']['js']; ?>"></script>
	</head>
	<body>
    <main role="main" class="container">
      <h1 class="mt-5">Automate Generator Sitemap (english)</h1>
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