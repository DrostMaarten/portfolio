<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

require __DIR__ . "/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.mailersend.net";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "MS_nUqy4P@test-vz9dlemw66p4kj50.mlsender.net";
$mail->Password = "mssp.hdZQfdo.3z0vklo2ypx47qrx.XiSBYEp";

$mail->setFrom("drostmaarten05@gmail.com", "Portfolio website");
$mail->addReplyTo($email, $name);

$mail->addAddress("drostmaarten05@gmail.com", "Maarten");

$mail->Subject = "Mail van je portfolio";
$mail->Body = $message;

$mail->send();

echo "Message has been sent";