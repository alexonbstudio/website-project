<?
# only France cellphone or phone/ mobile restrict number authorizate only
$pattern_out = '/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/';

# maybe international
$pattern_out = '/^\+[0-9]{1,3}\.[0-9]{4,14}(?:x.+)?$/';

# PHPMAILER PHONE NUMBER
if (array_key_exists('email', $_POST) && preg_match($pattern_out, $_POST['phone'])) 
	

*****************************