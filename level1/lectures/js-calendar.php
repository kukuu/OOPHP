<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>JavaScript Calendar</title>
	<script type="text/javascript">

	var month_array = new Array(); 
	
	month_array[0] = "January";
	month_array[1] = "February";
	month_array[2] = "March";
	month_array[3] = "April";
	month_array[4] = "May"; 
	month_array[5] = "June";
	month_array[6] = "July";
	month_array[7] = "August";
	month_array[8] = "September";
	month_array[9] = "October";
	month_array[10] = "November";
	month_array[11] = "December";
	
	document.write('<select name="day">');
	var i = 1;
	while ( i <= 31 ) {
	document.write('<option value=' + i + '>' + i + '</option>');
	i++;
	}
	document.write('</select>');
	
	document.write('<select name="month">');
	var i = 0;
	while ( i <= 11 ) {
	document.write('<option value=' + i + '>' + month_array[i] + '</option>'); 
	i++;
	}
	document.write('</select>');
	
	document.write('<select name="year">');
	var i = 1900;
	while ( i <= 2005 ) { 
	document.write('<option value=' + i + '>' + i + '</option>'); 
	i++;
	}
	document.write('</select>');

</script>

</head>

<body>



</body>
</html>
