<?php
#exemple $markets['all']['siege-social']['variable']; 

$markets = array(
	'france' => array(
		'paris' => array(
			'prenom' => '[First name]',
			'adresse' => '[address]',
			'code-postal' => '[zipcode]',
			'villes' => '[city]',
			'pays' => '[contry]'
		)
	),
	'spain' => array(
		'madrid' => array(
			'prenom' => '[First name]',
			'adresse' => '[address]',
			'code-postal' => '[zipcode]',
			'villes' => '[city]',
			'pays' => '[contry]'
		)
	)
);

$encoder3 = json_encode($markets);

?>