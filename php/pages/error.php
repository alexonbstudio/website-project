
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
            <div class="col col-12 col-md-3">
                <p class="text-center">
				<a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>"><i class="fas fa-home fa-4x"></i></a>
				<?php echo $website['error']['contents']['col2']['line1']; ?>
			</p>
            </div>
            <div class="col col-12 col-md-8">
                <div class="story-content">
 <h4 class="text-center"><strong><?php echo $website['error']['contents']['col1']['line1']; ?></strong></h4>
			<p><?php echo $website['error']['contents']['col1']['line2']; ?></p>
			<ul class="list-group">
				<li class="list-group-item"><?php echo $website['error']['contents']['col1']['line3']; ?></li>
				<li class="list-group-item"><?php echo $website['error']['contents']['col1']['line4']; ?></li>
				<li class="list-group-item"><?php echo $website['error']['contents']['col1']['line5']; ?></li>
				<li class="list-group-item"><?php echo $website['error']['contents']['col1']['line6']; ?></li>
				<li class="list-group-item"><?php echo $website['error']['contents']['col1']['line7']; ?></li>
			</ul>
                </div>
            </div>
        </div>
    </div>
</section>