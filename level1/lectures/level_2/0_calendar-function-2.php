

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
		
		include('includes/calendar-function.php');
		
		//Create  the form tags
		echo '<h3>Select a date</h3>
			<form action="0_calendar-function-2.php" method="post">';
			
			//Call the function
			make_calendar_pull_downs();
			//end function call
		
		echo '</form>';
		
		include('includes/footer.html');
		
	?>


</body>
</html>
