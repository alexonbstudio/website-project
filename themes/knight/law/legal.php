
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
      <div class="col-lg-12">
	  .	<?php if(!empty($business['local']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['business']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['business']['name']; ?></strong> <?php echo $business['local']['name']; ?><br />
					<?php if(!empty($business['local']['tva'])){ ?><strong>TVA</strong>: <?php echo $business['local']['tva'].'<br />'; } ?>
					<?php if(!empty($business['local']['vat'])){ ?><strong>VAT</strong>: <?php echo $business['local']['vat'].'<br />'; } ?>
					<?php if(!empty($business['local']['siret'])){ ?><strong>SIRET</strong>: <?php echo $business['local']['siret'].'<br />'; } ?>
				<strong><?php echo $law['legal']['content']['business']['address']; ?></strong> <?php echo $business['local']['address'].' '.$business['local']['postal'].' '.$business['local']['city'].' '.$business['local']['contry']; ?> <br />
				<strong><?php echo $law['legal']['content']['business']['status']; ?></strong> <?php echo $law['legal']['content']['status']['medium']; ?><?php if(!empty($business['local']['status'])){ echo ' - '.$business['local']['status']; } ?>
				
			</p>
		
	    <?php } else { ?>
           <h3><?php echo $law['legal']['content']['owner']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['owner']['name']; ?></strong> <?php echo $private['name']; ?><br />
				
				<strong><?php echo $law['legal']['content']['owner']['status']; ?></strong> <?php echo $law['legal']['content']['status']['particular']; ?>
				
			</p>
	    <?php } ?> 

		  
		   <?php if(!empty($hosting['server']['internal']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['hosting']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['hosting']['name']; ?></strong> <a href="<?php echo $protocols.'://'.$hosting['server']['internal']['site']; ?>"><?php echo $hosting['server']['internal']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['hosting']['address']; ?></strong> <?php echo $hosting['server']['internal']['address'].' '.$hosting['server']['internal']['postal'].' '.$hosting['server']['internal']['city'].' '.$hosting['server']['internal']['contry']; ?>
				
			</p>
		   
		   <?php } ?> 
		   <?php if(!empty($hosting['server']['external']['cloud']['google']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['server']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['server']['name']; ?></strong> <a href="<?php echo $protocols.'://'.$hosting['server']['external']['cloud']['google']['site']; ?>"><?php echo $hosting['server']['external']['cloud']['google']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['server']['address']; ?></strong> <?php echo $hosting['server']['external']['cloud']['google']['address'].' '.$hosting['server']['external']['cloud']['google']['postal'].' '.$hosting['server']['external']['cloud']['google']['city'].' '.$hosting['server']['external']['cloud']['google']['contry']; ?>
				
			</p>
		   <?php } ?> 
           <h3><?php echo $law['legal']['content']['credits']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['credits']['developper']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['developper']['alexonbstudio']['url']; ?>"><?php echo $credits['developper']['alexonbstudio']['name'].'</a>, <a href="'.$protocols.'://'.$credits['developper']['PHPMailer']['url'].'">'.$credits['developper']['PHPMailer']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['designer']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['designer']['alexonbstudio']['url']; ?>"><?php echo $credits['designer']['alexonbstudio']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['webmaster']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['webmaster']['alexonbstudio']['url']; ?>"><?php echo $credits['webmaster']['alexonbstudio']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['marketing']; ?></strong> -<br />
				<strong><?php echo $law['legal']['content']['credits']['image']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['images']['alexonbstudio']['url']; ?>"><?php echo $credits['images']['alexonbstudio']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['pexels']['url'].'">'.$credits['images']['pexels']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['pixabay']['url'].'">'.$credits['images']['pixabay']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['wikimedia']['url'].'">'.$credits['images']['wikimedia']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['unsplash']['url'].'">'.$credits['images']['unsplash']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['photographer']; ?></strong> -<br />
				<strong><?php echo $law['legal']['content']['credits']['video']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['video']['alexonbstudio']['url']; ?>"><?php echo $credits['video']['alexonbstudio']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['webdesigner']; ?></strong>  <a href="<?php echo $credits['webdesigner']['bootstrapmade']['url']; ?>"><?php echo $credits['webdesigner']['bootstrapmade']['name']; ?></a>
				
			</p>
           <h3><?php echo $law['legal']['content']['software']['title']; ?></h3>
		   <p>
			<strong><?php echo $law['legal']['content']['software']['title']; ?></strong> <?php echo $law['legal']['content']['software']['wp']; ?> - CC-BY-SA<br />
			License: GNU GPL V3.0
		   </p>
		   
      </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
