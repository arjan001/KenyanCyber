<?php
$name = $_POST ["name"];
$email = $_POST ["email"];
$subject = $_POST ["subject"];
$message = $_POST ["message"];

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);
$mail-> isSMTP();
$mail-> SMTPAuth = true;
$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;

$mail ->Username ="arjannky@gmail.com";
$email ->Password ="khasiala";

$mail->setFrom($email ,$name);
$mail->addAddress ("arjannky@gmail.com" ,"arjan");

$email ->subject = $subject;
$email ->Body = $message;

$mail ->send();

echo "email sent"
?>