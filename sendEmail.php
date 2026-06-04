<?php
/**
 * Verwerkt het contactformulier en stuurt de inhoud via SMTP door.
 * Inloggegevens komen uit .env (zie .env.example), niet uit de code.
 */

require __DIR__ . '/includes/env.php';
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Alleen reageren op een echte formulierinzending.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /portfolio/contact.php');
    exit;
}

// Invoer ophalen en opschonen.
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Nieuwe regels uit naam/e-mail strippen tegen header-injectie.
$name  = str_replace(["\r", "\n"], ' ', $name);
$email = str_replace(["\r", "\n"], '', $email);

// Validatie.
$errors = [];
if ($name === '') {
    $errors[] = 'naam';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'e-mailadres';
}
if ($message === '') {
    $errors[] = 'bericht';
}

if ($errors) {
    header('Location: /portfolio/contact.php?status=invalid');
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = env('SMTP_HOST', 'smtp.mailersend.net');
    $mail->Port       = (int) env('SMTP_PORT', '587');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username   = env('SMTP_USER');
    $mail->Password   = env('SMTP_PASS');

    // Afzender = je geverifieerde verzendadres; antwoorden gaan naar de bezoeker.
    $mail->setFrom(env('MAIL_FROM', 'no-reply@example.com'), 'Portfolio website');
    $mail->addReplyTo($email, $name);
    $mail->addAddress(env('MAIL_TO', 'drostmaarten05@gmail.com'), 'Maarten');

    $mail->Subject = 'Nieuw bericht via je portfolio';
    $mail->Body    = "Naam: {$name}\nE-mail: {$email}\n\nBericht:\n{$message}";

    $mail->send();

    header('Location: /portfolio/contact.php?status=success');
    exit;
} catch (Exception $e) {
    // Foutdetails niet aan de bezoeker tonen; eventueel loggen voor jezelf.
    error_log('Contactformulier kon niet verzonden worden: ' . $mail->ErrorInfo);
    header('Location: /portfolio/contact.php?status=error');
    exit;
}
