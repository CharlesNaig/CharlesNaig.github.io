<?php

header( "Location: index.html" );

$to  = "hatry4@gmail.com";  // replace it with your email

$name     = $_POST['name'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$topic    = $_POST['topic'];
$message  = $_POST['message'];

$from  = "From: " . "$name " . "$email";
$subject = "Contact Request From: " . "$name" . "$topic" . "$from";

$body   = "New Message From: " . "$name " . "$email" . "\n\n";
$body   .= "----------------" . "\n\n";
$body   .= "Name: " . "$name" . "\n\n";
$body   .= "Email: " . "$email" . "\n\n";
$body   .= "Phone: " . "$phone" . "\n\n";
$body   .= "Phone: " . "$topic" . "\n\n";
$body   .= "Message: " . "\n\n" . "$message" . "\n\n";



if (mail($to, $subject, $message, $body, $from)) {
  echo "Success";
} else {
  echo "Error, The server failed to send the message, Please try again later.";
}
?>