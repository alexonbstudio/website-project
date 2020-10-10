
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
				<?php echo $business['local']['address'].'<br> '.$business['local']['postal'].', '.$business['local']['city'].', '.$business['local']['contry']; ?>
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
                <p><?php echo $business['local']['mail']['business'].' [AT] '.$domainTLD; ?></p>
              </div>
			<?php } else { ?>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?php echo $email['index']['content']['default']['email']; ?>:</h4>
                <p> <?php 
				  if(!empty($private['mail']['public'])){
					echo $private['mail']['public'].' [AT] '.$domainTLD; 
				  } else {			  
					echo $private['mail']['private'].' [AT] '.$private['mail']['private']['@']['external']; 
				  }
				  ?></p>
              </div>
			<?php } ?>
			
			<?php if(!empty($business['local']['name'])){ ?>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo $email['index']['content']['default']['phone']; ?>:</h4>
                <p><a href="tel:<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>">
					<?php echo $business['local']['phone']['code']; ?> (<?php echo $business['local']['phone']['normal']; ?>) <?php echo $business['local']['phone']['number']; ?>
				</a></p>
              </div>
			<?php } else { ?>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo $email['index']['content']['default']['phone']; ?>:</h4>
                <p><a href="tel:<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>">
					<?php echo $private['mobile']['code']; ?> (<?php echo $private['mobile']['normal']; ?>) <?php echo $private['mobile']['number']; ?>
				</a></p>
              </div>
			
			<?php } ?>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" data-rule="required" id="name" placeholder="<?php echo $email['index']['content']['default']['name']; ?>" data-rule="minlen:4" data-msg="<?php echo $email['index']['content']['placeholder']['name']; ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" data-rule="required" id="email" placeholder="<?php echo $email['index']['content']['default']['email']; ?>" data-rule="email" data-msg="<?php echo $email['index']['content']['placeholder']['email']; ?>" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">	
				  <div class="col-12 col-md-4 form-group"> 
		<select name="phone-country-code" id="select">
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AF')]['COUNTRY-CODE']; ?>">Afghanistan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AL')]['COUNTRY-CODE']; ?>">Albania (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DZ')]['COUNTRY-CODE']; ?>">Algeria (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('DZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AS')]['COUNTRY-CODE']; ?>">American Samoa (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AD')]['COUNTRY-CODE']; ?>">Andorra (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AO')]['COUNTRY-CODE']; ?>">Angola (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AI')]['COUNTRY-CODE']; ?>">Anguilla (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AG')]['COUNTRY-CODE']; ?>">Antigua (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AR')]['COUNTRY-CODE']; ?>">Argentina (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AM')]['COUNTRY-CODE']; ?>">Armenia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AW')]['COUNTRY-CODE']; ?>">Aruba (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AU')]['COUNTRY-CODE']; ?>">Australia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AT')]['COUNTRY-CODE']; ?>">Austria (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AZ')]['COUNTRY-CODE']; ?>">Azerbaijan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BS')]['COUNTRY-CODE']; ?>">The Bahamas (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BH')]['COUNTRY-CODE']; ?>">Bahrain (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BD')]['COUNTRY-CODE']; ?>">Bangladesh (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BB')]['COUNTRY-CODE']; ?>">Barbados (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BB')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BY')]['COUNTRY-CODE']; ?>">Belarus (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BE')]['COUNTRY-CODE']; ?>">Belgium (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BZ')]['COUNTRY-CODE']; ?>">Belize (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BJ')]['COUNTRY-CODE']; ?>">Benin (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BJ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BM')]['COUNTRY-CODE']; ?>">Bermuda (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BT')]['COUNTRY-CODE']; ?>">Bhutan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BO')]['COUNTRY-CODE']; ?>">Bolivia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BA')]['COUNTRY-CODE']; ?>">Bosnia and Herzegovina (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BW')]['COUNTRY-CODE']; ?>">Botswana (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BR')]['COUNTRY-CODE']; ?>">Brazil (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IO')]['COUNTRY-CODE']; ?>">British Indian Ocean Territory (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BN')]['COUNTRY-CODE']; ?>">Brunei (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BG')]['COUNTRY-CODE']; ?>">Bulgaria (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BF')]['COUNTRY-CODE']; ?>">Burkina Faso (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BI')]['COUNTRY-CODE']; ?>">Burundi (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KH')]['COUNTRY-CODE']; ?>">Cambodia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CM')]['COUNTRY-CODE']; ?>">Cameroon (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CA')]['COUNTRY-CODE']; ?>">Canada (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CV')]['COUNTRY-CODE']; ?>">Cape Verde (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CV')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KY')]['COUNTRY-CODE']; ?>">Cayman Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CF')]['COUNTRY-CODE']; ?>">Central African Republic (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TD')]['COUNTRY-CODE']; ?>">Chad (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CL')]['COUNTRY-CODE']; ?>">Chile (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CN')]['COUNTRY-CODE']; ?>">China (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CO')]['COUNTRY-CODE']; ?>">Colombia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KM')]['COUNTRY-CODE']; ?>">Comoros (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CG')]['COUNTRY-CODE']; ?>">Republic of the Congo (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CD')]['COUNTRY-CODE']; ?>">Democratic Republic of Congo (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CK')]['COUNTRY-CODE']; ?>">Cook Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CR')]['COUNTRY-CODE']; ?>">Costa Rica (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CI')]['COUNTRY-CODE']; ?>">Côte d'Ivoire (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HR')]['COUNTRY-CODE']; ?>">Croatia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('HR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CU')]['COUNTRY-CODE']; ?>">Cuba (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CY')]['COUNTRY-CODE']; ?>">Cyprus (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CZ')]['COUNTRY-CODE']; ?>">Czech Republic (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DK')]['COUNTRY-CODE']; ?>">Denmark (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('DK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DJ')]['COUNTRY-CODE']; ?>">Djibouti (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('DJ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DM')]['COUNTRY-CODE']; ?>">Dominica (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('DM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DO')]['COUNTRY-CODE']; ?>">Dominican Republic (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('DO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('EC')]['COUNTRY-CODE']; ?>">Ecuador (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('EC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('EG')]['COUNTRY-CODE']; ?>">Egypt (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('EG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SV')]['COUNTRY-CODE']; ?>">El Salvador (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SV')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GQ')]['COUNTRY-CODE']; ?>">Equatorial Guinea (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GQ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ER')]['COUNTRY-CODE']; ?>">Eritrea (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ER')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('EE')]['COUNTRY-CODE']; ?>">Estonia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('EE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ET')]['COUNTRY-CODE']; ?>">Ethiopia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ET')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FK')]['COUNTRY-CODE']; ?>">Falkland Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FO')]['COUNTRY-CODE']; ?>">Faroe Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FJ')]['COUNTRY-CODE']; ?>">Fiji (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FJ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FI')]['COUNTRY-CODE']; ?>">Finland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE']; ?>" selected>France (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GF')]['COUNTRY-CODE']; ?>">French Guiana (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PF')]['COUNTRY-CODE']; ?>">French Polynesia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GA')]['COUNTRY-CODE']; ?>">Gabon (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GM')]['COUNTRY-CODE']; ?>">The Gambia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GE')]['COUNTRY-CODE']; ?>">Georgia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DE')]['COUNTRY-CODE']; ?>">Germany (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('DE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GH')]['COUNTRY-CODE']; ?>">Ghana (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GI')]['COUNTRY-CODE']; ?>">Gibraltar (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GR')]['COUNTRY-CODE']; ?>">Greece (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GL')]['COUNTRY-CODE']; ?>">Greenland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GD')]['COUNTRY-CODE']; ?>">Grenada (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GP')]['COUNTRY-CODE']; ?>">Guadeloupe (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GP')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GU')]['COUNTRY-CODE']; ?>">Guam (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GT')]['COUNTRY-CODE']; ?>">Guatemala (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GN')]['COUNTRY-CODE']; ?>">Guinea (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GW')]['COUNTRY-CODE']; ?>">Guinea-Bissau (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GY')]['COUNTRY-CODE']; ?>">Guyana (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HT')]['COUNTRY-CODE']; ?>">Haiti (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('HT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VA')]['COUNTRY-CODE']; ?>">Vatican City (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('VA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HN')]['COUNTRY-CODE']; ?>">Honduras (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('HN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HK')]['COUNTRY-CODE']; ?>">Hong Kong (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('HK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HU')]['COUNTRY-CODE']; ?>">Hungary (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('HU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IS')]['COUNTRY-CODE']; ?>">Iceland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IN')]['COUNTRY-CODE']; ?>">India (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ID')]['COUNTRY-CODE']; ?>">Indonesia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ID')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IR')]['COUNTRY-CODE']; ?>">Iran (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IQ')]['COUNTRY-CODE']; ?>">Iraq (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IQ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IE')]['COUNTRY-CODE']; ?>">Ireland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IL')]['COUNTRY-CODE']; ?>">Israel (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IT')]['COUNTRY-CODE']; ?>">Italy (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('IT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('JM')]['COUNTRY-CODE']; ?>">Jamaica (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('JM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('JP')]['COUNTRY-CODE']; ?>">Japan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('JP')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('JO')]['COUNTRY-CODE']; ?>">Jordan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('JO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KZ')]['COUNTRY-CODE']; ?>">Kazakhstan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KE')]['COUNTRY-CODE']; ?>">Kenya (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KI')]['COUNTRY-CODE']; ?>">Kiribati (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KR')]['COUNTRY-CODE']; ?>">South Korea (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KW')]['COUNTRY-CODE']; ?>">Kuwait (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KG')]['COUNTRY-CODE']; ?>">Kyrgyzstan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LA')]['COUNTRY-CODE']; ?>">Laos (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LV')]['COUNTRY-CODE']; ?>">Latvia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LV')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LB')]['COUNTRY-CODE']; ?>">Lebanon (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LB')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LS')]['COUNTRY-CODE']; ?>">Lesotho (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LR')]['COUNTRY-CODE']; ?>">Liberia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LY')]['COUNTRY-CODE']; ?>">Libya (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LI')]['COUNTRY-CODE']; ?>">Liechtenstein (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LT')]['COUNTRY-CODE']; ?>">Lithuania (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LU')]['COUNTRY-CODE']; ?>">Luxembourg (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MO')]['COUNTRY-CODE']; ?>">Macau (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MK')]['COUNTRY-CODE']; ?>">Macedonia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MG')]['COUNTRY-CODE']; ?>">Madagascar (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MW')]['COUNTRY-CODE']; ?>">Malawi (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MY')]['COUNTRY-CODE']; ?>">Malaysia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MV')]['COUNTRY-CODE']; ?>">Maldives (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MV')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ML')]['COUNTRY-CODE']; ?>">Mali (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ML')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MT')]['COUNTRY-CODE']; ?>">Malta (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MH')]['COUNTRY-CODE']; ?>">Marshall Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MQ')]['COUNTRY-CODE']; ?>">Martinique (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MQ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MR')]['COUNTRY-CODE']; ?>">Mauritania (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MU')]['COUNTRY-CODE']; ?>">Mauritius (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('YT')]['COUNTRY-CODE']; ?>">Mayotte (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('YT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MX')]['COUNTRY-CODE']; ?>">Mexico (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MX')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FM')]['COUNTRY-CODE']; ?>">Federated States of Micronesia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MD')]['COUNTRY-CODE']; ?>">Moldova (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MC')]['COUNTRY-CODE']; ?>">Monaco (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MN')]['COUNTRY-CODE']; ?>">Mongolia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ME')]['COUNTRY-CODE']; ?>">Montenegro (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ME')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MS')]['COUNTRY-CODE']; ?>">Montserrat (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MA')]['COUNTRY-CODE']; ?>">Morocco (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MZ')]['COUNTRY-CODE']; ?>">Mozambique (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MM')]['COUNTRY-CODE']; ?>">Burma Myanmar (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NA')]['COUNTRY-CODE']; ?>">Namibia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NR')]['COUNTRY-CODE']; ?>">Nauru (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NP')]['COUNTRY-CODE']; ?>">Nepal (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NP')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NL')]['COUNTRY-CODE']; ?>">Netherlands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AN')]['COUNTRY-CODE']; ?>">Netherlands Antilles (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NC')]['COUNTRY-CODE']; ?>">New Caledonia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NZ')]['COUNTRY-CODE']; ?>">New Zealand (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NI')]['COUNTRY-CODE']; ?>">Nicaragua (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NE')]['COUNTRY-CODE']; ?>">Niger (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NG')]['COUNTRY-CODE']; ?>">Nigeria (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NU')]['COUNTRY-CODE']; ?>">Niue (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NF')]['COUNTRY-CODE']; ?>">Norfolk Island (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MP')]['COUNTRY-CODE']; ?>">Northern Mariana Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MP')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NO')]['COUNTRY-CODE']; ?>">Norway (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('NO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('OM')]['COUNTRY-CODE']; ?>">Oman (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('OM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PK')]['COUNTRY-CODE']; ?>">Pakistan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PW')]['COUNTRY-CODE']; ?>">Palau (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PS')]['COUNTRY-CODE']; ?>">Palestine (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PA')]['COUNTRY-CODE']; ?>">Panama (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PG')]['COUNTRY-CODE']; ?>">Papua New Guinea (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PY')]['COUNTRY-CODE']; ?>">Paraguay (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PE')]['COUNTRY-CODE']; ?>">Peru (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PH')]['COUNTRY-CODE']; ?>">Philippines (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PL')]['COUNTRY-CODE']; ?>">Poland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PT')]['COUNTRY-CODE']; ?>">Portugal (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PR')]['COUNTRY-CODE']; ?>">Puerto Rico (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('QA')]['COUNTRY-CODE']; ?>">Qatar (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('QA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RE')]['COUNTRY-CODE']; ?>">Rénion (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('RE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RO')]['COUNTRY-CODE']; ?>">Romania (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('RO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RU')]['COUNTRY-CODE']; ?>">Russia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('RU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RW')]['COUNTRY-CODE']; ?>">Rwanda (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('RW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BL')]['COUNTRY-CODE']; ?>">Saint BarthÃ©lemy (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('BL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SH')]['COUNTRY-CODE']; ?>">Saint Helena (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KN')]['COUNTRY-CODE']; ?>">Saint Kitts and Nevis (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('KN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LC')]['COUNTRY-CODE']; ?>">St. Lucia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MF')]['COUNTRY-CODE']; ?>">Saint Martin (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('MF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PM')]['COUNTRY-CODE']; ?>">Saint Pierre and Miquelon (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('PM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VC')]['COUNTRY-CODE']; ?>">Saint Vincent and the Grenadines (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('VC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('WS')]['COUNTRY-CODE']; ?>">Samoa (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('WS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SM')]['COUNTRY-CODE']; ?>">San Marino (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ST')]['COUNTRY-CODE']; ?>">São Tomé-et-Príncipe (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ST')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SA')]['COUNTRY-CODE']; ?>">Saudi Arabia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SN')]['COUNTRY-CODE']; ?>">Senegal (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RS')]['COUNTRY-CODE']; ?>">Serbia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('RS')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SC')]['COUNTRY-CODE']; ?>">Seychelles (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SL')]['COUNTRY-CODE']; ?>">Sierra Leone (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SG')]['COUNTRY-CODE']; ?>">Singapore (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SK')]['COUNTRY-CODE']; ?>">Slovakia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SI')]['COUNTRY-CODE']; ?>">Slovenia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SB')]['COUNTRY-CODE']; ?>">Solomon Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SB')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SO')]['COUNTRY-CODE']; ?>">Somalia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ZA')]['COUNTRY-CODE']; ?>">South Africa (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ZA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ES')]['COUNTRY-CODE']; ?>">Spain (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ES')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LK')]['COUNTRY-CODE']; ?>">Sri Lanka (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('LK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SD')]['COUNTRY-CODE']; ?>">Sudan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SD')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SR')]['COUNTRY-CODE']; ?>">Suriname (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SZ')]['COUNTRY-CODE']; ?>">Swaziland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SE')]['COUNTRY-CODE']; ?>">Sweden (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CH')]['COUNTRY-CODE']; ?>">Switzerland (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('CH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SY')]['COUNTRY-CODE']; ?>">Syria (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('SY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TW')]['COUNTRY-CODE']; ?>">Taiwan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TW')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TJ')]['COUNTRY-CODE']; ?>">Tajikistan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TJ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TZ')]['COUNTRY-CODE']; ?>">Tanzania (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TH')]['COUNTRY-CODE']; ?>">Thailand (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TH')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TL')]['COUNTRY-CODE']; ?>">Timor-Leste (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TL')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TG')]['COUNTRY-CODE']; ?>">Togo (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TK')]['COUNTRY-CODE']; ?>">Tokelau (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TK')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TO')]['COUNTRY-CODE']; ?>">Tonga (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TO')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TT')]['COUNTRY-CODE']; ?>">Trinidad and Tobago (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TT')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TN')]['COUNTRY-CODE']; ?>">Tunisia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TR')]['COUNTRY-CODE']; ?>">Turkey (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TR')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TM')]['COUNTRY-CODE']; ?>">Turkmenistan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TC')]['COUNTRY-CODE']; ?>">Turks and Caicos Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TC')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TV')]['COUNTRY-CODE']; ?>">Tuvalu (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('TV')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UG')]['COUNTRY-CODE']; ?>">Uganda (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('UG')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UA')]['COUNTRY-CODE']; ?>">Ukraine (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('UA')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AE')]['COUNTRY-CODE']; ?>">United Arab Emirates (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('AE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GB')]['COUNTRY-CODE']; ?>">United Kingdom (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('GB')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('US')]['COUNTRY-CODE']; ?>">United States (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('US')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UY')]['COUNTRY-CODE']; ?>">Uruguay (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('UY')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VI')]['COUNTRY-CODE']; ?>">US Virgin Islands (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('VI')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UZ')]['COUNTRY-CODE']; ?>">Uzbekistan (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('UZ')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VU')]['COUNTRY-CODE']; ?>">Vanuatu (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('VU')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VE')]['COUNTRY-CODE']; ?>">Venezuela (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('VE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VN')]['COUNTRY-CODE']; ?>">Vietnam (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('VN')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('WF')]['COUNTRY-CODE']; ?>">Wallis and Futuna (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('WF')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('YE')]['COUNTRY-CODE']; ?>">Yemen (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('YE')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ZM')]['COUNTRY-CODE']; ?>">Zambia (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ZM')]['COUNTRY-CODE']); ?>)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ZW')]['COUNTRY-CODE']; ?>">Zimbabwe (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('ZW')]['COUNTRY-CODE']); ?>)</option>
</select>
				  </div>
                <div class="col-12 col-md-8 form-group">
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="<?php echo $email['index']['content']['default']['phone']; ?>" data-rule="minlen:3" data-msg="<?php echo $email['index']['content']['placeholder']['phone']; ?>" />
                  <div class="validate"></div>
                </div>
				
              </div>	
              <?php if(!empty($apiexternal['captcha']['hcaptcha']['public'])){ ?>
			  <div class="form-group">
                <div class="h-captcha" data-sitekey="<?php echo $apiexternal['captcha']['hcaptcha']['public']; ?>" data-theme="dark"></div>
              </div>
				<?php } ?>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" data-rule="required" id="subject" placeholder="<?php echo $email['index']['content']['default']['subject']; ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
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

  
<script>
$("form").submit(function(event) {

   var hcaptchaVal = $('[name=h-captcha-response]').value;
   if (hcaptchaVal === "") {
      event.preventDefault();
      alert("Please complete the hCaptcha");
   }
});
</script>