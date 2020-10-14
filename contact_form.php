<?php
if (isset($_POST['Submit'])) {

	$name = $_POST['Name'];
	$sender = $_POST['E-mail Address'];
	$subject = $_POST['Subject];
	$message = $_POST['Your Message'];
	
    $email_to = "Kimberly.Rudolph@sckans.edu";
    $headers = "From: ".#mailFrom;
	
	mail($mailTo, $subject, $txt);


    /*Thank you for reaching out! I will be in contact with you soon.*/
