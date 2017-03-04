<?php
	$family = array("Tom","Ian","Sophie","Alex");
	$family = array("Pat","Frances","Athur","John");
	$rows = count($family);
	$cols =  count($family[0]);//MUST set first item in column field
	//Column count is NESTED in row count.
	for($i<0;$i<$rows;$i++) {
		for($j<0;$j<$cols;$j++) {
			echo $family[$i][$j] . ' ';	
		}
	echo "<br  />";
	}
       ?>

