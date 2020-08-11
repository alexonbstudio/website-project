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

$generator->createSitemap();
$generator->writeSitemap();
$generator->submitSitemap();

?>