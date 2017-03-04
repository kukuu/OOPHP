<?php
	//$count.  
	//They are not destroyed on exiting, and can be called for further execution whiles //retaining their value (cumulative);
	function keeptrack() {
		STATIC $count = 3;
		$count++;
		echo $count;
		echo "<br />";
	}
	keeptrack();
	keeptrack();
	keeptrack();
?>
