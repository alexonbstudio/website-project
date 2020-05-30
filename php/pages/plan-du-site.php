
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
                              <ul class="menu-link">
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['home']['url']; ?>"><?php echo $website['full']['all']; ?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['plombier']['url'];?>"><?php echo $website['plombier']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['chauffagiste']['url'];?>"><?php echo $website['chauffagiste']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['vitrier']['url'];?>"><?php echo $website['vitrier']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['electricien']['url'];?>"><?php echo $website['electricien']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['serrurier']['url'];?>"><?php echo $website['serrurier']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['volet-roulant-et-store']['url'];?>"><?php echo $website['volet-roulant-et-store']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['demande-devis']['url'];?>"><?php echo $website['demande-devis']['title'];?></a>
			</li>
			<li>
				  <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['contactez-nous']['url'];?>"><?php echo $website['contactez-nous']['title'];?></a>
			</li>
          </ul>
                </div>
            </div>
        </div>
    </div>
</section>