<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>
	Presetting - resubmitting values  and browser memorising entered values
	</title>
</head>

<body>
<!-- form.html -->
<form action="48_handle_form.php" method="post">
	<fieldset>
		<legend>
		Please fill in the form below.
			<!-- <p><b>City: <input type="text" name="name" value="London" size="20" maxlength="40" /></b></p> -->
	<p><b>City: <input type="text" name="city" value="<?php echo $city; ?>" size="20" maxlength="40" /></b></p>
			
			<p><b>Gender:</b> <input type="radio" name="gender" value="<?php if($gender['M'])  echo " checked='checked'"; ?>" /> Male <input type="radio" name="gender" value="F" /> Female</p>
			<p><b>Year:</b>
			echo '<select name="year">';
			for ($y = 2008; $y <= 2018); $y++ {
				echo "<option value =\"$y\";
				if($year == $y){
					echo " selected = 'selected'";
				}
				echo ">$y</option>\n";
			}			
				echo "</select>";
			</p>
			<p>
				<textarea name="comments" rows="10" cols="50">
					<?php echo $comments; ?>
				</textarea>
			</p>
		</legend>	
	</fieldset>
	<input type="submit" name="submit" value="submit" />
	
</form>


</body>
</html>
