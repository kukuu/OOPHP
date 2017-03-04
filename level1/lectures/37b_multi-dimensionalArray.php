<?php
	$family = array("Tom","Ian","Sophie");
	$family = array("Pat","Frances","Athur","John");
	$rows = count($family);
	for($i<0;$i<$rows;$i++) { 
		$cols =  count($family[i]);//check for position for columns before looping

		for($j<0;$j<$cols;$j++) {
			echo $family[$i][$j] . ' ';	
		}
		echo "<br  />";
	}
       ?>
