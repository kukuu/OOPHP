  <?php
//using sizeof function allows you to grab all the objects in the data set

$customerName = Array ("Alex","Michael","John");
			for($i=0;$i<sizeof($customerName);$i++) {
				echo "$customerName[$i] <br />";
			}
		?>
