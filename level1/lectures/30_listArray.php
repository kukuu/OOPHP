<?php
//returning multiple values in an array from a database
	function retrieveProfile() {
		$user[]="Jason";
		$user[]="jason@codeunique.com";
		$user[]="English";
		return $user;
	}
	list($name,$email)=retrieveProfile();
	echo "Name: $name <br /> email:$email";
?>
