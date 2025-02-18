<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $location = $_POST["location"];

  $to = "ayodeledavid4206@gmail.com";
  $subject = "Form Submission";
  $message = "Name: " . $name . "\n" .
             "Email: " . $email . "\n" .
             "Location: " . $location;
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "<p>Thank you for your submission!</p>"; // Success message
  } else {
    echo "<p>Sorry, there was an error sending your message.</p>"; // Error message
  }
} else {
  echo "<p>Invalid request.</p>"; // If accessed directly
}
?>