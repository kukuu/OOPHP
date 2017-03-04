//Illustrated below is how the Singleton behaves

<?php
$singleton = Example::singleton(); // prints "Creating new instance."
	echo $singleton->increment(); // 0
	echo $singleton->increment(); // 1
	
	$singleton = Example::singleton(); // reuses existing instance now
	echo $singleton->increment(); // 2
	echo $singleton->increment(); // 3
	
	// all of these will raise a Fatal Error
	$singleton2 = new Example;
	$singleton3 = clone $singleton;
	$singleton4 = unserialize(serialize($singleton));
?> 