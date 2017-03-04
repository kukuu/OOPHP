<?php
	//continue allows you to break the execution at a point (using  set condition) and re-commence processing.
			$username = array ("grace","doris","gary","nate","missing","tom");
			print "<strong>Team members for today are:</strong> <br />";
			for($x=0; $x < count($username); $x++){
				if($username[$x] == "missing")  continue;//skip missing
				printf ("%s  <br />", $username[$x]);	
			}
?>

