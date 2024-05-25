<?php
// Get data from form
$name = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $to = "contactmanishpoudel@mail.com";
    $subject = "Mail From   portfolio";
    $txt = "Name = " . $name . "\r\nEmail = " . $email . "\r\nMessage = " . $message;
    $headers = "From: noreply@yoursite.com\r\n" .
               "CC: somebodyelse@example.com";

    // Send email
    if (mail($to, $subject, $txt, $headers)) {
        // Redirect on success
        header("Location: thankyou.html");
        exit();
    } else {
        // Handle the error if mail function fails
        echo "Email sending failed.";
    }
} else {
    // Handle the error if email validation fails
    echo "Invalid email format.";
}
?>
