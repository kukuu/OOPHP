<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;
		charset=iso-8859-1" />
		<title>OOP in PHP</title>
		<?php include("class_lib.php"); ?>
	</head>
	<body>
	<?php
			$stefan = new person();//instantiate (creating) an object
			$nick = new person();
			$stefan->set_name("Stefan Mischook");
			$nick->set_name("Nick Waddles");
			
			echo "Stefan's full name: " . $stefan->get_name();
			echo "<br />";
			echo "Nick's full name: " . $nick->get_name();
		?>

	 </body>
</html>