<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require '/opt/lampp/htdocs/Projet-Php/sendMailApp/phpmailer/src/PHPMailer.php';
require '/opt/lampp/htdocs/Projet-Php/sendMailApp/phpmailer/src/SMTP.php';
require '/opt/lampp/htdocs/Projet-Php/sendMailApp/phpmailer/src/Exception.php';

define('MAILHOST', 'smtp.gmail.com');
define('USERNAME', 'devilsog2.0@gmail.com');
define('PASSWORD', 'lccfdgrldqmyfxqf');
define('SEND_FROM', 'testmailapp@gmail.com');
define('SEND_FROM_NAME', 'Test-mail');
define('REPLY_TO', 'testmailapp@gmail.com');
define('REPLY_TO_NAME', 'Test-mail');

function sendMail($email, $sujet, $message)
{
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAILHOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);
    $mail->IsHTML(true);
    $mail->Subject = $sujet;
    $mail->Body = $message;
    $mail->AltBody = $message;

    if (!$mail->send()) {
        echo "L'envoie d'email a échoué";
    } else {
        echo "Message bien envoyé";
    }
}

if (isset($_POST["envoyer"])) {
    sendmail($_POST["destinataire"], $_POST["sujet"], $_POST["message"]);
}
