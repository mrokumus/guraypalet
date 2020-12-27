<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
if (!$captcha) {
    header('Location: https://guraypalet.com/mail/?r=g');

    return false;
}
$secretKey = "secret";
$ip = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
$responseKeys = json_decode($response, true);
if (intval($responseKeys["success"]) !== 1) {
    header('Location: https://guraypalet.com/mail/?r=g');
}
if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['message']) ||
    empty($_POST['msg_subject']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: https://guraypalet.com/mail/?r=r');
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$subject = strip_tags(htmlspecialchars($_POST['msg_subject']));


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->SMTPKeepAlive = true;
$mail->Host = 'mail01.wafbone.com';
$mail->Port = 587;
$mail->CharSet = 'UTF-8';
$mail->Username = 'mail';
$mail->Password = "pass";
$mail->SetFrom("mail", 'Güray Palet');
$mail->addAddress("mail", 'Güray Palet');
$mail->addReplyTo($email_address, $name);
$mail->Subject = $subject;
$content = $message;
$mail->MsgHTML($content);
if ($mail->Send()) {
    header('Location: https://guraypalet.com/mail/?r=send');
} else {
    // bir sorun var, sorunu ekrana bastıralım
    header('Location: https://guraypalet.com/mail/?r=fail');
}
