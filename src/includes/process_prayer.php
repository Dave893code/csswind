<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/mail_config.php';
require_once __DIR__ . '/../../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO prayer_requests (name, email, request_type, message) 
            VALUES ('$name', '$email', '$type', '$message')";

    if (mysqli_query($conn, $sql)) {
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

            $mail->setFrom(PRAYER_MAIL_FROM, PRAYER_MAIL_NAME);
            $mail->addAddress(PRAYER_MAIL_TO);
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = "New Prayer Request from $name";
            $mail->Body = "<h2>New Prayer Request</h2>"
                . "<p><strong>Name:</strong> {$name}</p>"
                . "<p><strong>Email:</strong> {$email}</p>"
                . "<p><strong>Type:</strong> {$type}</p>"
                . "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
            $mail->AltBody = "New Prayer Request\n\n"
                . "Name: {$name}\n"
                . "Email: {$email}\n"
                . "Type: {$type}\n"
                . "Message: {$message}\n";

            $mail->send();
        } catch (Exception $e) {
            error_log('Prayer request email failed: ' . $mail->ErrorInfo);
        }

        header('Location: /csswind/index.php?page=home&status=success#contact');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
