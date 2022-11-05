<?php
	$data = 
	"Name: ".$_POST['fname'].
	"<br/><br/>MIDDLE NAME: ".$_POST['mname'].
	"<br/><br/>LAST NAME: ".$_POST['lname'].
	"<br/><br/>NATIONALITY: ".$_POST['nationality'].
	"<br/><br/>OCCUPATION: ".$_POST['occupation'].
	"<br/><br/>DATE OF BIRTH: ".$_POST['dob'].
	"<br/><br/>MOBILE NUMBER: ".$_POST['mobNumber'].
	"<br/><br/>MPESA NUMBER: ".$_POST['MPnumber'].
	"<br/><br/>MPESA TRANSACTION CODE: ".$_POST['MPcode'].
	"<br/><br/>FIRST TIME REGISTERING FOR TIMSVIRL ACC : ".$_POST['check'].
	"<br/><br/>HAVE YOU EVER LOST OR REPLACED YOUR FIRST ID : ".$_POST['radio'].
	"<br/><br/>ID NUMBER: ".$_POST['idserial'].
	"<br/><br/>MOTHERS / MAIDEN NAME : ".$_POST['mothersname'].
	"<br/><br/>SERVICE AM APPLYING FOR : ".$_POST['service'].
	"<br/><br/>Email: ".$_POST['email'].
	"<br/><br/>KRA PIN NUMBER : ".$_POST['kraNumber'].
	"<br/><br/>COUNTY: ".$_POST['county'].
	"<br/><br/>SUB-COUNTY: ".$_POST['subcounty'].
	"<br/><br/>SECURITY QUESTION: ".$_POST['securityquiz'].
	"<br/><br/>POSTAL ADDRESS: ".$_POST['paddress'].
	"<br/><br/>POSTAL CODE: ".$_POST['pcode'].
	"<br/><br/>PHYSICAL ADDRESS: ".$_POST['phyAddress'].
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
	$mail->setFrom('test@smartcityplots.co.ke','NEW TIMSVIRL ACCOUNT REGISTRATION');
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