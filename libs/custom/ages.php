<?php
/* 
# first method
function age($data){
	$BirthdayDate = explode("/", $data); 
	$age_out = (date("md", date("U", mktime(0, 0, 0, $BirthdayDate[0], $BirthdayDate[1], $BirthdayDate[2]))) > date("md") ? ((date("Y") - $BirthdayDate[2]) - 1) : (date("Y") - $BirthdayDate[2]));		 	
	return $age_out;	
}
# second method
*/		
function age($born){
	$InDateBorn = explode('/', $born);
	$OutDateBornAuto = explode('/', date('d/m/Y'));
	if(($InDateBorn[1] < $OutDateBornAuto[1]) || (($InDateBorn[1] == $OutDateBornAuto[1]) && ($InDateBorn[0] <= $OutDateBornAuto[0]))) return $OutDateBornAuto[2] - $InDateBorn[2];
	return $OutDateBornAuto[2] - $InDateBorn[2] - 1;
}

# exemple : echo age('24/04/1991');

?>