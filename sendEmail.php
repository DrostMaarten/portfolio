<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.mailersend.net";
$mail->SMTPSecure = PHPmailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "MS_nUqy4P@test-vz9dlemw66p4kj50.mlsender.net";
$mail->Password = "mssp.hdZQfdo.3z0vklo2ypx47qrx.XiSBYEp";

$mail->setFrom($email, $name);
$mail->addAddress("drostmaarten05@gmail.com", "Maarten");

$mail->Subject = "Mail van je portfolio";
$mail->Body = $message;

$mail->send();