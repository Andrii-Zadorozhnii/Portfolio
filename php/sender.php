<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $subject = $_POST['subject'];

	$to = "zador746@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Message from resume";

	
	$msg="
    Subject: $subject /n
    Name: $name /n
    Phone: $phone /n
    Email: $email /n
    Text: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>
