<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Thank You!</title>
</head>
<body style="text-align: center;padding:20px 0;">
	<?php

		$name = $_POST['contactname'];
		$email = $_POST['contactemail'];
		$message = $_POST['contactmessage'];
		
		$formcontent=" From: Contact Form $email \n
		Name: $name \n
		Email Address: $email \n
		Message: $message";
		
		$recipient = "simonguozirui@gmail.com";
		$subject = "From simonguo.tech";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		
	?>
	
</body>
</html>