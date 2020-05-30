
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(./assets/images/big-img.svg);">
    <div class="container">
        <div class="title-text">
            <h1><?php echo $title; ?></h1>
			<h2><?php echo $description; ?></h2>
            <ul class="title-menu clearfix" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['home']['url']; ?>"><span itemprop="name"><?php echo $website['full']['all']; ?></span></a>
					 <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo $url; ?>"><span itemprop="name"><?php echo $title; ?></span></a>
				<meta itemprop="position" content="2" />
				</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<section class="story">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="story-content">
				
			<h6>Hébergeur</h6>
			<p>
			<?php 
			echo 'Nom: '.$website['hoster']['name'].'<br />'; 
			echo 'SIRET '.$website['hoster']['siret'].'<br />'; 
			echo 'TVA intercommunautaire: '.$website['hoster']['tva'].'<br />'; 
			echo 'Code APE: '.$website['hoster']['code-ape'].'<br />'; 
			echo 'Adresse '.$website['hoster']['address'].'<br />'; 
			echo 'lien: '.$website['hoster']['siteweb'].'<br />';
			echo 'CDN: '.$website['hoster']['cdn-provider'];
			?>
			</p>
			<h6>Crédits</h6>
			<p>
			<?php 
			echo 'Designer: '.$website['credits']['designer'].'<br />'; 
			echo 'webdesigner: '.$website['credits']['webdesigner'].'<br />'; 
			echo 'developpeur: '.$website['credits']['developper'].'<br />'; 
			echo 'image: '.$website['credits']['images'].'<br />'; 
			echo 'tiers: '.$website['credits']['tiers'].'<br />'; 
			?>
			</p>
                </div>
            </div>
        </div>
    </div>
</section>