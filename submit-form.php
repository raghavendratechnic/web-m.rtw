<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $firstName = htmlspecialchars($_POST['firstName']);
  $lastName = htmlspecialchars($_POST['lastName']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Send an email with the form data
  $to = 'raghavendratechnic@gmail.com'; // Replace with your email address
  $subject = 'New form submission';
  $body = "Name: $firstName $lastName\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for contacting us. We will get back to you soon.';
  } else {
    echo 'Sorry, there was an error sending your message. Please try again later.';
  }
}
?>
