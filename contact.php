<?php
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['pnumber']))
$pnumber = $_POST['pnumber'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['title']))
$title = $_POST['title'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="First Name: $fname \n Last Name: $lname \n Title: $title \n Phone Number: $pnumber \n Email: $email \n Title: $title \n Message: $message";
$recipient = "membership@thefailforward.co";
$subject = "Equiry from visitor";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.html');
exit();
?>