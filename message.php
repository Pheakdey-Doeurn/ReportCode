<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'dpheakdey.kh@gmail.com';
  $mail->Password = 'ldfn uopk ouys djoo';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = '587';

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $sub = htmlspecialchars($_POST['sub']);
  $message = htmlspecialchars($_POST['message']);


  if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set sender
        $mail->setFrom($email, $name);

        // Add a recipient
        $receiver = "dpheakdey.kh@gmail.com";
        $mail->addAddress($receiver);

        // Email subject and body
        $mail->Subject = "From: $name <$email>";
        $mail->Body = "Name: $name\nEmail: $email\nSubject: $sub\n\nMessage:\n$message\n\nRegards,\n$name";

        // Send email
        $mail->send();
        echo 'Your message has been sent';
    } else {
      echo 'Enter a valid email address!';
    }
} else {
    echo 'Email and message fields are required!';
}
} catch (Exception $e) {
echo 'Sorry, failed to send your message!';
}
