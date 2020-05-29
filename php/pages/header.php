<?php ob_start("ob_html_compress"); ?>
<!doctype html>
<html class="no-js" lang="<?php echo $website['info']['langs']['files']; ?>">

<head>
<meta property="og:site_name" content="<?php echo $title; ?>">
<meta property="og:url" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$urls; ?>">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:image" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/images/logo-small.png">

 <meta content="<?php echo $website['info']['langs']['files']; ?>" property="og:locale"/>
 <meta content="103042234555592' property="og:admins"/>
 <meta content="215266456206074' property="og:app_id"/>
 <meta content="100000686899395' property="og:profile_id"/>
 <meta content="215266456206074' property="fb:app_id"/>
<meta content="103042234555592' property="fb:admins"/>
<meta content="100000686899395' property="fb:profile_id"/>
  <meta name="twitter:site" content="@alexonbstudio">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">

    <meta charset="utf-8">
	<script data-ad-client="ca-pub-2369775505625185" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $website['info']['site']['name'].' - '.$title; ?></title>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153512940-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-153512940-1');</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<meta name="format-detection" content="telephone=yes">
	<meta name="robots" content="noopd, noydir">
	<meta name="keywords" content="<?php echo $website['info']['site']['name'].', '.$keyword; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="icon" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/favicon.ico">
    
	<link rel="manifest" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/manifest.json">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/pinned/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="194x194" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/pinned/favicon-194x194.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/pinned/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/pinned/favicon-16x16.png">
	<link rel="mask-icon" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/pinned/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/images/pinned/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/images/logo-small.png">
    <!-- Place favicon.ico in the root directory -->
	<link href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/langs.min.css" rel="stylesheet" />
    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/magnific-popup.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-IIED/eyOkM6ihtOiQsX2zizxFBphgnv1zbe1bKA+njdFzkr6cDNy16jfIKWu4FNH" crossorigin="anonymous">
	<script defer src="https://pro.fontawesome.com/releases/v5.13.0/js/all.js" integrity="sha384-Z0e6PSokCQP510gixgZGPs+obVv8eogS/eS2+/7lLSMOfmLnWBgPQppPispQXGUM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/gijgo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/css/responsive.css"> -->
	<script data-ad-client="ca-pub-2369775505625185" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153512940-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153512940-1');
</script>
<!-- Begin 33Across RevCTRL InView -->
<script>
var Tynt=Tynt||[];Tynt.push('bH7bjsLN8r6Oo1aKkv7mNO');
Tynt.cmd=Tynt.cmd||[];Tynt.cmd.push(function(){
Tynt.ads.display('','','inview');});
(function(){var h,s=document.createElement('script');
s.src='https://cdn.tynt.com/rciv.js';
h=document.getElementsByTagName('script')[0];
h.parentNode.insertBefore(s,h);})();
</script>
<!-- End 33Across RevCTRL InView -->
<!-- Begin 33Across SiteCTRL -->
<script>
var Tynt=Tynt||[];Tynt.push('bH7bjsLN8r6Oo1aKkv7mNO');
(function(){var h,s=document.createElement('script');
s.src='https://cdn.tynt.com/ti.js';
h=document.getElementsByTagName('script')[0];
h.parentNode.insertBefore(s,h);})();
</script>
<!-- End 33Across SiteCTRL -->
<script type="text/javascript">
    var app_url = 'https://uiz.io/';
    var app_api_token = 'f9d285ef5ae2d3ba2a81e81c1a9fe833ca615e05';
    var app_advert = 1;
    var app_exclude_domains = ["*.alexonbstudio.fr"];
</script>
<script src='//uiz.io/js/full-page-script.js'></script>
<script src="https://www.dwin2.com/pub.510459.min.js"></script>
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
										<li itemprop="name">
											<a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url-full']; ?>"><?php echo $trad['pages']['index']['title']; ?></a>
										</li>
										<li itemprop="name">
											<a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['projet']['url-full']; ?>"><?php echo $trad['pages']['projet']['title']; ?></a>
										</li>
										<li itemprop="name">
											<a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['market']['url-full']; ?>"><?php echo $trad['default']['slide']['4']['title']; ?></a>
										</li>
										<li itemprop="name">
											<a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['invest']['url-full']; ?>"><?php echo $trad['pages']['invest']['title']; ?></a>
										</li>
										<li itemprop="name">
											<a itemprop="url" href="https://blog.alexonbstudio.fr">Blog</a>
										</li>
										<li itemprop="name">
											<a itemprop="url" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['contact']['url-full']; ?>"><?php echo $trad['pages']['contact']['title']; ?></a>
										</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url-full']; ?>">
                                    <img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/images/logo-small.png" alt="<?php echo $website['info']['site']['name']; ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
										<li>
											<a href="https://fb.me/alexonbstudio.fr">
												<i class="fab fa-facebook-f fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/alexonbstudio">
												<i class="fab fa-twitter fa-2x"></i> 
											</a>
										</li>
										<li>
											<a href="https://instagram.com/alexonbstudio">
												<i class="fab fa-instagram fa-2x"></i> 
											</a>
										</li>
										<li>
											<a href="http://blog.alexonbstudio.fr">
												<i class="fab fa-blogger-b fa-2x"></i> 
											</a>
										</li>
										<li>
											<a href="https://www.linkedin.com/in/alexonbalangue/">
												<i class="fab fa-linkedin-in fa-2x"></i> 
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCerEqBJT8YAgTWb9bCaNC4A">
												<i class="fab fa-youtube fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://twitch.com/alexonbstudio">
												<i class="fab fa-twitch fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://github.com/alexonbstudio">
												<i class="fab fa-github fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://discord.gg/yn2v7es">
												<i class="fab fa-discord fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://mixcloud.com/alexonbstudio">
												<i class="fab fa-mixcloud fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="http://fr.viadeo.com/fr/profile/alexon-balangue">
												<i class="fab fa-viadeo fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://www.dailymotion.com/alexonbstudio">
												<i class="fab fa-dailymotion fa-2x"></i>
											</a>
										</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

<?php /*echo $trad['copyright']['author']['right3'] */?>