<?php
// processing a form

// validating name
if (!empty($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
} else {
	$name = NULL;
	echo "<p style=\"font-weight:bold; color:#c00;\">You forgot to enter a name</p>";
}

// validating email
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo "<p style=\"font-weight:bold; color:#c00;\">You forgot to enter your email</p>";
}

// validating comments
if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = NULL;
	echo "<p style=\"font-weight:bold; color:#c00;\">You forgot to enter comments</p>";
}

// validating gender
if (!empty($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
	
	if ($gender == 'M') {
		echo "<p><b>Good day Sir!</b></p>";
	} elseif ($gender == 'F') {
		echo "<p><b>Good day Madam!</b></p>";
	} else {
		$gender = NULL;
	}
} else if(empty($_REQUEST['gender'])) {
	echo "<p style=\"font-weight:bold; color:#c00;\">You forgot to choose a gender</p>";
}

// Validating the value of the fields
if ($name && $email && $comments && $gender) {
	echo "<p>Thank you <b>{$name}</b> for the following comments</p>";
	echo "<p>We will reply to you at <i>{$email}</i></p>";
} else {
	echo "<p>Please go back and fill the <a href=\"http://localhost/lectures/php_03-24_2/index.php\">again</a></p>";
}