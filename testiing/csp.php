<?php
#header("Content-Security-Policy-Report-Only: <vos directives>");
//$SecurityCSP_data = json_decode($HTTP_RAW_POST_DATA,true);
/*
$requestContent = file_get_contents("php://input");
$SecurityCSP_data = json_decode($requestContent, true);

$to = 'myemail@example.com';
$subject = 'CSP Violations';
$message = 'Following violations occured:<br/><br/>';
if($document_uri!=''){
    $message.='<b>Document URI:</b> '.$SecurityCSP_data['csp-report']['document-uri'].'<br/><br/>'; }
if($referrer!=''){
    $message.='<b>Referrer:</b> '.$SecurityCSP_data['csp-report']['referrer'].'<br/><br/>'; }
if($blocked_uri!=''){
    $message.='<b>Blocked URI:</b> '.$SecurityCSP_data['csp-report']['blocked-uri'].'<br/><br/>'; }
if($violated_directive!=''){
    $message.='<b>Violated Directive:</b> '.$SecurityCSP_data['csp-report']['violated-directive'].'<br/><br/>'; }
if($original_policy!=''){
    $message.='<b>Original Policy:</b> '.$SecurityCSP_data['csp-report']['original-policy'].'<br/><br/>'; }

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Example Website <noreply@example.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
*/
//W1zzardTPU - csp-report.php

<?php

// This script will process incoming Content Security Policy violation reports
// and send them, nicely formatted, to the email address listed below.
//
// Included in the script is a large list of false-positives that are generated
// by browser addons etc.
//
// To activate, emit the proper CSP headers via PHP in all your page-generating scripts,
// e.g.: header("Content-Security-Policy-Report-Only: default-src https: wss: data: 'unsafe-eval' 'unsafe-inline'; report-uri /csp-report.php");
// Which we use to track HTTPS mixed-content warnings.
if(!empty($business['local']['name'])){
	$SecurityCSP_emailTo=$business['local']['mail']['contact'].'@'.$domainTLD;
} else {
	$SecurityCSP_emailTo=$private['mail']['public'].'@'.$domainTLD;
}

http_response_code(204);

// Only run if proper input data received
if ($SecurityCSP_data=json_decode(file_get_contents('php://input'), true)){
	if (!isset($SecurityCSP_data['csp-report'])){ return; }
		
	$SecurityCSP_data=$SecurityCSP_data['csp-report'];
	ksort($SecurityCSP_data);
	
	if ($SecurityCSP_data['blocked-uri']==''){ return; }
	
	// Filter out junk reports
	$blockedUris=array('127.0.0.1', ':15871', 'blur://', 'mbinit://', 'ms-appx-web:', 'mx:', 'opera://', 'safari-extension:', 'self');
	
	foreach($blockedUris as $uri)
		if (strpos($SecurityCSP_data['blocked-uri'], $uri)!==FALSE)
			return;
	
	// Prettify the JSON-formatted data
	$SecurityCSP_email=json_encode($SecurityCSP_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)."\r\n\r\n";

	$SecurityCSP_email.=sprintf("%s (%s)\r\n", $_SERVER['REMOTE_ADDR'], gethostbyaddr($_SERVER['REMOTE_ADDR']));
	$SecurityCSP_email.=sprintf("%s\r\n\r\n", $_SERVER['HTTP_USER_AGENT']);
	
	// Mail the CSP violation report
	mail($ecurityCSP_emailTo, 'CSP Violation', $SecurityCSP_email, 'Content-Type: text/plain;charset=utf-8');
}

?>