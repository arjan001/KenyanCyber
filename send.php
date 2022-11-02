<?php
	include('conn.php');
	$result = mysqli_query($conn,"select * from smtp") or die(mysqli_error($conn));
	$row = mysqli_fetch_assoc($result);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);
	$pass = $row['pass'];
	for($i=0;$i<5;$i++){$pass=base64_decode($pass);}
	$data = "Name: ".$fname." ".$lname."<br /><br />Email: ".$email."<br /><br />Message<br />".$message;
	require 'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer;
	//$mail->SMTPDebug = 4;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = $row['host'];
	$mail->Port = $row['port'];
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->Username=$row['user'];
	$mail->Password=$pass;
	$mail->setFrom($row['fro'],'Website Enquiry From Clifford');
	$mail->addAddress($row['addr']);
	$mail->isHTML(true);
	$mail->Subject='Inquiry from the website';
	$mail->Body=$data;
	if(!$mail->send()) {
		echo "failed";
		echo $mail->ErrorInfo;
	}
	else {
		echo "success";
	}
?>