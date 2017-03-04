<?php 
//It is always best to have a default value to use in case none of the options are //ound. 
//Note there is no use of case in this instance.
// To be constructed after file includes
//$premierClub = "Arsenal";
	switch ($premierClub){
		case "Arsenal":
			include('./arsenal.php');//includes Arsenal list
			break;
		case "Manchester U":
			include('./manu.php');
			break;
		case "Chelsea":
			include('./chelsea.php');
			break;	
		case "Tottenham Hotspurs":
			include('./spurs.php');
			break;	
			
			case "arsenal":
			include('./arsenal.php');
			break;
			
		default:
			echo "Please set a premiere league selection for this page!";
			break;
	}
?>
