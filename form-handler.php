<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'no-reply@example.com';
$email_subject = 'New Message';
$email_body = "Name: $name.\n".
            "E-mail: $visitor_email.\n".
            "Subject: $subject.\n".
            "Message: $message.\n";

$to = 'kshitij1999@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");

?>