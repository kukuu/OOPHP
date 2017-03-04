
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Form feedback</title>
	<style>
		.error {
			font-weight:bold;
			color:#c00;
		}
	</style>
</head>

<body>
<?php
# script handle_form.php
# Author; Alexander Adu-Sarkodie
	
	//Not recommended to use isset() function as it allows and sets empty strings and NULL as TRUE. Recommend empty() function. It will be used in conjunction with $_REQUEST function to validate the gender further below.

//Note PHP Global functions uses the names of the form elements as keys to access and send data to the server. Again they are strings.
	if (!empty($_REQUEST['name'])) {
		$name= $_REQUEST['name'];
	} else {
		$name= NULL;
		echo '<p class="error">You forgot to enter your name!</p>';
	}
	
	if (!empty($_REQUEST['email'])) {
		$email= $_REQUEST['email'];
	} else {
		$email= NULL;
		echo '<p class="error">You forgot to enter your email address!</p>';
	}
	
	if (!empty($_REQUEST['comments'])) {
		$comments= $_REQUEST['comments'];
	} else {
		$comments= NULL;
		echo '<p class="error">You forgot to enter your comments!</p>';
	}
	
	//Validating gender Test first for set values and then use method $_REQUEST
	//to iterate for options

if (isset($_REQUEST['gender'])){

	$gender = $_REQUEST['gender'];
	
	if($gender = 'M'){
		echo '<p><b> Good day Sir! </b></p>';
	} elseif ($gender = 'F') {
		echo '<p><b> Good day Madam! </b></p>';
	} else { //Unacceptable value
		$gender= NULL;
		echo '<p class="error">Gender should be either "M" or "F"</p>';
	}

} else { //$_REQUEST['gender'] is not set
	$gender = NULL;
	echo '<p class="error">You forgot to select a gender</p>';
}

# If all required data have been provided (eg boolean=> true), print a welcomimg message

if($name && $email && $gender && $comments) {
	echo "<p>Thank you,  <b>$name</b> , for the following comments
	<br /><tt></tt></p>
	<p>We will reply to you at <i>$email</i></p>";

} else { //Missing form value
	echo '<p class="error">Please go back and fill the <a href="http://localhost/lectures/level_2/main/00_forms-simple.html">form </a>again
	</p>';

}
	
	

?>


</body>
</html>
