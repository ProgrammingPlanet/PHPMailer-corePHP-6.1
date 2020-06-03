<?php 

    require 'Mail.php'; //this will provide $mail object
    
    try {

        //Recipients
        $mail->setFrom('codingplanet1@gmail.com','Mailer');
        $mail->addAddress('abc@nibphina.tk','Joe User');     //Name is optional
        $mail->addReplyTo('info@example.com','Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');       //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    }
    catch(Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
