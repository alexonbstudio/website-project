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

$generator->createSitemap();
$generator->writeSitemap();
$generator->submitSitemap();

?>