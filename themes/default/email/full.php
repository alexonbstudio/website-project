
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $title; ?>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']; ?>"><?php echo $general['index']['title']; ?></a>
      </li>
      <li class="breadcrumb-item active"><?php echo $title; ?></li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">


    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- contact form -->
        <form method="post" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label><?php echo $email['index']['content']['default']['name']; ?>:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="<?php echo $email['index']['content']['placeholder']['name']; ?>">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label><?php echo $email['index']['content']['default']['email']; ?>:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="<?php echo $email['index']['content']['placeholder']['email']; ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label><?php echo $email['index']['content']['default']['phone']; ?>:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="<?php echo $email['index']['content']['placeholder']['phone']; ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
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
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label><?php echo $email['index']['content']['default']['message']; ?>:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="<?php echo $email['index']['content']['placeholder']['message']; ?>" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>	
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary"><?php echo $email['index']['content']['form']['send']; ?></button>
        </form>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
	  <?php if(!empty($business['local']['name'])){ ?>
        <h3><?php echo $business['local']['name']; ?></h3>
        <p><?php echo $business['local']['address']; ?>,<br>
				<?php echo $business['local']['address'].'<br> '.$business['local']['postal'].', '.$business['local']['city'].', '.$business['local']['contry']; ?>
					
        </p>
		<?php } else { ?>
        <h3><?php echo $sites['name']; ?></h3>
		<?php } ?>
		<!--separator-->
		<?php if(!empty($business['local']['name'])){ ?>
        <p>
          <abbr title="<?php echo $email['index']['content']['default']['phone']; ?>"><i class="fas fa-phone"></i></abbr>: <?php echo $business['local']['phone']['normal']; ?><?php echo $business['local']['phone']['number']; ?>
        </p>
		<?php } else { ?>
        <p>
          <abbr title="<?php echo $email['index']['content']['default']['phone']; ?>"><i class="fas fa-phone"></i></abbr>: <?php echo $private['mobile']['normal']; ?><?php echo $private['mobile']['number']; ?>
        </p>
		<?php } ?>
		<!--separator-->
		<?php if(!empty($business['local']['name'])){ ?>
        <p>
          <abbr title="<?php echo $email['index']['content']['default']['email']; ?>"><i class="far fa-envelope"></i></abbr>:
		  <?php echo $business['local']['mail']['business']; ?>
        </p>
		<?php } else { ?>
        <p>
          <abbr title="<?php echo $email['index']['content']['default']['email']; ?>"><i class="far fa-envelope"></i></abbr>:
		  <?php echo $private['mail']['public']; ?>
        </p>
		<?php } ?>
		<!--separator-->
      </div>
    </div>
    <!-- /.row -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
