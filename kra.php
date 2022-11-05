<?php
	$data = 
	"Name: ".$_POST['fname'].
	"<br/><br/>LAST NAME: ".$_POST['lname'].
	"<br/><br/>MIDDLE NAME: ".$_POST['mname'].
	"<br/><br/>MPESA TRANSACTION CODE: ".$_POST['MPcode'].
	"<br/><br/>ID NUMBER: ".$_POST['idnumber'].
	"<br/><br/>DATE OF BIRTH: ".$_POST['dob'].
	"<br/><br/>MOBILE NUMBER: ".$_POST['mobNumber'].
	"<br/><br/>OCCUPATION: ".$_POST['occupation'].
	"<br/><br/>Email: ".$_POST['email'].
	"<br/><br/>COUNTY: ".$_POST['county'].
	"<br/><br/>DISTRICT: ".$_POST['district'].
	"<br/><br/>LOCATION: ".$_POST['location'].
	"<br/><br/>POSTAL ADDRESS: ".$_POST['paddress'].
	"<br/><br/>POSTAL CODE: ".$_POST['pcode'].
	"<br/><br/>TOWN: ".$_POST['town'];

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
	$mail->setFrom('test@smartcityplots.co.ke','NEW KRA PIN REGISTRATION');
    $mail->addAddress('abedimuange@gmail.com');
    $mail->addAddress('emmanuelmuema52@gmail.com');
    $mail->addAddress('nyongesaedwin018@gmail.com');
	$mail->isHTML(true);
	// $mail->Subject=$_POST['subject'];
	$mail->Body=$data;
	if(!$mail->send()) {
		echo "failed";
		echo $mail->ErrorInfo;
	}
	else {
		echo "success";
	}
?>