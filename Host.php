<?php
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['startup']))
$startup = $_POST['startup'];
if(isset( $_POST['pnumber']))
$pnumber = $_POST['pnumber'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['title']))
$title = $_POST['title'];
if(isset( $_POST['country']))
$country = $_POST['country'];
if(isset( $_POST['region']))
$region = $_POST['region'];
if(isset( $_POST['citychap']))
$citychap = $_POST['citychap'];
if(isset( $_POST['campuschap']))
$campuschap = $_POST['campuschap'];
if(isset( $_POST['fbook']))
$fbook = $_POST['fbook'];
if(isset( $_POST['linkedin']))
$linkedin = $_POST['linkedin'];
if(isset( $_POST['instagram']))
$instagram = $_POST['instagram'];
if(isset( $_POST['twitter']))
$twitter = $_POST['twitter'];
if(isset( $_POST['howdid']))
$howdid = $_POST['howdid'];
if(isset( $_POST['others']))
$others = $_POST['others'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="First Name: $fname \n Last Name: $lname \n Name of startup: $startup \n Phone Number: $pnumber \n Email: $email \n Title: $title \n Country: $country \n Region: $region \n Host City: $citychap \n Host Campus : $campuschap \n Facebook: $fbook \n LinkedIn: $linkedin \n Instagram: $instagram \n Twitter: $twitter \n How did you Here About us: $howdid \n Others: $others \n Message: $message";
$recipient = "membership@thefailforward.co";
$subject = "Request to become a host";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.html');
exit();
?>