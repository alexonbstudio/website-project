<?php ob_start("ob_html_compress"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $website['info']['site']['name'].' '.$title;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <base href="<?php echo $url; ?>" />
 <meta name="keywords" content="<?php echo $website['full']['keywords']; ?>" />
 <meta name="ZOOMWORDS" content="<?php echo $website['full']['keywords']; ?>" />
 <meta name="Category" content="<?php echo $website['full']['keywords']; ?>" />
 <meta name="classification" content="Type of business, company law" />
 <meta name="rights" content="(c) <?php echo date("Y").' '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="application-name" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="apple-mobile-web-app-title" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="msapplication-tooltip" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="DC.title" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="DC.title.alternative" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="og:title" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="og:site_name" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="wt.ti" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="ZOOMTITLE" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="shareaholic:site_name" content="<?php echo $website['info']['site']['name']; ?>" />
 <meta name="shareaholic:url" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="shareaholic:language" content="<?php echo $website['info']['langs']['seo']; ?>" />
 <meta name="DC.description" content="<?php echo $description; ?>" />
 <meta name="dcterms.description" content="<?php echo $description; ?>" />
 <meta name="EssayDirectory" content="<?php echo $description; ?>" />
 <meta name="fdse-description" content="<?php echo $description; ?>" />
 <meta name="abstract" content="<?php echo $description; ?>" />
 <meta name="collection" content="<?php echo $description; ?>" />
 <meta name="subject" content="<?php echo $description; ?>" />
 <meta name="wt.cg_n" content="<?php echo $description; ?>" />
 <meta name="ZOOMDESCRIPTION" content="<?php echo $description; ?>" />
 <meta name="FSPageDescription" content="<?php echo $description; ?>" />
 <meta name="DCS.dcsuri" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="DC.language" content="<?php echo $website['info']['langs']['seo']; ?>" />
 <meta name="dcterms.language" content="<?php echo $website['info']['langs']['seo']; ?>" />
 <meta name="msapplication-starturl" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/?pinned=true" />
 <meta name="msapplication-window" content="width=250;height=250" />
 <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
 <meta name="startIndex" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="DC.subject" content="" />
 <meta name="Revisit-After" content="10 days" />
 <meta name="Rating" content="general" />
 <meta name="rights-standard" content=";cc by-nd-sa" />
 <meta name="Distribution" content="global" />
 <meta name="Copyright" content="(c) <?php echo date("Y").' '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="DC.rights" content="(c) <?php echo date("Y").' '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="DC.dateCopyrighted" content="2018" />
 <meta name="dcterms.dateCopyrighted" content="2018" />
 <meta name="audience" content="all" />
 <meta name="ZOOMPAGEBOOST" content="5" />
 <meta name="FSLanguage" content="<?php echo $website['info']['langs']['seo']; ?>" />
 <meta name="Date-Creation-yyyymmdd" content="20140427" />
 <meta name="DC.created" content="2018" />
 <meta name="dcterms.created" content="2018" />
 <meta name="creation_date" content="2018" />
 <meta name="Date-Revision-yyyymmdd" content="20180430" />
 <meta name="DC.creator" content="alexonbalangue" />
 <meta name="creator" content="alexonbalangue.me" />
 <meta name="dcterms.creator" content="alexonbalangue.me" />
 <meta name="dcterms.rightsHolder" content="alexonbalangue.me" />
 <meta name="gwt:property" content="locale=<?php echo $website['info']['langs']['seo']; ?>" />
 <meta name="mobile-agent" content="format=html5; url=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="expires" content="never" />
 <meta name="robots" content="noopd, noydir" />
 <meta name="baiduspider" content="noopd, noydir" />
 <meta name="dse-robots" content="noopd, noydir" />
 <meta name="googlebot" content="noopd, noydir" />
 <meta name="googlebot-mobile" content="noopd, noydir" />
 <meta name="ia_archive" content="noopd, noydir" />
 <meta name="msnbot" content="noopd, noydir" />
 <meta name="slurp" content="noopd, noydir" />
 <meta name="teoma" content="noopd, noydir" />
 <meta name="format-print" content="A4" />
 <meta name="resolutions" content="2x, 4x, 8x" />
 <meta name="fdse-index-as" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="Identifier-URL" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="twitter:card" content="summary" />
 <meta name="twitter:widgets:theme" content="light" />
 <meta name="twitter:widgets:link-color" content="#0000ff" />
 <meta name="twitter:widgets:border-color" content="#000000" />
 <meta name="twitter:widgets:autoload" content="off" />
 <meta name="twitter:dnt" content="on" />
 <meta name="twitter:widgets:csp" content="on" />
 <meta name="twitter:description" content="<?php echo $description; ?>" />
 <meta name="twitter:image:src" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/logo.png" />
 <meta name="twitter:domain" content="<?php echo $website['info']['site']['default-url']; ?>" />
 <meta name="MSSmartTagsPreventParsing" content="true" />
 <meta name="MSThemeCompatible" content="yes" />
 <meta name="presdate" content="04-30-2018" />
 <meta name="host" content="<?php echo $website['info']['site']['default-url']; ?>" />
 <meta name="linkage" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" />
 <meta name="msapplication-tap-highlight" content="yes" />
 <meta name="DP.PopRank" content="2.00000" />
 <meta name="format-detection" content="telephone=yes" />
 <meta name="fragment" content="!" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <meta name="HandheldFriendly" content="true" />
 <meta name="apple-mobile-web-app-capable" content="YES" />
 <meta name="mobileoptimized" content="480" />
 <meta name="FSOnSitemap" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/sitemap.xml" />
 <meta name="msapplication-TileColor" content="#000000" />
 <meta name="msapplication-navbutton-color" content="#131d57" />

 <meta name="msapplication-square70x70logo" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/pinned/70x70.jpg" />
 <meta name="msapplication-square150x150logo" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/pinned/150x150.jpg" />
 <meta name="msapplication-TileImage" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/logo-2.jpg" />
 <meta name="msapplication-wide310x150logo" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/pinned/310x150.jpg" />
 <meta name="msapplication-square310x310logo" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/pinned/310x310.jpg" />

 <meta name="msapplication-notification" content="frequency=30;polling-uri=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/rss.xml&amp;amp;amp;id=1;polling-uri2=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/rss.xml&amp;amp;amp;id=2;polling-uri3=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/rss.xml&amp;amp;amp;id=3;polling-uri4=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/rss.xml&amp;amp;amp;id=4;polling-uri5=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/rss.xml&amp;amp;amp;id=5; cycle=1" />
 <meta name="msapplication-badge" content="frequency=30;polling-uri=<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/badge.xml" />
 <meta name="msapplication-config" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/badge.xml" />

 <meta name="description" content="<?php echo $description; ?>" />
 </script>
 <link href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/rss.xml" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
<!-- <link href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/atom.xml" rel="alternate" type="application/atom+xml" title="Atom 1.0" />-->

 <link rel="canonical" href="<?php echo $url; ?>">
 <meta property="og:title" content="<?php echo $website['info']['site']['name']; ?>">
 <meta property="og:type" content="website">
 <meta property="og:url" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>">
 <meta property="shareaholic:image" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/logo-2.png">
 <meta property="og:image" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/images/logo.png">
 <meta property="og:locale" content="<?php echo $website['info']['langs']['seo']; ?>">
 <meta property="og:description" content="<?php echo $description; ?>">
 <meta property="og:site_name" content="<?php echo $website['info']['site']['name']; ?>">
 <!--
 <meta property="og:admins" content="">
 <meta property="og:app_id" content="">
 <meta property="og:profile_id" content="">
 <meta property="fb:admins" content="">
 <meta property="fb:app_id" content="">
 //-->
 <link rel="search" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>">
 <link rel="image_src" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>">
  <!--<link rel="me" href="https://twitter.com/alexonbalangue">-->
 <link rel="meta" type="application/rdf+xml" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/dublincore.rdf">
 <link rel="profile" href="https://gmpg.org/xfn/11">
 <link rel="profile" href="https://dublincore.org/documents/2008/08/04/dc-html/">
 <link type="text/plain" rel="author" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/humans.txt">
 <!--<meta prefix="fb: http://ogp.me/ns/fb#" property="fb:app_id" content="">-->
 <link href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>" rel="apple-touch-startup-image">
 <link rel="sitemap" type="application/xml" title="<?php echo $website['info']['site']['name']; ?>" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/sitemap.xml">
 <!--<link rel="publisher" href="https://plus.google.com/+">-->
 <link rel="dns-prefetch" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>">
 <link rel="dns-prefetch" href="https://ajax.googleapis.com/">
 <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
 <link rel="dns-prefetch" href="https://use.fontawesome.com/">
 <link rel="prerender" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>">
	
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.min.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="./assets/style.min.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link href="./favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "legalName" : "<?php echo $website['info']['site']['name']; ?>",
  "description" : "<?php echo $website['home']['description']; ?>",
  "url" : "<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>",
  "contactPoint" : [{
    "@type" : "ContactPoint",
    "telephone" : "<?php echo $website['info']['site']['number']['url']; ?>",
    "contactType" : "customer service",
		"contactOption": "TollFree",
		"areaServed": "FR", 
		"availableLanguage": ["French"]
  }]
  "logo" : "<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/logo.png",  
	"openingHoursSpecification": [ { 
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
			"Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" 
		],
		"opens": "08:00",
		"closes": "20:00" 
	}],
}
</script>
</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6><?php echo $website['full']['top-open']; ?></h6>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>">
                              <img src="./assets/images/logo.png" alt="<?php echo $website['info']['site']['name']; ?>" width="280">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope"></i>
                              </div>
                              <strong><?php echo $website['full']['email']; ?></strong>
                              <br>
                              <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['contactez-nous']['url']; ?>">
                                    <span><?php echo $website['info']['site']['email-contact']; ?></span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong><?php echo $website['full']['call-now']; ?></strong>
                              <br>
                              <a href="tel:<?php echo $website['info']['site']['number']['url']; ?>"><span><?php echo $website['info']['site']['number']['text']; ?></span></a>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['demande-devis']['url']; ?>" class="btn-style-one"><?php echo $website['demande-devis']['title']; ?></a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                        aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['plombier']['url'];?>"><?php echo $website['plombier']['title'];?></a>
                        </li>
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['chauffagiste']['url'];?>"><?php echo $website['chauffagiste']['title'];?></a>
                        </li>
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['vitrier']['url'];?>"><?php echo $website['vitrier']['title'];?></a>
                        </li>
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['electricien']['url'];?>"><?php echo $website['electricien']['title'];?></a>
                        </li>
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['serrurier']['url'];?>"><?php echo $website['serrurier']['title'];?></a>
                        </li>
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['volet-roulant-et-store']['url'];?>"><?php echo $website['volet-roulant-et-store']['title'];?></a>
                        </li>
                        <li itemprop="name">
                              <a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['contactez-nous']['url'];?>"><?php echo $website['contactez-nous']['title'];?></a>
                        </li>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->