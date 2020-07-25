
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
              <p><?php echo $block['success']['content']['msg']; ?></p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("<?php echo $images['dir'].'/'.$block['success']['sitemap']['images']; ?>");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
