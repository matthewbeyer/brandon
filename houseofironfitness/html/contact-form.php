﻿<?php

$to="demo@email.com";/*Your Email*/

$subject="Message from the website";

$date=date("l, F jS, Y");
$time=date("h:i A");
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$name=$_REQUEST['name'];

$msg="
		Message sent from website on date:  $date, hour: $time.\n
		Email: $email\n
	";
	
	if($name=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the name field.
		</div>";
	
	} else if($email=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the email field.
		</div>";
	
	} else if($phone=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the phone field.
		</div>";
	
	} else {
		mail($to,$subject,$msg,"From:".$email);
		echo "<div class='alert alert-success'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Thank you!</strong>
		</div>";
	}
?>
