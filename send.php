<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
}

    // Prepare email
    $to = "kshitijmilan@gmail.com"; // 🔁 Replace with YOUR email
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) 
{
    echo "✅ Message sent successfully!";
} else {
    echo "❌ Failed to send message.";
}
?>
