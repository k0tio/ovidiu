<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$home = $_POST['phone'];
		$from = 'Ovidiu.co.uk'; 
		$to = 'obalau@gmail.com'; 
		$subject = "Message from : $name , $phone ";
		
		$body = "From: $name & $phone \n E-Mail: $email\n Message:\n $message";
 	}
 
// If there are no errors, send the email

	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
	echo $result;
?>