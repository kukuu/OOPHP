<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Security: Preventing Spam Attack</title>
</head>

<body>

<?php
	#Author: Alexander Adu-Sarkodie
	#Appication purpose: Preventing Spam attack
	
	if(isset($_POST['SUBMITTED'])) {
	
	/*The function takes one argument: a string
	* the function returns a clean version of the string
	* the clean versson may either be an empty string or
	* just the removal of all new line characters
	*/
	
		function spam_scrubber ($value) {
	
		//List of very bad values:
	
		$very_bad = array('to','cc','bcc','content-type','mime-version:','multipart-mixed;',
	     'content-transfer-encoding:');
		 
		 //if any of the very bad strings are in the submitted value, return an empty string
		 //stripos function is case insensitive(string position)
		 //and  will check if the submitted value is an item in the string 
		 //provided to the function as $value
		 
		 	foreach($very_bad as $v) {
				if(stripos($value,$v) !==false){
					return '';
				}		
			}
			
			//Replace any newline character with spaces
			
			$value = str_replace(array("\r","\n","%0a","%0d"),'',$value);
			
			//Return the value
			
			return trim($value);
	
		}//end of spam_scrubber function
		
		//Clean the form data
		
		$scrubbed = array_map('spam_scrubber',$_POST);
		
		//Minimal form validation
		
		if(!empty($scrubbed['name']) && !empty($scrubbed['email'])
		!empty($scrubbed['comments'])) {
		
			//Create the body
			
			$body = "Name:{$scrubbed['name']}
			\n\nComments:{$scrubbed['comments']}";
			
			//trim wordwrap count in body to 70
			
			$body = wordwrap($body,70);
			
			//send email
			mail('your_email@example.com','Contact Form submission',$body,"From:{$scrubbed['email']}");
			
			
			//print a message
			
			echo '<p><em>Thank you for contacting me. I will reply soon</em></p>';
			
			//Cear post so form is not sticky
			
			$_POST = array();
		
		} else {
			echo '<p style="color:#ff0000;">Please fill out the form completely</p>';
		}
	
	}//End of main isset () IF
	

?>
	<h1>Please fill out this form to contact me</h1>
	<form action="preventin-spam.php" method="post">
	<p>Name: <input type="text" name="name" size="30" maxlength="60" value="<?php  if(isset($_POST['name'])) echo $_POST['name']  ; ?>" /></p>
	<p>Email: <input type="text" name="email" size="30" maxlength="80" value="<?php  if(isset($_POST['email'])) echo $_POST['email']  ; ?>" /></p>
	<p><textarea rows="5" cols="30"><?php  if(isset($_POST['comments'])) echo $_POST['comments']  ; ?></textarea></p>
	<p><input type="submit" name="submit" value="Calculate" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>


</body>
</html>
