<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'rahulkuparala@gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'rahulkuparala';                     //SMTP username (your gmail account)
    $mail->Password   = 'Sarada@19042000';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('rahulkuparala@gmail.com', 'Mailer');         //Set the sender of the message (your email address)
    $mail->addAddress('kuparalarahul19042@gmail.com', 'Joe User');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Chipi chipi chapa chapa dubi dubi daba daba';
    $mail->Body    = 'Happy Valentine Day My Love. I love you so much. You are the best thing that has ever happened to me ❤';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
