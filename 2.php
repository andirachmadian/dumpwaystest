<?php

function isPasswordValid($pwd) {
	if (strlen($pwd) < 8)
		return false;
	
	$number = false;
	$upper = false;
	$lower = false;
	$other = false;
	
	$arrPwd = str_split($pwd);
	
	foreach ($arrPwd as $c){
    	if (ctype_upper($c))
			$upper = true;
		else if (ctype_lower($c))
			$lower = true;
		else if (ctype_digit($c))
			$number = true;
		else
			$other = true;
	}
	
	return $number && $upper && $lower && $other;
}

//123Qwer_
//ssdga_A7
//SUper&&4

if (isPasswordValid("SUper&&4"))
	echo "Password Valid";
else
	echo "Password Invalid";
