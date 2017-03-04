
<html>
<body>
<?php
if (isset($_REQUEST['email'])) {         
  	//if "email" is filled out, send email
 	 //send email
 	 $email = $_REQUEST['email'] ;
  	$subject = $_REQUEST['subject'] ;
  	$message = $_REQUEST['message'] ;
  	mail( "alex@codeunique.com", "Subject: $subject",
  	$message, "From: $email" );//header
 	 echo "Thank you for using our mail form";
  }
else   {
	//if "email" is not filled out, display the form. The default application 
	  echo "<form method='post' action='45_mailform.php'>
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
