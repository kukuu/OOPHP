<html>
	<head>
		<title>OOP in PHP</title>
		<?php include ('class_lib.php'); ?>
	</head>
	<body>
		<?php 
			// instantiate a new person object
			$stefan = new Person();
			$nick = new Person();
			
			// setting names
			$stefan->set_name("Stefan Mischook");
			$nick->set_name("Nick Waddles");
			
			// printing full names
			echo "Stefan's full name: " . $stefan->get_name();
			echo "<br>";
			echo "Nick's full name: " . $nick->get_name();
		?>
	</body>
</html>