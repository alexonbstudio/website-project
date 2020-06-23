
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
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="mt-5 mt-lg-0" data-aos="fade-up">
              <p><?php echo $block['error']['content']['line1']; ?></p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="50">
              <p><?php echo $block['error']['content']['line2']; ?></p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="100">
              <p><?php echo $block['error']['content']['line3']; ?></p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="150">
              <p><?php echo $block['error']['content']['line4']; ?></p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="200">
              <p><?php echo $block['error']['content']['line5']; ?></p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="250">
              <p><?php echo $block['error']['content']['line6']; ?></p>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="300">
              <p><?php echo $block['error']['content']['line7']; ?></p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("<?php echo $images['dir'].'/'.$block['error']['sitemap']['images']; ?>");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
