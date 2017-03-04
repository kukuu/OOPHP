<?php
	$somevar = 15;
	function addit() {
		GLOBAL $somevar;
		$somevar++;
	}
	addit();
	print "somevar is $somevar<br />";
	
	
	function addit2() {
		GLOBAL $somevar;
		$somevar--;
	}
	addit2();
	
	print "somevar is $somevar";
?>
