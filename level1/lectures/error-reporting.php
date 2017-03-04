<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>custom error reporting</title>
</head>

<body>
<h2>Testing error handling</h2>

<?php
#see error reporting from form pages
#PHP erors: notices,warning and errors. The first 2 will not stop the execution of the script

//flag variable for site status. Place outside function
define('LIVE',FALSE);

//create the error handler

function my_error_handler($e_number,$e_message,$e_file,$e_line,$e_vars) {
	//build the error message. Note the single quotes.  the variables will be literal 
	//and wait for parsing later
	$message = "An error occurred in script '$e_file' on line '$e_line ;$e_message\n'";
	
	//append $e_vars to message - it will receive all the variables that exist, 
	//and their values and their values when it happens with useful debugging information
	
	$message .= print_r($e_vars,1)
	
	//print message in development environment
	if(!LIVE) {
		echo '<pre>.$message. "\n"';
		debug_print_backtrace();//backtrace reports on what functions have been used
		echo </pre><br />;
	} else {//Dont show error::means Live. Show rather a statement as below;
		echo '<div class="error">A system error occurred. We apologies for the inconvenience.</div>';
		
	  }
}//end of my_error_handler definition

//you can log error messages using error_log function which can take a series of arguments

//error_log (message,type,destination,headers)
//message=$message
//type = 0 to 3; computers default is 0, send to email is (1), remote debugger is (2) or write to a text file is (3)
//destination can be a name of a file or an email address
//header is used if loging to email
//destination and headers are optional

//You can invoke the error handling function using trigger_error();

//die() and exist() are language constructs not a function and are used to terminate entire script. 
//Used to terminate a script continuing to run if there is a problem with the database

//Example:
//include(config.inc.php) OR die ('Could not open the file');
//here if the include file isnot found then the die statement will execute

?>


</body>
</html>
