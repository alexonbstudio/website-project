<?php ob_start("ob_html_compress"); ?>
<!doctype html>
<html lang="<?php echo $Languages_translate; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if(!empty($title)){ ?>
	<title><?php echo $sites['name'].' - '.$title; ?></title>
  <?php } else { ?>
	<title><?php echo $sites['name']; ?></title>
  <?php } ?>
  <?php if(!empty($description)){ ?><meta name="description" content="<?php echo $description; ?>"><?php } ?>
  <?php if(!empty($keyword)){ ?><meta name="keywords" content="<?php echo $keyword; ?>"><?php } ?>
  <meta name="author" content="<?php echo $sites['name']; ?>">
	<meta name="format-detection" content="telephone=yes">
	<meta name="robots" content="<?php echo $sites['head']['robots']; ?>">
	<meta name="googlebot" content="<?php echo $sites['head']['robots']; ?>, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta name="bingbot" content="<?php echo $sites['head']['robots']; ?>, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<?php if(!empty($images['manager']['logo']['icon'])){ ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['icon']; ?>">
	<?php } else { ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$sites['domain']; ?>/favicon.ico">
	<?php }?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['small']; ?>">
	<link rel="manifest" href="<?php echo $protocols.'://'.$sites['domain']; ?>/manifest.json">	

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['pinned']['s:180x180']; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['pinned']['s:32x32']; ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['pinned']['s:192x192']; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['pinned']['s:16x16']; ?>">

<link rel="mask-icon" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['pinned']['safari']; ?>" color="<?php echo $seo['browsers']['color']['safari']; ?>">
<meta name="apple-mobile-web-app-title" content="<?php echo $sites['name'].' - '.$title;?>">
<meta name="application-name" content="<?php echo $sites['name'];?>">
<meta name="msapplication-TileColor" content="<?php echo $seo['browsers']['color']['title']; ?>">
<meta name="msapplication-TileImage" content="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['pinned']['s:144x144']; ?>">
<meta name="theme-color" content="<?php echo $seo['browsers']['color']['themes']; ?>">



<!--HUMANS NOT ROBOTS-->
<link type="text/plain" rel="author" href="<?php echo $protocols.'://'.$sites['domain']; ?>/humans.txt" />


<!--Multi Language-->
<link rel="alternate" hreflang="x-default" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>" />
<link rel="alternate" hreflang="<?php echo $translate['manual']['frontend']['french']; ?>" href="<?php echo $protocols.'://'.$sites['domain'].'/'.__WP_FR_URL__; ?>" />
<link rel="alternate" hreflang="<?php echo $translate['manual']['frontend']['english']; ?>" href="<?php echo $protocols.'://'.$sites['domain'].'/'.__WP_EN_URL__; ?>" />


<!--SEO-->
<link rel="canonical" href="<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>" />

    <script type="application/ld+json">

<?php ##########	OWNER	########## ?>
[{
    "@context": "https://schema.org",
	"@type": "WebPage",
	"@id": "<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>#webpage",
	"url": "<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>",
	"name":"<?php echo $sites['name']; ?>",
	"description":"<?php echo $description; ?>",
    "headline": "<?php echo $title; ?>"<?php if(!empty($imgs)){ ?>,
	"inLanguage":"<?php echo $Languages_translate; ?>",
    "image": [
      "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$imgs; ?>"
     ],<?php } ?>
	 "isPartOf":{
		"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'; ?>#website"
	 },
	 "primaryImageOfPage":{
		"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>#primaryimage"
	 },
	 "breadcrumb":{
		"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>#breadcrumb"
	 },
	 ,
	"potentialAction":[
		{
			"@type":"ReadAction",
			"target":[
				"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>"
			]
		}
	]
	
},
{
	"@type":"WebSite",
	"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'; ?>#website",
	"url":"<?php echo $protocols.'://'.$sites['domain'].'/'; ?>",
	"name":"<?php echo $sites['name']; ?>",
	"description":"<?php echo $general['index']['description']; ?>",
	"inLanguage":"<?php echo $Languages_translate; ?>"
},
<?php ##########	Breadcrumb	########## ?>
{
	"@type":"BreadcrumbList",
	"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>#breadcrumb",
	"itemListElement":[
		{
			"@type":"ListItem",
			"position":1,
			"item":{
				"@type":"WebPage",
				"@id":"<?php echo $protocols.'://'.$sites['domain']; ?>",
				"url":"<?php echo $protocols.'://'.$sites['domain']; ?>",
				"name":"<?php echo $general['index']['title']; ?>"
			}
		},
		{
			"@type":"ListItem",
			"position":2,
			"item":{
				"@type":"WebPage",
				"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>",
				"url":"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>",
				"name":"<?php echo $title; ?>"
			}
		}
	]
},
{
	"@type":"ImageObject",
	"@id":"<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>#primaryimage",
	"inLanguage":"<?php echo $Languages_translate; ?>",
	"url":"<?php echo $protocols.'://'.$sites['domain'].'/'.$imgs; ?>",
	"width":718,
	"height":403,
	"caption":"<?php echo $title; ?>"
}<?php if(!empty($private['name'])){ ?>,
  {
  "@context": "http://schema.org/",
  "@type": "Person",
  "name": "<?php echo $private['name']; ?>",
  "telephone": "<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>",
  "url": "<?php echo $protocols.'://'.$sites['domain']; ?>",
  "sameAs":[
		<?php if(!empty($social['twitter']['name'])){ echo '"'.$social['twitter']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['facebook']['url'].'",'; } ?>
		<?php if(!empty($social['facebook']['name'])){ echo '"'.$social['instagram']['url'].'",'; } ?> 
		<?php if(!empty($social['linkedin']['name'])){ echo '"'.$social['linkedin']['url'].'",'; } ?>
		<?php if(!empty($social['youtube']['name'])){ echo '"'.$social['youtube']['url'].'",'; } ?>
		<?php if(!empty($social['twitch']['name'])){ echo '"'.$social['twitch']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['discord']['name'])){ echo '"'.$social['discord']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['name'])){ echo '"'.$social['viadeo']['url'].'",'; } ?>
		<?php if(!empty($social['mixcloud']['name'])){ echo '"'.$social['mixcloud']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['dailymotion']['url'].'",'; } ?>
		"<?php echo $private['name'];  ?>",
		"<?php echo $sites['name']; ?>"
	]
}<?php } ?>
<?php ##########	BUSINESS PAGE | You need Absolute CHANGE for Adapt your Business Local categories	########## ?>
<?php if(!empty($business['local']['name'])){ ?>,
{
	"@context": "https://schema.org",
	"@type": "Organization",
	"url": "<?php echo $protocols.'://'.$sites['domain']; ?>",
	"telephone": "<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>",
	"logo": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['normal']; ?>",
	"name": "<?php echo $business['local']['name']; ?>",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "<?php echo $business['local']['address']; ?>",
		"addressLocality": "<?php echo $business['local']['city']; ?>",
		<?php if(!empty($business['local']['region'])){ ?>"addressRegion": "<?php echo $business['local']['region'].','; ?>"<?php } ?>
		"postalCode": "<?php echo $business['local']['postal']; ?>",
		"addressCountry": "<?php echo $business['local']['contry']; ?>"
	},
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": <?php echo $business['local']['geo']['latitude']; ?>,
		"longitude": <?php echo $business['local']['geo']['longitude']; ?>
	},
	"sameAs":[
		<?php if(!empty($social['twitter']['name'])){ echo '"'.$social['twitter']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['facebook']['url'].'",'; } ?>
		<?php if(!empty($social['facebook']['name'])){ echo '"'.$social['instagram']['url'].'",'; } ?> 
		<?php if(!empty($social['linkedin']['name'])){ echo '"'.$social['linkedin']['url'].'",'; } ?>
		<?php if(!empty($social['youtube']['name'])){ echo '"'.$social['youtube']['url'].'",'; } ?>
		<?php if(!empty($social['twitch']['name'])){ echo '"'.$social['twitch']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['discord']['name'])){ echo '"'.$social['discord']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['name'])){ echo '"'.$social['viadeo']['url'].'",'; } ?>
		<?php if(!empty($social['mixcloud']['name'])){ echo '"'.$social['mixcloud']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['dailymotion']['url'].'",'; } ?>
		<?php if(!empty($private['name'])){ ?>"<?php echo $private['name'];  ?>",<?php } ?>
		"<?php echo $sites['name']; ?>"
	]
}<?php } ?>]

    </script>
	
	
<meta property="og:site_name" content="<?php echo $sites['name']; ?>">
<meta property="og:url" content="<?php echo $protocols.'://'.$sites['domain'].'/'.$urls; ?>">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:image" content="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['manager']['logo']['small']; ?>">

 <meta content="<?php echo $Languages_translate; ?>" property="og:locale"/>
<?php 
if(!empty($social['facebook']['admins'])){
	 echo '<meta content="'.$social['facebook']['admins'].'" property="og:admins"/>
	<meta content="'.$social['facebook']['admins'].'" property="fb:admins"/>';
}

if(!empty($social['facebook']['profile-id'])){
	 echo '<meta content="'.$social['facebook']['profile-id'].'" property="og:profile_id"/>
	<meta content="'.$social['facebook']['profile-id'].'" property="fb:profile_id"/>';
}

if(!empty($social['facebook']['app-id'])){
	 echo '<meta content="'.$social['facebook']['app-id'].'" property="og:app_id"/>
	 <meta content="'.$social['facebook']['app-id'].'" property="fb:app_id"/>';
}

if(!empty($social['twitter']['name'])){
	echo '<meta name="twitter:site" content="@'.$social['twitter']['name'].'">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="'.$title.'">
<meta name="twitter:description" content="'.$description.'">';
}

if(!empty($seo['google']['analystics'])){
	echo '<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id='.$seo['google']['analystics'].'"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag(\'js\', new Date());

		  gtag(\'config\', \''.$seo['google']['analystics'].'\');
		</script>';
}

if(!empty($seo['yandex']['analystics'])){
	echo '<!-- Yandex.Metrika counter --> 
	<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym('.$seo['yandex']['analystics'].', "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/'.$seo['yandex']['analystics'].'" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
	<!-- /Yandex.Metrika counter -->';
}

?>
<!--Marketing-->
<?php
if(!empty($marketing['33Across']['key'])){
	echo '<!-- Begin 33Across RevCTRL InView -->
		<script>
		var Tynt=Tynt||[];Tynt.push(\''.$marketing['33Across']['key'].'\');
		Tynt.cmd=Tynt.cmd||[];Tynt.cmd.push(function(){
		Tynt.ads.display(\'\',\'\',\'inview\');});
		(function(){var h,s=document.createElement(\'script\');
		s.src=\'https://cdn.tynt.com/rciv.js\';
		h=document.getElementsByTagName(\'script\')[0];
		h.parentNode.insertBefore(s,h);})();
		</script>
	<!-- End 33Across RevCTRL InView -->
	<!-- Begin 33Across SiteCTRL -->
		<script>
		var Tynt=Tynt||[];Tynt.push(\''.$marketing['33Across']['key'].'\');
		(function(){var h,s=document.createElement(\'script\');
		s.src=\'https://cdn.tynt.com/ti.js\';
		h=document.getElementsByTagName(\'script\')[0];
		h.parentNode.insertBefore(s,h);})();
		</script>
	<!-- End 33Across SiteCTRL -->';
}
if(!empty($marketing['awin']['key'])){
	echo '<script src="https://www.dwin2.com/pub.'.$marketing['awin']['key'].'.min.js"></script>';
}
if(!empty($marketing['uiz']['key'])){
	echo '<script type="text/javascript">
		var app_url = \'https://uiz.io/\';
		var app_api_token = \''.$marketing['uiz']['key'].'\';
		var app_advert = 1;
		var app_exclude_domains = ["*.'.$sites['domain'].'"];
	</script>
	<script src=\'//uiz.io/js/full-page-script.js\'></script>';
}
if(!empty($marketing['google']['adsense'])){
	echo '<script data-ad-client="ca-'.$marketing['google']['adsense'].'" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
}


?>

<?php if(!empty($seo['hcaptcha']['key'])){ ?><script src="https://hcaptcha.com/1/api.js?hl=<?php echo $Languages_translate; ?>" async defer></script><?php } ?>
<!--Template-->
  <link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $protocols.'://'.$sites['domain'].'/'.$version['internal']['fontawesome']['css']; ?>" rel="stylesheet">
  <script defer src="<?php echo $version['internal']['fontawesome']['js']; ?>"></script>
  <link href="<?php echo $version['internal']['production']['css']['knight']; ?>" rel="stylesheet">
  <link href="<?php echo $version['internal']['production']['css']['langs']; ?>" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $protocols.'://'.$sites['domain'].'/'.$version['internal']['icofont']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $protocols.'://'.$sites['domain'].'/'.$version['internal']['boxicons']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $version['external']['venobox']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $version['external']['owl.carousel']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $version['external']['aos']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $version['external']['intl-tel-input']['css']; ?>" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Knight - v2.0.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="<?php echo $protocols.'://'.$sites['domain']; ?>" class="hero-logo" data-aos="zoom-in"><img src="<?php echo $images['manager']['logo']['big']; ?>" alt="<?php echo $sites['name']; ?>"></a>
      <h1 data-aos="zoom-in"><?php echo $sites['name']; ?></h1>
      <h2 data-aos="fade-up"><?php echo $description; ?></h2>
      <a data-aos="fade-up" href="#main" class="btn-get-started scrollto"><?php echo $general['pages']['full']['starter']; ?></a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="<?php echo $protocols.'://'.$sites['domain']; ?>"><img src="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['small'];?>" alt="<?php echo $sites['name'];?>" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']['default']; ?>"><?php echo $general['index']['title']; ?></a></li>
          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#team">Team</a></li>

              <li class="drop-down"><a href="#">Deep Drop</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Translate</a>
                <ul>
                  <li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.__WP_FR_URL__; ?>">Français</a></li>
                  <li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.__WP_EN_URL__; ?>">English</a></li>
                  <li><a href="#">Español</a></li>
                  <li><a href="#">Deutsch</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#services">Services</a></li>

          <li class="nav-logo"><a href="<?php echo $protocols.'://'.$sites['domain']; ?>"><img src="<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['normal']; ?>" alt="<?php echo $sites['name']; ?>" class="img-fluid"></a></li>

          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$email['index']['url']['default']; ?>"><?php echo $email['index']['title']; ?></a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
