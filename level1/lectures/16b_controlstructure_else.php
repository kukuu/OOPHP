<html>
<body>
<?php
	//This is a classic example. Pre-defined names given to persons depending on which day they were born in Ghana 
	$d=date("D");// Using php date object
	//Associate the date object with an instance
	if($d=="Fri"){
		echo "Today is Friday. Have a nice weekend <br />";
		echo " See you Monday";
		echo "If you were born on Friday, then you are Kofi";	
	}
	
	elseif ($d=="Thur"){
		echo "Today is Thursday <br />";
		echo "You are Yaw";
	}
	
	elseif ($d=="Wed"){
		echo "Today is Wednesday <br />";
		echo "You are Kweku";
	}
	elseif ($d=="Tue"){
		echo "Today is Tuesday<br />";
		echo "You are Kwabena";
	}

	elseif ($d=="Sat"){
		echo "Today is Saturday<br />";
		echo "You are Kwame";
	}
	
	elseif ($d=="Sun"){
		echo "Today is Sunday<br />";
		echo "You are Kwesi";
	}
		else {
		echo "Today is Monday <br />";	
		echo "You are Kojo";	
	}

?>
</body>
</html>
