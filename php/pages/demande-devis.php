
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

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
					
                    <div class="media">
                        <i class="fa fa-euro-sign"></i>
                        <div class="media-body">
                            <h3>Devis gratuit</h3>
                            <p>Et on vous répond dans <br />
							les plus bref délais</p>
                        </div>
                    </div>
					
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3><?php echo $website['full']['call-now']; ?></h3>
                             <p><a href="tel:<?php echo $website['info']['site']['number']['url']; ?>"><span><?php echo $website['info']['site']['number']['text']; ?></span></a></p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h3><?php echo $website['full']['email']; ?></h3>
                            <p>
                                <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['contactez-nous']['url']; ?>">
                                    <span><?php echo $website['info']['site']['email-contact']; ?></span>
                              </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form method="post" class="row">
                        <!-- name -->
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control main" placeholder="<?php echo $website['contactez-nous']['contents']['name']; ?>" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input name="email" type="text" class="form-control main" placeholder="<?php echo $website['contactez-nous']['contents']['phone']; ?>" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                            <input name="email" type="email" class="form-control main" placeholder="<?php echo $website['contactez-nous']['contents']['email']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <input name="address" type="text" class="form-control main" placeholder="<?php echo $website['contactez-nous']['contents']['address']; ?>" required>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea name="message" rows="15" class="form-control main" placeholder="<?php echo $website['contactez-nous']['contents']['message']; ?>"></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit"><?php echo $website['contactez-nous']['contents']['send']; ?></button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->
