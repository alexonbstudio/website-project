<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


require 'libs/custom/compress.php'; 
#configuration
include_once 'configuration/sites.php';
include_once 'configuration/social.php';
include_once 'configuration/sponsor.php';
include_once 'configuration/translate.php';
include_once 'configuration/version.php';
include_once 'configuration/seo.php';
include_once 'configuration/private.php';
include_once 'configuration/partner.php';
include_once 'configuration/hosting.php';
include_once 'configuration/credits.php';
include_once 'configuration/marketing.php';
include_once 'configuration/images.php';
include_once 'configuration/business.php';
/*
include_once 'configuration/market.php';
include_once 'configuration/restaurant.php';
*/


#Decode
$sites = json_decode($JE_sites, true);
$sponsor_config = json_decode($JE_sponsor_config, true);
$partner_config = json_decode($JE_partner_config, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$business = json_decode($JE_business, true);


#Syslink
$protocols = $sites['protocol'];
$Languages_translate = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $translate['auto']['seo'] : $translate['manual']['frontend']['french'];

#Configuration
$lang_finales = 'languages/'.$Languages_translate.'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$Languages_translate.'/general.php'; 
    include_once 'languages/'.$Languages_translate.'/partner.php'; 
    include_once 'languages/'.$Languages_translate.'/sponsor.php'; 
    include_once 'languages/'.$Languages_translate.'/law.php'; 
    include_once 'languages/'.$Languages_translate.'/email.php'; 
    include_once 'languages/'.$Languages_translate.'/block.php'; 
    include_once 'languages/'.$Languages_translate.'/sitemap.php'; 
    include_once 'languages/'.$Languages_translate.'/about.php'; 
    include_once 'languages/'.$Languages_translate.'/pool-services.php'; 
    include_once 'languages/'.$Languages_translate.'/pricing.php'; 
    include_once 'languages/'.$Languages_translate.'/faqs.php'; 
    include_once 'languages/'.$Languages_translate.'/others.php'; 
    include_once 'languages/'.$Languages_translate.'/debug.php'; 
} else {
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/general.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/partner.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sponsor.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/law.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/email.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/block.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sitemap.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/about.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/pool-services.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/pricing.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/faqs.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/others.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/debug.php'; 
}

#Translate
$general = json_decode($JE_translate_general, true);
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);
$about = json_decode($JE_translate_about, true);
$pool = json_decode($JE_translate_pool, true);
$pricing = json_decode($JE_translate_pricing, true);
$faqs = json_decode($JE_translate_faqs, true);
$others = json_decode($JE_translate_others, true);
$debug = json_decode($JE_translate_debug, true);

#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception; test
require 'libs/phpmailer/src/PHPMailer.php';
$mail = new PHPMailer(true);

#Joomla utilities
require 'libs/joomla/utilities/src/IpHelper.php';
use Joomla\Utilities\IpHelper;



if (array_key_exists('teams', $_POST) && array_key_exists('userfile', $_FILES)) {
    $err_email = false;
    $msg_email = '';
    $email_email = '';
    //Apply some basic validation and filtering teams the subject
    if (array_key_exists('subject', $_POST)) {
        $subject_email = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject_email = $email['index']['content']['placeholder']['subject'];
    }
    //Apply some basic validation and filtering teams the message
    if (array_key_exists('message', $_POST)) {
        //Limit length and strip HTML tags
        $message_email = substr(strip_tags($_POST['message']), 0, 16384);
    } else {
        $message_email = '';
        $msg_email = $email['index']['content']['placeholder']['message'];
        $err_email = true;
    }
    //Apply some basic validation and filtering teams the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name_email = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name_email = $email['index']['content']['placeholder']['name'];
    }
    
	
    if (array_key_exists('teams', $_POST) && in_array($_POST['teams'], [$business['local']['mail']['support'], $business['local']['mail']['commercial'], $business['local']['mail']['business']], true)) {
        $teams_email = $_POST['teams'].'@'.$sites['domain'];
    } else {
        $teams_email = $business['local']['mail']['contact'].'@'.$sites['domain'];
    }
    
	if (array_key_exists('pools', $_POST) && in_array($_POST['pools'], [$pool['association']['title'], $pool['entrepreneur']['title']], true)) {
		$pool_email = $_POST['pool'];
	} else {
		$pool_email = $pool['entrepreneur']['title'];
		$msg_email .= $email['index']['content']['placeholder']['pool'];
		$err_email = true;
	}
	
    if (array_key_exists('compagny', $_POST)) {
        //Limit length and strip HTML tags
        $compagny_email = substr(strip_tags($_POST['compagny']), 0, 255);
    } else {
        $compagny_email = '';
		$msg_email .= $email['index']['content']['placeholder']['compagny'];
		$err_email = true;
    }
	
    if (array_key_exists('siret', $_POST)) {
        //Limit length and strip HTML tags
        $siret_email = substr(strip_tags($_POST['siret']), 0, 255);
    } else {
        $siret_email = '';
		$msg_email .= $email['index']['content']['placeholder']['siret'];
		$err_email = true;
    }
	
    if (array_key_exists('video', $_POST)) {
        //Limit length and strip HTML tags
        $video_email = substr(strip_tags($_POST['video']), 0, 255);
    } else {
        $video_email = '';
		$msg_email .= $email['index']['content']['placeholder']['video'];
		$err_email = true;
    }
	
    if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
		date_default_timezone_set($sites['default-timezone']);
        $email_email = $_POST['email'];
    } else {
        $msg_email .= $email['index']['content']['placeholder']['email'];
        $err_email = true;
    }
	if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])){
		# anti spam with HCAPTCHA
		$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.
			$seo['hcaptcha']['private-key'].'&response='.
			$_POST['h-captcha-response'].'&remoteip='.
			IpHelper::getIp());
		$hcaptcha_RData = json_decode($hcaptcha_VResponse);

		if (!$err_email && $hcaptcha_RData->success) {
			$mail->setFrom($business['local']['mail']['contact'].'@'.$sites['domain'], (empty($name_email) ? '' : $name_email));
			$mail->addAddress($teams_email, $sites['domain']);
			//$mail->addReplyteams($email_email, $name_email);
			
			if ($mail->addReplyTo($email_email, $name_email)) {
				$mail->isHTML(true);
				$mail->Subject = $subject_email.' ('.$email['index']['title'].') - '.$sites['domain'].'.';
				/*
				#Solution 1
				ob_start("ob_html_compress");
				include 'themes/email/backend.php';
				$body = ob_get_clean();
				$mail->msgHTML($body, dirname(__FILE__));
				*/
				#Solution 2
				/*$vars = array(
					'subject' => $_POST['subject'],
					'email' => $_POST['email'],
					'name' => $_POST['name'],
					'phone' => $_POST['phone'],
					'message' => $_POST['message'],
				);
				$body = file_get_contents('themes/email/public.php');

				if(isset($vars)){
					foreach($email_vars as $k=>$v){
						$body = str_replace('{'.strtoupper($k).'}', $v, $body);
					}
				}
				$mail->msgHTML($body, dirname(__FILE__));
				#$mail->msgHTML(file_get_contents('contents.html'), __DIR__);*/
				# Solution 3
				$mail->Body = '<h2>'.$email['index']['title'].': '.$sites['domain'].'</h2>
					<h4>'.$email['index']['default']['content']['default']['subject'].':</h4> '.$subject_email.'<br /><br />
					<strong>'.$email['index']['content']['default']['email'].':</strong> '.$email_email.'<br /><br />
					<strong>'.$email['index']['content']['default']['name'].':</strong> '.$name_email.'<br /><br />
					<strong>'.$email['index']['content']['default']['compagny'].':</strong> '.$compagny_email.'<br /><br />
					<strong>'.$email['index']['content']['default']['siret'].':</strong> '.$siret_email.'<br /><br />
					<strong>'.$email['index']['content']['default']['video'].':</strong> '.$video_email.'<br /><br />
					<strong>'.$email['index']['content']['default']['phone'].':</strong> '.$_POST['phone'].'<br /><br />
					<strong>'.$email['index']['content']['default']['message'].':</strong> '.$message_email;
					

				for ($counts_email = 0; $counts_email < count($_FILES['userfile']['tmp_name']); $counts_email++) {
					$uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$counts_email]));
					$filename = $_FILES['userfile']['name'][$counts_email];
					if (move_uploaded_file($_FILES['userfile']['tmp_name'][$counts_email], $uploadfile)) {
						$mail->addAttachment($uploadfile, $filename);
					} else {
						$msg_email .= 'Failed to move file to ' . $uploadfile;
					}
				}	
				
				if (!$mail->send()) {
					header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
				} else {
					header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['success']['url']['default']);
				}
			} else {
				header('Location: '.$protocols.'://'.$sites['domain'].'/'.$block['error']['url']['default']);
			}
		}
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHPMailer Contact Form</title>
</head>
<body>
<h1>Contact us</h1>
<?php if (empty($msg_email)) { ?>
    <form method="post" enctype="multipart/form-data">
        <label for="teams">Send teams:</label>
        <select name="teams" id="teams">
            <option value="<?php echo $business['local']['mail']['business']; ?>" selected="selected"><?php echo $business['local']['mail']['business']; ?></option>
            <option value="<?php echo $business['local']['mail']['support']; ?>"><?php echo $business['local']['mail']['support']; ?></option>
            <option value="<?php echo $business['local']['mail']['commercial']; ?>"><?php echo $business['local']['mail']['commercial']; ?></option>
        </select><br>
        <label for="pool">POOL:</label>
        <select name="pool" id="pool">
            <option value="<?php echo $pool['entrepreneur']['title']; ?>" selected="selected"><?php echo $pool['entrepreneur']['title']; ?></option>
            <option value="<?php echo $pool['association']['title']; ?>"><?php echo $pool['association']['title']; ?></option>
        </select><br>
		
        <label for="compagny">compagny: <input type="text" name="compagny" id="compagny" maxlength="255"></label><br>
        <label for="video">URL video: <input type="text" name="video" id="video" maxlength="255"></label><br>
        <label for="siret">siret (certificat business): <input type="text" name="siret" id="siret" maxlength="255"></label><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <input name="userfile[]" type="file" multiple="multiple">
        <label for="subject">Subject: <input type="text" name="subject" id="subject" maxlength="255"></label><br>
        <label for="name">Your name: <input type="text" name="name" id="name" maxlength="255"></label><br>
        <label for="email">Your email address: <input type="email" name="email" id="email" maxlength="255"></label><br>
        <label for="message">Your question:</label><br>
        <textarea cols="30" rows="8" name="message" id="message" placeholder="Your question"></textarea><br>
        <input type="submit" value="Submit">
		<div class="text-center"><button type="submit"><?php echo $email['index']['content']['form']['send']; ?></button></div>
    </form>
<?php 
} else {
    echo $msg_email;
} 
?>
</body>
</html>


<?php
if(isset($_POST['submit'])){
    if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])){
        // get verify response
        $data = array(
              'secret' => "my-secret",
              'response' => "my-response"
          );
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL,   "https://hcaptcha.com/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $verifyResponse = curl_exec($verify);
        $responseData = json_decode($verifyResponse);
		$name = !empty($_POST['name'])?$_POST['name']:'';
		$email = !empty($_POST['email'])?$_POST['email']:'';
		$message = !empty($_POST['message'])?$_POST['message']:'';
		
        if($responseData->success){
			  //contact form submission code
			  $to = 'your@email.com';
			  $subject = 'New contact form has been submitted';
			  $htmlContent = "
				<h1>Contact request details</h1>
				<p><b>Name: </b>".$name."</p>
				<p><b>Email: </b>".$email."</p>
				<p><b>Message: </b>".$message."</p>
			  ";
			  // Always set content-type when sending HTML email
			  $headers = "MIME-Version: 1.0" . "\r\n";
			  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			  // More headers
			  $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
			  //send email
			  @mail($to,$subject,$htmlContent,$headers);
			  
					$succMsg = 'Your contact request has been submitted successfully.';
			  $name = '';
			  $email = '';
			  $message = '';
        } else {
            $errMsg = 'hCaptcha verification failed. Please try again.';
        }
    } else{
        $errMsg = 'Please click on the hCaptcha button.';
    }
} else {
    $errMsg = '';
    $succMsg = '';
  $name = '';
  $email = '';
  $message = '';
}
?>
<html>
    <head>
      <title>Using hCaptcha with PHP</title>
       <script src="https://www.hCaptcha.com/1/api.js" async defer></script>
    </head>
    <body>
    <div>
    <h2>Contact Form</h2>
        <?php if(!empty($errMsg)): ?><div class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
        <?php if(!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
    <div>
      <form action="" method="POST">
        <input type="text" class="text" value="<?php echo !empty($name)?$name:''; ?>" placeholder="Your full name" name="name" >
                <input type="text" class="text" value="<?php echo !empty($email)?$email:''; ?>" placeholder="Email adress" name="email" >
                <textarea type="text" placeholder="Message..." required="" name="message"><?php echo !empty($message)?$message:''; ?></textarea>
        <div class="h-captcha" data-sitekey="<YOUR-SITE-KEY>"></div>
        <input type="submit" name="submit" value="SUBMIT">
      </form>
    </div>      
    <div class="clear"> </div>
  </div>
  </body>
</html>