<?php
# $phone_results['switch']['icon']
$phone_results = array(
	'switch' => array(
		'FIXED-LINE' => 'LIGNE FIXE',
		'MOBILE' => 'MOBILE',
		'FIXED-LINE-OR-MOBILE' => 'LIGNE FIXE OU MOBILE',
		'TOLL-REE' => 'SANS PÉAGE',
		'PREMIUM-RATE' => 'TARIF PREMIUM',
		'SHARED-COST' => 'COÛT PARTAGÉ',
		'VOIP' => 'VOIP',
		'PERSONAL NUMBER' => 'NUMÉRO PERSONNEL',
		'PAGER' => 'BEEPER',
		'UAN' => 'UAN',
		'UNKNOWN' => 'INCONNUE',
		'EMERGENCY' => 'URGENCE',
		'VOICEMAIL' => 'VOICEMAIL',
		'SHORT-CODE' => 'PETIT CODE',
		'STANDARD RATE' => 'TAUX STANDARD'
	),
	'true' => array(
		'icon' => '<i class="fas fa-check fa-3x"></i>',
		'text' => 'Correct'
	),
	'false' => array(
		'icon' => '<i class="fas fa-ban fa-3x"></i>',
		'text' => 'Faux'
	)
);

$JE_translate_phone_results = json_encode($phone_results);

?>