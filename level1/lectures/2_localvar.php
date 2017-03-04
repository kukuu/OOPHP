<?php
	$x  = 4;
	function assignx($x) {
		$x  = 1;
		printf("\$x  inside function is  %d <br />" ,$x);	
	}
	assignx($x);
	printf("\$x  outside function is  %d <br /> ",$x);
?>

