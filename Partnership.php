<?php
if(isset( $_POST['norg']))
$norg = $_POST['norg'];
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['pnumber']))
$pnumber = $_POST['pnumber'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['cwebsite']))
$cwebsite = $_POST['cwebsite'];
if(isset( $_POST['country']))
$country = $_POST['country'];
if(isset( $_POST['city']))
$city = $_POST['city'];
if(isset( $_POST['companysm']))
$companysm = $_POST['companysm'];
if(isset( $_POST['topart']))
$topart = $_POST['topart'];
if(isset( $_POST['fbook']))
$fbook = $_POST['fbook'];
if(isset( $_POST['linkedin']))
$linkedin = $_POST['linkedin'];
if(isset( $_POST['instagram']))
$instagram = $_POST['instagram'];
if(isset( $_POST['twitter']))
$twitter = $_POST['twitter'];
if(isset( $_POST['others']))
$others = $_POST['others'];


$content="First Name: $fname \n Last Name: $lname \n Name Of organisation: $norg \n Phone Number: $pnumber \n Email: $email \n Company Website: $cwebsite \n Country: $country \n City: $city \n Company Social Media: $companysm \n Type of Partnership: $topart \n Facebook: $fbook \n LinkedIn: $linkedin \n Instagram: $instagram \n Twitter: $twitter \n Others: $others ";
$recipient = "membership@thefailforward.co";
$subject = "Partnership Application";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.html');
exit();
?>