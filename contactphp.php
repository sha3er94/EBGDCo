<?php
$ln=$_POST["last_name"];
$name=$_POST["first_name"] .$ln;
$number=$_POST["phone"];
$email=$_POST["email"];
$msg=$_POST["comment"];
$recipient="ibrahim_amin12@live.com";
$subject="hello";
$mailBody="Name: $name\nEmail: $email\n\n$msg";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");
header("location: contactus.html")
?>