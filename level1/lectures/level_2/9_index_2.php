<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>using constructors</title>
	<?php include("class_constructor_lib.php"); ?>		
	</head>		
	<body>		
		<?php
			$stefan = new person("Stefan Mischook");
			echo "Stefan's full name: ".$stefan->get_name();
		?>		
	</body>
</html>	 
