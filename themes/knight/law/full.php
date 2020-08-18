
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $title; ?></h2>
          <ol>
            <li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$general['index']['url']; ?>"><?php echo $general['index']['title']; ?></a></li>
            <li><?php echo $title; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><?php echo $title; ?></h2>
          <p><?php echo $description; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="mt-5 mt-lg-0" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <p>
			  
				<ul>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['pages']['url']['default'];?>"><?php echo $law['pages']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['rgpd']['url']['default'];?>"><?php echo $law['rgpd']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['policy-privacy']['url']['default'];?>"><?php echo $law['policy-privacy']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['legal']['url']['default'];?>"><?php echo $law['legal']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['dmca']['url']['default'];?>"><?php echo $law['dmca']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['cgv']['url']['default'];?>"><?php echo $law['cgv']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['cgu']['url']['default'];?>"><?php echo $law['cgu']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['cookies']['url']['default'];?>"><?php echo $law['cookies']['title'];?></a> </li>
					
				</ul>
			  </p>
            </div>
            
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("<?php echo $images['dir'].'/'.$law['pages']['sitemap']['images']; ?>");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
