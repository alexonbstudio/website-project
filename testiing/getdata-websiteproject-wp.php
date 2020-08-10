<?php
/*
How to GET data with PHP

Website Project Website 
Copyright (c) AlexonbStudio by Alexon Balangue

You arpossible to use other technologie for javascript Ajax JsonP and more techno what you prefer python, etc...

*/
		$domain = 'alexonbstudio.yo.fr';
		$name = ''; /*if empty get data name auto*/
		
		
		$wp_sites = json_decode(file_get_contents('https://'.$domain .'/api/sites.json'), true);
		$wp_business = json_decode(file_get_contents('https://'.$domain .'/api/business.json'), true);
		$wp_images = json_decode(file_get_contents('https://'.$domain .'/api/images.json'), true);
		
		
		# API JSON DECODE Website Project WP - SITES
		$nameJsonWP_sites = ($name !='') ? $name : $wp_sites['name'];
		$sitesJsonWP_sites = ($sites !='') ? $domain : $wp_sites['domain'];
		
		if(!empty($sitesJsonWP_sites)){
			$domainTLD = $sitesJsonWP_sites;
		} else {
			$domainTLD = $wp_sites['auto']['domain'];
		}
		
		# API JSON DECODE Website Project WP - BUSINESS
		$nameJsonWP_business = ($business !='') ? $business : $wp_business['local']['name'];
		$siretJsonWP_business = ($siret !='') ? $siret : $wp_business['local']['siret'];
		$tvaJsonWP_business = ($tva !='') ? $tva : $wp_business['local']['tva'];
		$addressJsonWP_business = ($address !='') ? $address : $wp_business['local']['address'];
		$postalJsonWP_business = ($postal !='') ? $postal : $wp_business['local']['postal'];
		$cityJsonWP_business = ($city !='') ? $city : $wp_business['local']['city'];
		$regionJsonWP_business = ($region !='') ? $region : $wp_business['local']['region'];
		$contryJsonWP_business = ($contry !='') ? $contry : $wp_business['local']['contry'];
		$statusJsonWP_business = ($status !='') ? $status : $wp_business['local']['status'];
		
		$phoneJsonWP_business = ($phone !='') ? $phone : $wp_business['local']['phone']['number'];
		$mobileJsonWP_business = ($mobile !='') ? $mobile : $wp_business['local']['mobile']['number'];
		$faxJsonWP_business = ($fax !='') ? $fax : $wp_business['local']['fax']['number'];
		
		# API JSON DECODE Website Project WP - IMAGES
		$logoJsonWP_images = ($logo !='') ? $logo : $wp_sites['protocol'].'://'.$domainTLD.'/'.$wp_images['dir'].'/'.$wp_images['manager']['logo']['big'];
		
		# prepared show article output
		if(!empty($phoneJsonWP_business)){
			$showphoneNumber = '<a rel="nofollow" href="tel:'.$wp_business['local']['phone']['code'].$phoneJsonWP_business.'">'.$wp_business['local']['phone']['normal'].' '.$phoneJsonWP_business.'</a>';
		}
		
		if(!empty($mobileJsonWP_business)){
			$showmobileNumber = '<a rel="nofollow" href="tel:'.$wp_business['local']['mobile']['code'].$mobileJsonWP_business.'">'.$wp_business['local']['mobile']['normal'].' '.$mobileJsonWP_business.'</a>';
		}
		
		if(!empty($faxJsonWP_business)){
			$showfaxNumber = '<a rel="nofollow" href="tel:'.$wp_business['local']['fax']['code'].$faxJsonWP_business.'">'.$wp_business['local']['fax']['normal'].' '.$faxJsonWP_business.'</a>';
		}
		
		if(!empty($logoJsonWP_images)){
			$showLogo = '<img class="img-fluid" src="'.$logoJsonWP_images.'" alt="'.$nameJsonWP_business.'">';
		}
		

		
?>

<?php echo $showLogo; ?><br>
					
<a href="<?php echo $domainTLD; ?>"><?php echo '<b>'.$nameJsonWP_business.'</b> '.$statusJsonWP_business; ?></a>
<p>
Address: <?php echo $addressJsonWP_business.' '.$postalJsonWP_business.' '.$cityJsonWP_business.' '.$regionJsonWP_business.' '.$contryJsonWP_business; ?><br>
phone: <?php echo $showphoneNumber; ?> <br>
mobile: <?php echo $showmobileNumber; ?> <br>
fax: <?php echo $showfaxNumber; ?><br>
</p>