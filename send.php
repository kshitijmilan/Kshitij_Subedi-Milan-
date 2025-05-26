<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "kshitijmilan@gmail.com"; // ✅ Replace with your actual email
  $subject = "New message from your website";
  $body = "Email: $email\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
} else {
  echo "Invalid request.";
}
?>
