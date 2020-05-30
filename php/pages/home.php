
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

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa fa-phone"></i>
                        <h2><?php echo $website['full']['call-now']; ?></h2>
                        <a href="tel:<?php echo $website['info']['site']['number']['url']; ?>"><span><?php echo $website['info']['site']['number']['text']; ?></span></a>
                        <p></p>
                    </div>
                    <div class="top-doctor item">
                        <i class="fa fa-clock"></i>
                        <h2><?php echo $website['full']['top']['text-4']; ?></h2>
                        <p><?php echo $website['full']['top-msg']; ?></p>
                    </div>
                    <div class="working-time item">
                        <i class="fa fa-hourglass"></i>
                        <h2><?php echo $website['full']['top']['text-5']; ?></h2>
                        <ul class="w-hours">
                            <li><?php echo $website['full']['contens']['text-4']; ?></li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>title </h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="item">
								<div class="icon-box text-center">
									<figure>
										<i class="fa fa-smile fa-4x"></i>
									</figure>
								</div>
								<h6 class="text-center"><?php echo $website['full']['top']['text-1']; ?></h6>
								<p><?php echo $website['full']['contents']['text-1']; ?></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item">
								<div class="icon-box text-center">
									<figure>
										<i class="fa fa-street-view fa-4x"></i>
									</figure>
								</div>
								<h6 class="text-center"><?php echo $website['full']['top']['text-2']; ?></h6>
								<p><?php echo $website['full']['contents']['text-2']; ?></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item">
								<div class="icon-box text-center">
									<figure>
										<i class="fa fa-clipboard-check  fa-4x"></i>
									</figure>
								</div>
								<h6 class="text-center"><?php echo $website['full']['top']['text-3']; ?></h6>
								<p><?php echo $website['full']['contents']['text-3']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start about us area-->
<section class="service-tab-section section">
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				
				</div>
				<div class="clearfix"></div>
                
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#title1"  data-toggle="tab">title1</a>
                            </li>
                            <li role="presentation">
                                <a href="#title2" data-toggle="tab">title2</a>
                            </li>
                            <li role="presentation">
                                <a href="#title3" data-toggle="tab">title3</a>
                            </li>
                        </ul>
                    </div>
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="title1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="./assets/images/small-img.svg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>title</h3>
                                    </div>
                                    <div class="text">
                                         
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="title2">
                            <div class="col-md-3">
                                <img class="img-responsive" src="./assets/images/small-img.svg" alt=" ">
                            </div>
                            <div class="col-md-9">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>title</h3>
                                    </div>
                                    <div class="text">
                                         
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="title3">
                            <div class="col-md-3">
                                <img class="img-responsive" src="./assets/images/small-img.svg" alt=" ">
                            </div>
                            <div class="col-md-9">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>title</h3>
                                    </div>
                                    <div class="text">
                                         
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                                    </div>
                                </div>
                            </div>
						</div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about us area-->
<section class="service-section section bg-blue">
    <div class="container">
        <div class="section-title text-center">
            <h3>
                <span>title</span>
            </h3>
          
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <img src="./assets/images/small-img.svg" alt=" " class="img-responsive">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <img src="./assets/images/small-img.svg" alt=" " class="img-responsive">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <img src="./assets/images/small-img.svg" alt=" " class="img-responsive">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <img src="./assets/images/small-img.svg" alt=" " class="img-responsive">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <img src="./assets/images/small-img.svg" alt=" " class="img-responsive">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>
                <span>title</span>
            </h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['plombier']['url'];?>">
                            <img src="./assets/images/brands-img.svg" alt="<?php echo $website['plombier']['title'];?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['plombier']['url'];?>"><span>Artisan</span><h6><?php echo $website['plombier']['title'];?></h6></a>
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['chauffagiste']['url'];?>">
                            <img src="./assets/images/brands-img.svg" alt="<?php echo $website['chauffagiste']['title'];?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['chauffagiste']['url'];?>"><span>Artisan</span><h6><?php echo $website['chauffagiste']['title'];?></h6></a>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['electricien']['url'];?>">
                            <img src="./assets/images/brands-img.svg" alt="<?php echo $website['electricien']['title'];?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                       
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['electricien']['url'];?>"><span>Artisan</span><h6><?php echo $website['electricien']['title'];?></h6></a>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['serrurier']['url'];?>">
                            <img src="./assets/images/brands-img.svg" alt="<?php echo $website['serrurier']['title'];?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                       
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['serrurier']['url'];?>"><span>Artisan</span><h6><?php echo $website['serrurier']['title'];?></h6></a>
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['vitrier']['url'];?>">
                            <img src="./assets/images/brands-img.svg" alt="<?php echo $website['vitrier']['title'];?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['vitrier']['url'];?>"><span>Artisan</span><h6><?php echo $website['vitrier']['title'];?></h6></a>
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['volet-roulant-et-store']['url'];?>">
                            <img src="./assets/images/brands-img.svg" alt="<?php echo $website['volet-roulant-et-store']['title'];?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        
                        <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['volet-roulant-et-store']['url'];?>"><span>Artisan</span><h6><?php echo $website['volet-roulant-et-store']['title'];?></h6></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>