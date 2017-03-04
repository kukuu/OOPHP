<?php
	$somevar = 15;
	function addit() {
			$GLOBALS ["somevar"]++;//used in an array it is used as a string
	} 
	addit(); 
	print "somevar is " . $GLOBALS["somevar"];

?>
