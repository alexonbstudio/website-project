<?php
# $phone_results['switch']['icon']
$phone_results = array(
	'switch' => array(
		'FIXED-LINE' => 'FIXED LINE',
		'MOBILE' => 'MOBILE',
		'FIXED-LINE-OR-MOBILE' => 'FIXED LINE OR MOBILE',
		'TOLL-REE' => 'TOLL REE',
		'PREMIUM-RATE' => 'PREMIUM RATE',
		'SHARED-COST' => 'SHARED COST',
		'VOIP' => 'VOIP',
		'PERSONAL NUMBER' => 'PERSONAL NUMBER',
		'PAGER' => 'PAGER',
		'UAN' => 'UAN',
		'UNKNOWN' => 'UNKNOWN',
		'EMERGENCY' => 'EMERGENCY',
		'VOICEMAIL' => 'VOICEMAIL',
		'SHORT-CODE' => 'SHORT CODE',
		'STANDARD RATE' => 'STANDARD RATE'
	),
	'true' => array(
		'icon' => '<i class="fas fa-check fa-3x"></i>',
		'text' => 'Correct'
	),
	'false' => array(
		'icon' => '<i class="fas fa-ban fa-3x"></i>',
		'text' => 'Fake'
	)
);

$JE_translate_phone_results = json_encode($phone_results);

?>