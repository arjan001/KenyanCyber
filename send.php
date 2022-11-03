<?php
	$data = "Name: ".$_POST['name']."<br /><br />Email: ".$_POST['email']."<br /><br />Message: ".$_POST['message'];
	require 'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer;
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'mail.smartcityplots.co.ke';
	$mail->Port = 465;
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->Username='test@smartcityplots.co.ke';
	$mail->Password='^Q&(;rQfBGEF';
	$mail->setFrom('test@smartcityplots.co.ke','Website Enquiry From KenyanCyber');
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