
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
				  <div class="col-12 col-md-4 form-group"> <select name="phone-crountry-code" id="select">
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AF')]['COUNTRY-CODE']; ?>">Afghanistan (AF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AL')]['COUNTRY-CODE']; ?>">Albania (AL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DZ')]['COUNTRY-CODE']; ?>">Algeria (DZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AS')]['COUNTRY-CODE']; ?>">American Samoa (AS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AD')]['COUNTRY-CODE']; ?>">Andorra (AD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AO')]['COUNTRY-CODE']; ?>">Angola (AO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AI')]['COUNTRY-CODE']; ?>">Anguilla (AI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AG')]['COUNTRY-CODE']; ?>">Antigua (AG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AR')]['COUNTRY-CODE']; ?>">Argentina (AR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AM')]['COUNTRY-CODE']; ?>">Armenia (AM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AW')]['COUNTRY-CODE']; ?>">Aruba (AW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AU')]['COUNTRY-CODE']; ?>">Australia (AU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AT')]['COUNTRY-CODE']; ?>">Austria (AT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AZ')]['COUNTRY-CODE']; ?>">Azerbaijan (AZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BS')]['COUNTRY-CODE']; ?>">The Bahamas (BS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BH')]['COUNTRY-CODE']; ?>">Bahrain (BH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BD')]['COUNTRY-CODE']; ?>">Bangladesh (BD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BB')]['COUNTRY-CODE']; ?>">Barbados (BB)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BY')]['COUNTRY-CODE']; ?>">Belarus (BY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BE')]['COUNTRY-CODE']; ?>">Belgium (BE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BZ')]['COUNTRY-CODE']; ?>">Belize (BZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BJ')]['COUNTRY-CODE']; ?>">Benin (BJ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BM')]['COUNTRY-CODE']; ?>">Bermuda (BM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BT')]['COUNTRY-CODE']; ?>">Bhutan (BT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BO')]['COUNTRY-CODE']; ?>">Bolivia (BO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BA')]['COUNTRY-CODE']; ?>">Bosnia and Herzegovina (BA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BW')]['COUNTRY-CODE']; ?>">Botswana (BW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BR')]['COUNTRY-CODE']; ?>">Brazil (BR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IO')]['COUNTRY-CODE']; ?>">British Indian Ocean Territory (IO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BN')]['COUNTRY-CODE']; ?>">Brunei (BN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BG')]['COUNTRY-CODE']; ?>">Bulgaria (BG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BF')]['COUNTRY-CODE']; ?>">Burkina Faso (BF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BI')]['COUNTRY-CODE']; ?>">Burundi (BI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KH')]['COUNTRY-CODE']; ?>">Cambodia (KH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CM')]['COUNTRY-CODE']; ?>">Cameroon (CM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CA')]['COUNTRY-CODE']; ?>">Canada (CA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CV')]['COUNTRY-CODE']; ?>">Cape Verde (CV)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KY')]['COUNTRY-CODE']; ?>">Cayman Islands (KY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CF')]['COUNTRY-CODE']; ?>">Central African Republic (CF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TD')]['COUNTRY-CODE']; ?>">Chad (TD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CL')]['COUNTRY-CODE']; ?>">Chile (CL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CN')]['COUNTRY-CODE']; ?>">China (CN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CO')]['COUNTRY-CODE']; ?>">Colombia (CO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KM')]['COUNTRY-CODE']; ?>">Comoros (KM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CG')]['COUNTRY-CODE']; ?>">Republic of the Congo (CG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CD')]['COUNTRY-CODE']; ?>">Democratic Republic of Congo (CD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CK')]['COUNTRY-CODE']; ?>">Cook Islands (CK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CR')]['COUNTRY-CODE']; ?>">Costa Rica (CR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CI')]['COUNTRY-CODE']; ?>">Côte d'Ivoire (CI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HR')]['COUNTRY-CODE']; ?>">Croatia (HR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CU')]['COUNTRY-CODE']; ?>">Cuba (CU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CY')]['COUNTRY-CODE']; ?>">Cyprus (CY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CZ')]['COUNTRY-CODE']; ?>">Czech Republic (CZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DK')]['COUNTRY-CODE']; ?>">Denmark (DK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DJ')]['COUNTRY-CODE']; ?>">Djibouti (DJ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DM')]['COUNTRY-CODE']; ?>">Dominica (DM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DO')]['COUNTRY-CODE']; ?>">Dominican Republic (DO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('EC')]['COUNTRY-CODE']; ?>">Ecuador (EC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('EG')]['COUNTRY-CODE']; ?>">Egypt (EG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SV')]['COUNTRY-CODE']; ?>">El Salvador (SV)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GQ')]['COUNTRY-CODE']; ?>">Equatorial Guinea (GQ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ER')]['COUNTRY-CODE']; ?>">Eritrea (ER)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('EE')]['COUNTRY-CODE']; ?>">Estonia (EE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ET')]['COUNTRY-CODE']; ?>">Ethiopia (ET)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FK')]['COUNTRY-CODE']; ?>">Falkland Islands (FK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FO')]['COUNTRY-CODE']; ?>">Faroe Islands (FO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FJ')]['COUNTRY-CODE']; ?>">Fiji (FJ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FI')]['COUNTRY-CODE']; ?>">Finland (FI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE']; ?>" selected>France (FR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GF')]['COUNTRY-CODE']; ?>">French Guiana (GF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PF')]['COUNTRY-CODE']; ?>">French Polynesia (PF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GA')]['COUNTRY-CODE']; ?>">Gabon (GA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GM')]['COUNTRY-CODE']; ?>">The Gambia (GM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GE')]['COUNTRY-CODE']; ?>">Georgia (GE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('DE')]['COUNTRY-CODE']; ?>">Germany (DE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GH')]['COUNTRY-CODE']; ?>">Ghana (GH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GI')]['COUNTRY-CODE']; ?>">Gibraltar (GI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GR')]['COUNTRY-CODE']; ?>">Greece (GR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GL')]['COUNTRY-CODE']; ?>">Greenland (GL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GD')]['COUNTRY-CODE']; ?>">Grenada (GD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GP')]['COUNTRY-CODE']; ?>">Guadeloupe (GP)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GU')]['COUNTRY-CODE']; ?>">Guam (GU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GT')]['COUNTRY-CODE']; ?>">Guatemala (GT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GN')]['COUNTRY-CODE']; ?>">Guinea (GN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GW')]['COUNTRY-CODE']; ?>">Guinea-Bissau (GW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GY')]['COUNTRY-CODE']; ?>">Guyana (GY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HT')]['COUNTRY-CODE']; ?>">Haiti (HT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VA')]['COUNTRY-CODE']; ?>">Vatican City (VA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HN')]['COUNTRY-CODE']; ?>">Honduras (HN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HK')]['COUNTRY-CODE']; ?>">Hong Kong (HK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('HU')]['COUNTRY-CODE']; ?>">Hungary (HU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IS')]['COUNTRY-CODE']; ?>">Iceland (IS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IN')]['COUNTRY-CODE']; ?>">India (IN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ID')]['COUNTRY-CODE']; ?>">Indonesia (ID)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IR')]['COUNTRY-CODE']; ?>">Iran (IR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IQ')]['COUNTRY-CODE']; ?>">Iraq (IQ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IE')]['COUNTRY-CODE']; ?>">Ireland (IE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IL')]['COUNTRY-CODE']; ?>">Israel (IL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('IT')]['COUNTRY-CODE']; ?>">Italy (IT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('JM')]['COUNTRY-CODE']; ?>">Jamaica (JM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('JP')]['COUNTRY-CODE']; ?>">Japan (JP)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('JO')]['COUNTRY-CODE']; ?>">Jordan (JO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KZ')]['COUNTRY-CODE']; ?>">Kazakhstan (KZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KE')]['COUNTRY-CODE']; ?>">Kenya (KE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KI')]['COUNTRY-CODE']; ?>">Kiribati (KI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KR')]['COUNTRY-CODE']; ?>">South Korea (KR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KW')]['COUNTRY-CODE']; ?>">Kuwait (KW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KG')]['COUNTRY-CODE']; ?>">Kyrgyzstan (KG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LA')]['COUNTRY-CODE']; ?>">Laos (LA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LV')]['COUNTRY-CODE']; ?>">Latvia (LV)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LB')]['COUNTRY-CODE']; ?>">Lebanon (LB)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LS')]['COUNTRY-CODE']; ?>">Lesotho (LS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LR')]['COUNTRY-CODE']; ?>">Liberia (LR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LY')]['COUNTRY-CODE']; ?>">Libya (LY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LI')]['COUNTRY-CODE']; ?>">Liechtenstein (LI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LT')]['COUNTRY-CODE']; ?>">Lithuania (LT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LU')]['COUNTRY-CODE']; ?>">Luxembourg (LU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MO')]['COUNTRY-CODE']; ?>">Macau (MO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MK')]['COUNTRY-CODE']; ?>">Macedonia (MK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MG')]['COUNTRY-CODE']; ?>">Madagascar (MG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MW')]['COUNTRY-CODE']; ?>">Malawi (MW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MY')]['COUNTRY-CODE']; ?>">Malaysia (MY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MV')]['COUNTRY-CODE']; ?>">Maldives (MV)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ML')]['COUNTRY-CODE']; ?>">Mali (ML)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MT')]['COUNTRY-CODE']; ?>">Malta (MT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MH')]['COUNTRY-CODE']; ?>">Marshall Islands (MH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MQ')]['COUNTRY-CODE']; ?>">Martinique (MQ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MR')]['COUNTRY-CODE']; ?>">Mauritania (MR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MU')]['COUNTRY-CODE']; ?>">Mauritius (MU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('YT')]['COUNTRY-CODE']; ?>">Mayotte (YT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MX')]['COUNTRY-CODE']; ?>">Mexico (MX)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FM')]['COUNTRY-CODE']; ?>">Federated States of Micronesia (FM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MD')]['COUNTRY-CODE']; ?>">Moldova (MD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MC')]['COUNTRY-CODE']; ?>">Monaco (MC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MN')]['COUNTRY-CODE']; ?>">Mongolia (MN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ME')]['COUNTRY-CODE']; ?>">Montenegro (ME)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MS')]['COUNTRY-CODE']; ?>">Montserrat (MS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MA')]['COUNTRY-CODE']; ?>">Morocco (MA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MZ')]['COUNTRY-CODE']; ?>">Mozambique (MZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MM')]['COUNTRY-CODE']; ?>">Burma Myanmar (MM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NA')]['COUNTRY-CODE']; ?>">Namibia (NA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NR')]['COUNTRY-CODE']; ?>">Nauru (NR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NP')]['COUNTRY-CODE']; ?>">Nepal (NP)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NL')]['COUNTRY-CODE']; ?>">Netherlands (NL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AN')]['COUNTRY-CODE']; ?>">Netherlands Antilles (AN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NC')]['COUNTRY-CODE']; ?>">New Caledonia (NC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NZ')]['COUNTRY-CODE']; ?>">New Zealand (NZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NI')]['COUNTRY-CODE']; ?>">Nicaragua (NI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NE')]['COUNTRY-CODE']; ?>">Niger (NE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NG')]['COUNTRY-CODE']; ?>">Nigeria (NG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NU')]['COUNTRY-CODE']; ?>">Niue (NU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NF')]['COUNTRY-CODE']; ?>">Norfolk Island (NF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MP')]['COUNTRY-CODE']; ?>">Northern Mariana Islands (MP)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('NO')]['COUNTRY-CODE']; ?>">Norway (NO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('OM')]['COUNTRY-CODE']; ?>">Oman (OM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PK')]['COUNTRY-CODE']; ?>">Pakistan (PK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PW')]['COUNTRY-CODE']; ?>">Palau (PW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PS')]['COUNTRY-CODE']; ?>">Palestine (PS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PA')]['COUNTRY-CODE']; ?>">Panama (PA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PG')]['COUNTRY-CODE']; ?>">Papua New Guinea (PG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PY')]['COUNTRY-CODE']; ?>">Paraguay (PY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PE')]['COUNTRY-CODE']; ?>">Peru (PE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PH')]['COUNTRY-CODE']; ?>">Philippines (PH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PL')]['COUNTRY-CODE']; ?>">Poland (PL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PT')]['COUNTRY-CODE']; ?>">Portugal (PT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PR')]['COUNTRY-CODE']; ?>">Puerto Rico (PR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('QA')]['COUNTRY-CODE']; ?>">Qatar (QA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RE')]['COUNTRY-CODE']; ?>">Rénion (RE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RO')]['COUNTRY-CODE']; ?>">Romania (RO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RU')]['COUNTRY-CODE']; ?>">Russia (RU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RW')]['COUNTRY-CODE']; ?>">Rwanda (RW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('BL')]['COUNTRY-CODE']; ?>">Saint BarthÃ©lemy (BL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SH')]['COUNTRY-CODE']; ?>">Saint Helena (SH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('KN')]['COUNTRY-CODE']; ?>">Saint Kitts and Nevis (KN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LC')]['COUNTRY-CODE']; ?>">St. Lucia (LC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('MF')]['COUNTRY-CODE']; ?>">Saint Martin (MF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('PM')]['COUNTRY-CODE']; ?>">Saint Pierre and Miquelon (PM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VC')]['COUNTRY-CODE']; ?>">Saint Vincent and the Grenadines (VC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('WS')]['COUNTRY-CODE']; ?>">Samoa (WS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SM')]['COUNTRY-CODE']; ?>">San Marino (SM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ST')]['COUNTRY-CODE']; ?>">São Tomé-et-Príncipe (ST)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SA')]['COUNTRY-CODE']; ?>">Saudi Arabia (SA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SN')]['COUNTRY-CODE']; ?>">Senegal (SN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('RS')]['COUNTRY-CODE']; ?>">Serbia (RS)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SC')]['COUNTRY-CODE']; ?>">Seychelles (SC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SL')]['COUNTRY-CODE']; ?>">Sierra Leone (SL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SG')]['COUNTRY-CODE']; ?>">Singapore (SG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SK')]['COUNTRY-CODE']; ?>">Slovakia (SK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SI')]['COUNTRY-CODE']; ?>">Slovenia (SI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SB')]['COUNTRY-CODE']; ?>">Solomon Islands (SB)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SO')]['COUNTRY-CODE']; ?>">Somalia (SO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ZA')]['COUNTRY-CODE']; ?>">South Africa (ZA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ES')]['COUNTRY-CODE']; ?>">Spain (ES)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('LK')]['COUNTRY-CODE']; ?>">Sri Lanka (LK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SD')]['COUNTRY-CODE']; ?>">Sudan (SD)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SR')]['COUNTRY-CODE']; ?>">Suriname (SR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SZ')]['COUNTRY-CODE']; ?>">Swaziland (SZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SE')]['COUNTRY-CODE']; ?>">Sweden (SE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('CH')]['COUNTRY-CODE']; ?>">Switzerland (CH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('SY')]['COUNTRY-CODE']; ?>">Syria (SY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TW')]['COUNTRY-CODE']; ?>">Taiwan (TW)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TJ')]['COUNTRY-CODE']; ?>">Tajikistan (TJ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TZ')]['COUNTRY-CODE']; ?>">Tanzania (TZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TH')]['COUNTRY-CODE']; ?>">Thailand (TH)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TL')]['COUNTRY-CODE']; ?>">Timor-Leste (TL)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TG')]['COUNTRY-CODE']; ?>">Togo (TG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TK')]['COUNTRY-CODE']; ?>">Tokelau (TK)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TO')]['COUNTRY-CODE']; ?>">Tonga (TO)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TT')]['COUNTRY-CODE']; ?>">Trinidad and Tobago (TT)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TN')]['COUNTRY-CODE']; ?>">Tunisia (TN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TR')]['COUNTRY-CODE']; ?>">Turkey (TR)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TM')]['COUNTRY-CODE']; ?>">Turkmenistan (TM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TC')]['COUNTRY-CODE']; ?>">Turks and Caicos Islands (TC)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('TV')]['COUNTRY-CODE']; ?>">Tuvalu (TV)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UG')]['COUNTRY-CODE']; ?>">Uganda (UG)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UA')]['COUNTRY-CODE']; ?>">Ukraine (UA)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('AE')]['COUNTRY-CODE']; ?>">United Arab Emirates (AE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('GB')]['COUNTRY-CODE']; ?>">United Kingdom (GB)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('US')]['COUNTRY-CODE']; ?>">United States (US)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UY')]['COUNTRY-CODE']; ?>">Uruguay (UY)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VI')]['COUNTRY-CODE']; ?>">US Virgin Islands (VI)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('UZ')]['COUNTRY-CODE']; ?>">Uzbekistan (UZ)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VU')]['COUNTRY-CODE']; ?>">Vanuatu (VU)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VE')]['COUNTRY-CODE']; ?>">Venezuela (VE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('VN')]['COUNTRY-CODE']; ?>">Vietnam (VN)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('WF')]['COUNTRY-CODE']; ?>">Wallis and Futuna (WF)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('YE')]['COUNTRY-CODE']; ?>">Yemen (YE)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ZM')]['COUNTRY-CODE']; ?>">Zambia (ZM)</option>
	<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('ZW')]['COUNTRY-CODE']; ?>">Zimbabwe (ZW)</option>
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