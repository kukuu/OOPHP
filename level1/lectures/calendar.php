<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Calendar; Using FOREACH LOOP</title>
</head>

<body>
<h1>Calendar widget</h1>
<form action="calendar.php" method="post">
	<?php 
	#Author: Alexander Adu-Sarkodie
	#Application name: calendar.php
		
		// The script makes three pull down menus
		//For an html form ; months,days and years
		
		//Make the months array;
		//The first month uses number as key. 
		//Since it is used PHP will create incremental indexing for the rest (1 to 12)
		$months = array (1 => 'January',
		'February','March','April','May','June',
		'October','November','December');
		
		//Make the days and years arrays
		
		$days = range (1,31);
		$years = range (2008,2018);
		
		//Make the months a pull down menu
		
		echo '<select name="month">';
			foreach ($months as $key => $value) {
				echo "<option value=\"$key\">$value</option>\n";
			}	
		echo '</select>';
		
		//Make days pull down menu
		echo '<select name="days">';
			foreach ($days as $value) {
				echo "<option value=\"$value\">$value</option>\n";
			}	
		echo '</select>';
		
		//Make years pull down menu
		echo '<select name="years">';
			foreach ($years as $value) {
				echo "<option value=\"$value\">$value</option>\n";
			}	
		echo '</select>';
		
		#tips
		# If an invalid argument is supplied in a foreach loop and causes an error, that means the foreach loop is being applied to a variable type that is not an array not array

		# $num = count($months);
		# range ('a' , 'z')
		
	?>

</form>
</body>
</html>
