<?php
	$data = 
	"FIRST NAME: ".$_POST['fname'].
	"<br/><br/>LAST NAME:".$_POST['lname'].
	"<br/><br/>MPESA TRANSACTION CODE:".$_POST['MPcode'].
	"<br/><br/>CAR MAKE:".$_POST['Carmake'].
	"<br/><br/>CAR REGISTRATION or NUMBER PLATE:".$_POST['carReg'].
	"<br/><br/>PRIMARY PHONE NUMBER :".$_POST['mobNumber'].
	"<br/><br/>MPESA NUMBER:".$_POST['MPnumber'].
	"<br/><br/>EMAIL:".$_POST['email'];
	require 'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer;
//	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'mail.smartcityplots.co.ke';
	$mail->Port = 465;
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->Username='test@smartcityplots.co.ke';
	$mail->Password='^Q&(;rQfBGEF';
	$mail->setFrom('test@smartcityplots.co.ke','CAR INSPECTION STATUS');
    $mail->addAddress('abedimuange@gmail.com');
    $mail->addAddress('emmanuelmuema52@gmail.com');
    $mail->addAddress('nyongesaedwin018@gmail.com');
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