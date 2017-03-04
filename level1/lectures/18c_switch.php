<?php 
//It is always best to have a default value to use in case none of the options are found. 
//Note there is no use of case in this instance.
$destination = "New York";
	echo "Traveling to $destination<br />";
	switch ($destination){
		case "Las Vegas":
			echo "Bring an extra $500";
			break;
		case "Amsterdam":
			echo "Bring an open mind";
			break;
		case "Egypt":
			echo "Bring 15 bottles of SPF 50 Sunscreen";
			break;	
		case "Tokyo":
			echo "Bring lots of money";
			break;	
		case "Caribbean Islands":
			echo "Bring a swimsuit";
			break; 	
		default:
			echo "Bring lots of underwear!";
			break;
	}
?>
