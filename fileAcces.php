<?php
// Get visitor's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Compose email message
$email_subject = "Profile Visit Notification";
$email_body = "Someone visited your profile.\n\n";
$email_body .= "IP Address: $ip_address\n";

// Your email address where you want to receive notifications
$to_email = "tosh7926@gmail.com";

// Send email notification
mail($to_email, $email_subject, $email_body);
?>
