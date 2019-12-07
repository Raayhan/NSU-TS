<?php
	$name = $POST['name'];
	$visitor_email=$POST['email'];
	$message= $POST['message'];
	$subject= $POST['subject'];

	$email_from="info@nsu-ts.com";
	$email_subject="New Message From NSU-TS";
	$email_body= "User name: $name.\n".
					"User email: $visitor_email.\n" .
						"Subject: $subject.\n" .
						"User Subject: $message.\n";

	$to="rayhan.rakib@northsouth.edu";
	$headers= "Form $email_form \r\n";
	$headers .="Reply to: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location:contact.php");

?>
