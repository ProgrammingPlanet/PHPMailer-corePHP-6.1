<?php

    // PHP mailer version 6.1.6
    require 'lib/PHPMailer.php';
    require 'lib/SMTP.php';
    require 'conf.php';
    
    
    $mail = new PHPMailer(true); //passing `true` enables exceptions

    //Server settings

	if($config['smtp']['USE']) $mail->isSMTP(); // Send using SMTP

    $mail->Host      = $config['smtp']['HOST'];// Set the SMTP server to send through
    $mail->SMTPAuth  = $config['smtp']['Auth'];// Enable SMTP authentication
    $mail->Username  = $config['smtp']['USERNAME'];   // SMTP username
    $mail->Password  = $config['smtp']['PASSWORD'];   // SMTP password

    $enc = strtoupper($config['smtp']['Encryption']);

    $mail->SMTPSecure = ($enc=='TLS') ? PHPMailer::ENCRYPTION_STARTTLS : (($enc=='SSL') ? PHPMailer::ENCRYPTION_SMTPS : FALSE);
    $mail->Port       = $config['smtp']['PORT']; 

    $mail->SMTPDebug = ($config['debug']) ? SMTP::DEBUG_SERVER : FALSE;  


    