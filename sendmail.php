<?php

    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);   

    $alert = '';
    
    if(isset($_POST['send'])){ 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message  = $_POST['message'];

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dpheakdey.kh@gmail.com'; 
            $mail->Password = 'ldfn uopk ouys djoo';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';

            $mail->setFrom('dpheakdey.kh@gmail.com'); // Gmail Address which you used as SMTP server
            $mail->addAddress('dpheakdey.kh@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used)

            $mail->isHTML(true);
            $mail->Subject = 'Message Received (Contact Form)';
            $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

            $mail->send();
            $alert = '<div class= "alert-success">
                        <span>Message Sent! Thank you for contacing us.</span>
                     </div>';
        } catch (Exception $e) {
            $alert = '<div class="alert-errer">
                      <span>'.$e->getMessage().'</span>
                     </div>';
        }
    }



?>