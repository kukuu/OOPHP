<html>
<body>
<?php
	function spamcheck($field){
	  //filter_var() function is used to sanitize the email by checking for illegal
	 //characters using FILTER_VALIDATE_EMAIL, and to validate the email ddress
	 //using FILTER_VALIDATE_EMAIL
	 	 if(filter_var($field, FILTER_VALIDATE_EMAIL)){
	    		return TRUE;
	  	}
	  	else {
	  		  return FALSE;
	    	}
	  }
	if (isset($_REQUEST['email'])){
		//if "email" is filled out, proceed
	  	//check if the email address is invalid
		//perform sanitization and validation on email
		$mailcheck = spamcheck($_REQUEST['email']);
	 	if ($mailcheck==FALSE) {
	    		echo "Invalid input";
	    	}
		else {
			//send email
		    $email = $_REQUEST['email'] ;
		    $subject = $_REQUEST['subject'] ;
		    $message = $_REQUEST['message'] ;
		    mail("alex@codeunique.com", "Subject: $subject",
		    $message, "From: $email" );
		    echo "Your email has been sent. Thank you.";
		 }
	  }
	else{
		//if "email" is not filled out, display the form
	 	 echo "<form method='post' action='46_mailform.php'>
	  			Email: <input name='email' type='text' /><br />
	  			Subject: <input name='subject' type='text' /><br />
	 		 	Message:<br />
	  			<textarea name='message' rows='15' cols='40'></textarea><br />
	 		 	<input type='submit' />
	  		</form>";
	  }
?>
</body>
</html>
