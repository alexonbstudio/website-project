<?php
#generator sitemap default translate or index


require __DIR__.'/libs/php-sitemap-generator/src/SitemapGenerator.php';
use Icamys\SitemapGenerator\SitemapGenerator;

$domainTLD = 'alexonbstudio.fr';
$outputDir = getcwd();
$generator = new SitemapGenerator($domainTLD, $outputDir);
$generator->toggleGZipFileCreation();
$generator->setMaxURLsPerSitemap(50000);

// sitemap file name
$generator->setSitemapFileName("sitemap-index.xml");

# Preparing integrated on the sitemap
$generator->addURL('/index', new DateTime(), 'always', 0.5, null);
$generator->addURL('/exemple', new DateTime(), 'always', 1, null);



/*
Require Crontab for generate automate update sitemap
*/

#final Output & submit search engin

$generator->createSitemap();
$generator->writeSitemap();
$generator->submitSitemap();

?>