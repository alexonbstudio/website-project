
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $title; ?></h2>
          <ol>
            <li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']; ?>"><?php echo $general['index']['title']; ?></a></li>
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
      <div class="col-lg-12">
		   <ul>
			<!-- index -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$general['index']['url']['default'];?>"><?php echo $general['index']['title'];?></a></li>
			<!-- email -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$email['index']['url']['default'];?>"><?php echo $email['index']['title'];?></a></li>
			<!-- law -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['pages']['url']['default'];?>"><?php echo $law['pages']['title'];?></a>    
					<ul>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['rgpd']['url']['default'];?>"><?php echo $law['rgpd']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['policy-privacy']['url']['default'];?>"><?php echo $law['policy-privacy']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['legal']['url']['default'];?>"><?php echo $law['legal']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['dmca']['url']['default'];?>"><?php echo $law['dmca']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['cgv']['url']['default'];?>"><?php echo $law['cgv']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$law['cgu']['url']['default'];?>"><?php echo $law['cgu']['title'];?></a> </li>
					</ul>
				</li>
			<!-- partner -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$partner['index']['url']['default'];?>"><?php echo $partner['index']['title'];?></a></li>
			<!-- sponsor -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$translate['manual']['frontend']['french'].'/'.$sponsor['index']['url']['default'];?>"><?php echo $sponsor['index']['title'];?></a></li>
  
			</ul>
		   </p>
		   
      </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
