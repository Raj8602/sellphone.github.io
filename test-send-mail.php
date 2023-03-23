<?php

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rajeshyaduwanshi@collegedoors.com';                 // SMTP username
$mail->Password = 'lwrcuxrlxqqylvlx';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'rajeshyaduwanshi@collegedoors.com';
$mail->FromName = 'Sellphone';
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('rajeshyaduwanshi@collegedoors.com');               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML                                 

$mail->Subject = 'Sell Old Mobile';
$mail->Body     = '<h2>User Details</h2>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>