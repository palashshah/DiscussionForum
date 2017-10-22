<?php 
	require('header.php');
	require('..\PHPMailer\PHPMailerAutoload.php');
	require('..\phpmailer\class.smtp.php');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$msg = "Name: $name<br><br>Email: $email<br><br>Message: $_POST[msg]";

	$mail = new PHPMailer;
	$mail->IsSMTP();       
	$mail->SMTPAuth   = true;                  
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;         

	$mail->Username="youremail@gmail.com";  
	$mail->Password="password";     

	$mail->AddAddress("abc@gmail.com"); //THE EMAIL ON WHICH YOU HAVE TO RECEIVE FEEDBACK
	       
	$mail->SetFrom('palash@gmail.com','Enquiry');
	$mail->Subject = "Contact Us Form";
	$mail->MsgHTML($msg);

	if($mail->Send()){
		header('location : success_enquiry.php');
	}
	else{
		header('location : contactus.php?act=invalid');
	}
?>