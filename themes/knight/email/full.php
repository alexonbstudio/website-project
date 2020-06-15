
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $title; ?></h2>
          <ol>
            <li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']; ?>"><?php echo $general['index']['name']; ?></a></li>
            <li><?php echo $title; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
			<?php if(!empty($business['local']['name'])){ ?>
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4><?php echo $business['local']['name']; ?></h4>
                <p><?php echo $business['local']['address']; ?>,<br>
				<?php echo $business['local']['postal'].', '.$business['local']['city'].', '.$business['local']['contry']; ?>
				</p>
              </div>
			<?php } else { ?>
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4><?php echo $private['name']; ?></h4>
                <p> </p>
              </div>
			<?php } ?>
			<?php if(!empty($business['local']['name'])){ ?>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?php echo $email['index']['content']['default']['email']; ?>:</h4>
                <p><?php echo $business['local']['mail']['business']; ?></p>
              </div>
			<?php } else { ?>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?php echo $email['index']['content']['default']['email']; ?>:</h4>
                <p><?php echo $private['mail']['public']; ?></p>
              </div>
			<?php } ?>
			
			<?php if(!empty($business['local']['name'])){ ?>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo $email['index']['content']['default']['phone']; ?>:</h4>
                <p><a href="tel:<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>">
					<?php echo $business['local']['phone']['normal']; ?><?php echo $business['local']['phone']['number']; ?>
				</a></p>
              </div>
			<?php } else { ?>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo $email['index']['content']['default']['phone']; ?>:</h4>
                <p><a href="tel:<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>">
					<?php echo $private['mobile']['normal']; ?><?php echo $private['mobile']['number']; ?>
				</a></p>
              </div>
			
			<?php } ?>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $email['index']['content']['default']['name']; ?>" data-rule="minlen:4" data-msg="<?php echo $email['index']['content']['placeholder']['name']; ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $email['index']['content']['default']['email']; ?>" data-rule="email" data-msg="<?php echo $email['index']['content']['placeholder']['email']; ?>" />
                  <div class="validate"></div>
                </div>
              </div>
				<?php if(!empty($business['local']['name'])){ ?>	  
				<select name="teams" id="select">
					<option value="<?php echo $business['local']['mail']['text']['contact']; ?>" selected="selected"><?php echo $email['index']['content']['mail']['contact']; ?></option>
					<option value="<?php echo $business['local']['mail']['text']['support']; ?>"><?php echo $email['index']['content']['mail']['support']; ?></option>
					<option value="<?php echo $business['local']['mail']['text']['commercial']; ?>"><?php echo $email['index']['content']['mail']['commercial']; ?></option>
					<option value="<?php echo $business['local']['mail']['text']['sponsor']; ?>"><?php echo $email['index']['content']['mail']['sponsor']; ?></option>
					<option value="<?php echo $business['local']['mail']['text']['partner']; ?>"><?php echo $email['index']['content']['mail']['partner']; ?></option>
					<option value="<?php echo $business['local']['mail']['text']['business']; ?>"><?php echo $email['index']['content']['mail']['business']; ?></option>
				</select>
				<?php } ?>	
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $email['index']['content']['default']['subject']; ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="<?php echo $email['index']['content']['placeholder']['message']; ?>" placeholder="<?php echo $email['index']['content']['default']['message']; ?>"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading"><?php echo $email['index']['content']['form']['load']; ?></div>
                <div class="error-message"></div>
                <div class="sent-message"><?php echo $email['index']['content']['form']['msg-thanks']; ?></div>
              </div>
              <div class="text-center"><button type="submit"><?php echo $email['index']['content']['form']['send']; ?></button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
