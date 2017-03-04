

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Email template</title>
</head>

<body>
<?
	$to = "someone@example.com";
	$subject = "Test mail";
	$message = "Hello! This is a simple email message.";
	$from = "someonelse@example.com";
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
	echo "Mail Sent.";
?>
</body>
</html>