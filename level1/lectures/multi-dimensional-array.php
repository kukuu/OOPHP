<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>multi-dimensional array</title>
</head>

<body>

<?php #multi-dimensional array

//Create one array
	$mexico = array(
	'YU' => 'Yucatan',
	'BC' => 'Baja California',
	'OA' => 'Oaxaca'
	);
	
	
	//Create another array
	$us = array(
	'MD' => 'Maryland',
	'IL' => 'Illinois',
	'PA' => 'Pensylvania',
	'IA' => 'Iowa'
	);

	
	//Create a third array
	$canada = array(
	'QC' => 'Quebec',
	'AB' => 'Alberta',
	'YT' => 'Yukon',
	'PE' => 'Prince Edward Island'
	);
	
	//Combine the arrays
	$n_america = array (
	'Mexico' => $mexico,
	'United States' => $us,
	'Canada' => $canada
	);
	
	//Loop through the countries
	foreach ($n_america as $country => $list) {
		echo "<h1>$country</h1><ul>";
		foreach ($list as $k => $v) {
		echo "<li>$k  - $v </li>\n";
	}
	//close list
	echo "</ul>";
	}
	
	
?>

</body>
</html>
