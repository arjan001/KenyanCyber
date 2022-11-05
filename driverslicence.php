<?php
	$data = 
	"FIRSTName: ".$_POST['fname'].
	"<br/><br/>LASTNAME:".$_POST['lname'].
	"<br/><br/>ID NUMBER:".$_POST['idnumber'].
	"<br/><br/>DATE OF BIRTH:".$_POST['dob'].
	"<br/><br/>DRIVING LICENCE NUMBER:".$_POST['Dlicence'].
	"<br/><br/>Email:".$_POST['email'].
	"<br/><br/>MPESA TRANSACTION CODE:".$_POST['MPcode'].
	"<br/><br/>MPESA NUMBER:".$_POST['MPnumber'];


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
	$mail->setFrom('test@smartcityplots.co.ke','DRIVERS LICENCE REGISTRATION CHECK');
    // $mail->addAddress('abedimuange@gmail.com');
    // $mail->addAddress('emmanuelmuema52@gmail.com');
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