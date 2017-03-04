<?php
	$capitals= array ("Paris","London","New York");
	$capitals['LN'] = "London";
	$capitals['NY'] = "New York";
	$capitals['PA'] = "Paris";
		//using the key to output specific data.Also note the use of curly braces when accessing arrays
	echo "The capital of England  is <strong>{$capitals['LN']}</strong><br />";
?>


