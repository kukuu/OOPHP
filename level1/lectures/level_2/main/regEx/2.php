<?php
	// create a string
	$string = 'abcdefghijklmnopqrstuvwxyz0123456789';
	//Note the use of conditional statements
	// try to match the beginning of the string. Use the preg_match function and pass parameters (2 in this case)
	if(preg_match("/^abc/", $string)){
	    // if it matches we echo this line
	    echo 'The string begins with abc';
	}
	else {
	    // if no match is found echo this line
	    echo 'No match found';
	}
?> 