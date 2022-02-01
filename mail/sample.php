<?php

    require __DIR__. '/../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function Send_Mail($to, $subject, $body)
    {
        $from = "jefferson.chaves@ifpr.edu.br";
        $mail = new PHPMailer();
        $mail->IsSMTP(true); // SMTP
        $mail->SMTPAuth   = true;  // SMTP authentication
        $mail->Mailer = "smtp";
        $mail->Host = "tls://email-smtp.us-east.amazonaws.com"; // Amazon SES
        $mail->Port = 465;  // SMTP Port
        $mail->Username = "jefferson.chaves@outlook.com";  // SMTP  Username
        $mail->Password = "LeilA#20";  // SMTP Password
        $mail->SetFrom($from, 'From Name');
        $mail->AddReplyTo($from, 'ifpr.edu.br');
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        $address = $to;
        $mail->AddAddress($address, $to);

        if (!$mail->Send())
            return false;
        else
            return true;
    }


    $to = "jefferson.chaves@ifpr.edu.br";
    $subject = "Test Mail Subject";
    $body = "Hi<br/>Test Mail<br/>Amazon SES"; // HTML  tags
    Send_Mail($to,$subject,$body);
