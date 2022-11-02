<?php
	$data = "Name: ".$_POST['name']."<br /><br />Email: ".$_POST['email']."<br /><br />Message<br />".$_POST['message'];
	require 'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer;
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->Username='emmanuelmuema2@gmail.com';
	$mail->Password='XXXXXX';
	$mail->setFrom('emmanuelmuema2@gmail.com','Website Enquiry From KenyanCyber');
	$mail->addAddress('emmanuelmuema52@gmail.com');
	$mail->isHTML(true);
	$mail->Subject=$_POST['subject'];
	$mail->Body=$data;
	if(!$mail->send()) {
		echo "failed";
		echo $mail->ErrorInfo;
	}
	else {
		echo "success";
	}
?>