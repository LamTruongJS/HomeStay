<?php

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 $mail = new PHPMailer();
 $mail-> isSMTP();
 $mail->Host="smtp.gmail.com";
 $mail->SMTPAuth="true";
 $mail->SMTPSecure="tls";
 $mail->Port="587";
 $mail->Username="truong.ll.60cntt@ntu.edu.vn";
 $mail->Password="225921541";
 $mail->subject="Mã xác nhận";
 $mail->setFrom("truong.ll.60cntt@ntu.edu.vn");
 $mail->Body="Mã xác nhận của bạn là: $randomCODE";
 $mail->addAddress("$email");
 $mail->send();
 $mail->smtpClose();
?>