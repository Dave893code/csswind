<?php
require_once __DIR__ . '/mail_config.php';
require_once __DIR__ . '/../../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /csswind/index.php?page=home');
    exit;
}

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: /csswind/index.php?page=home&newsletter=invalid');
    exit;
}

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = PRAYER_MAIL_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = PRAYER_MAIL_FROM;
    $mail->Password = PRAYER_MAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = PRAYER_MAIL_PORT;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom(PRAYER_MAIL_FROM, NEWSLETTER_MAIL_NAME);
    $mail->addAddress(NEWSLETTER_MAIL_TO);
    $mail->addReplyTo($email);

    $mail->isHTML(true);
    $mail->Subject = 'New Newsletter Subscription';
    $mail->Body = '<h2>New Newsletter Subscriber</h2>' .
        '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>' .
        '<p>A new subscriber has joined the Gloryvine newsletter.</p>';
    $mail->AltBody = 'New Newsletter Subscriber\nEmail: ' . $email . '\n';

    $mail->send();
    header('Location: /csswind/index.php?page=home&newsletter=success');
    exit;
} catch (Exception $e) {
    error_log('Newsletter email failed: ' . $mail->ErrorInfo);
    header('Location: /csswind/index.php?page=home&newsletter=error');
    exit;
}
