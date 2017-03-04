<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Calendar</title>
</head>

<body>
<h1>Calendar widget</h1>

	<?php 
	#Author: Alexander Adu-Sarkodie
	#Application name: calendar.php
	
		
		
		//This function makes 3 pull down menus
		//For selecting a month, a day and a year
		
		function make_calendar_pull_downs() {
			$months = array (1 => 'January',
			'February','March','April','May','June',
			'July','August','September',
			'October','November','December');
			
			
			
			//Make the months a pull down menu
			
			echo '<select name="month">';
				foreach ($months as $key => $value) {
					echo "<option value=\"$key\">$value</option>\n";
				}	
			echo '</select>';
			
			//Make days pull down menu
			echo '<select name="days">';
				for ($day = 1;$day <= 31;$day++) {
					echo "<option value=\"$day\">$day</option>\n";
				}
			echo '</select>';
			
			//Make years pull down menu
			echo '<select name="years">';
				for ($year = 2008;$year <= 2018;$year++) {
					echo "<option value=\"$year\">$year</option>\n";
				}
			echo '</select>';
		}//End of function definiton
		
		//Create  the form tags
		echo '<h3>Select a date</h3>
			<form action="calendar-function.php" method="post">';
			
			//Call the function
			make_calendar_pull_downs();
		
		echo '</form>';
		
		include('includes/footer.html');
		
	?>


</body>
</html>
