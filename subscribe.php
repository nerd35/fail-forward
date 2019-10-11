<?php
if(isset( $_POST['subscribe']))
$subscribe = $_POST['subscribe'];


$content="Subscription email: $subscribe ";
$recipient = "info@thefailforward.co";
$subject = "Subscription For Newsletter";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.html');
exit();
?>