<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'shaikhaysha6666@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                  "User Message: $message.\n";


$to = 'ayshashaikh4311@gmail.com';

$header = "From: $emaill_from \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");





?>
