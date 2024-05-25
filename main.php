<?php
//get data from form
$fname = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "contactmanishpoudel@gmail.com"; // Make sure this email address is correct
$subject = "Mail From portfolio";
$txt = "Name = " . $fname . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@manishpoudel.com\r\nCC: somebodyelse@example.com";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

//redirect
header("Location: thankyou.html");
exit(); // Always call exit after header redirection
?>
