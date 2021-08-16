<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
require_once 'slider.php';

if (isset($_GET['name']))
{
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'] ? $_GET['email'] : null;
    $text = $_GET['text'] ? $_GET['text'] : null;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.spaceweb.ru';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@master-art.net';                  //SMTP username
        $mail->Password   = 'Rbhjdf4747';                           //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        $mail->setFrom('info@master-art.net');
        $mail->addAddress('schennikov.andrey@gmail.com');        
        $mail->addAddress('sergey.gutovsk@gmail.com');     
                            
        $mail->isHTML(true);                                  
        $mail->Subject = 'master-art.net';
        
        $body = '<b>Имя: </b>' . $name . '<br>' . '<b>Телефон: </b>' . $phone . '<br>';
        if ($email) $body .= '<b>Почта: </b>' . $email . '<br>';
        if ($text) $body .= '<b>Сообщение: </b>' . $text . '<br>';
        
        $mail->Body = $body;
        $mail->AltBody = $body;
    
        $mail->send();
    } catch (Exception $e) {
        
    }

    header('Location: /');
}

require_once 'home.php';