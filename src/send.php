<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/phpmailer/src/Exception.php';
require '../include/phpmailer/src/PHPMailer.php';
require '../include/phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail -> isSMTP();  
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = '';//add your email
    $mail -> Password = ''; //add your app password that you set up in your google account
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;
    $mail -> setFrom('');//Add your email

    $mail -> addAddress($_POST["email"]);

    $mail -> isHTML(true);
    $mail -> Subject = $_POST["subject"];
    $mail -> Body = $_POST["message"];  
    $mail->send();
    echo 'Mail sent successfully!';



}
?>