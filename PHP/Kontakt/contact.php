<?php
    &name = $_POST['name']; 
    &visitor_email = &_POST['email'];
    $message = $_POST['message'];
    $email_from = 'innovativeprogrammingjtown';
    $email_subject = 'Neue Nachricht';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n"
                        "User Message: $message.\n";


    $to = 'innovativeprogrammingjtown@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_mail \r\n";

    mail($to, $email_subject, $email_body, $headers );

    header("Location Kontakt.html")

>