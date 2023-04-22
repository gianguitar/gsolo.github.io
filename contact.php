<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	// Construct the email message
	$email_message = "Name: " . $name . "\n";
	$email_message .= "Email: " . $email . "\n";
	$email_message .= "Subject: " . $subject . "\n";
	$email_message .= "Message: " . $message;

	// Send the email
	mail("soundbygian@gmail.com", "New message from your website", $email_message);

	// Redirect the user to a thank-you page
	header("Location: thankyou.html");
	exit();
}
?>
