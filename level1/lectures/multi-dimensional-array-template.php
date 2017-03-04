<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Multi-dimensional Array-template</title>
</head>

<body>

<?php
	// Build to different array blocks and merge them into a multi-dimensiaonal array
	
	//prime numbers
	$primes = array (1,3,5,7,11,13,...);
	//sphenic
	$sphenic = array (30,42,66.70,...);
	//Now merge them into a multi-dimensional array as numbers
	$numbers = array('Primes' => $primes,
	'Sphenic' => $sphenic ); 
	
	// echo first prime number
	echo "The first prime number is {$numbers['Primes'][0]}";
?>

<form action="multi.php" method="post">
<?php
//The $_POST variable in the receiving page will be multi-dimensional arrray and will store:
//book as $_POST['interests[1]'], and movies as $_POST['interests[2]']
		<input type="checkbox" name="interests[]" value="music" /> Music
		<input type="checkbox" name="interests[]" value="books" /> Books
		<input type="checkbox" name="interests[]" value="movies" /> movies
		
	//Again only selected values will be passed as a multidimensional array to the receiving page	
		<select name = "interests[]">
			<option value = "Music" /> Music
			<option value = "Movies" /> Movies
			<option value = "Books" /> Books
		
		</select>
?>
</form>

</body>
</html>
