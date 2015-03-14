<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Calling a function from a class in another (base)class</title>
</head>

<body>
<?php    include('13_calling-function_from_other_class.php');    ?>

<?php     
	$my_snake = new snake();
	$my_snake -> eat_bugs();
?>
</body>
</html>
