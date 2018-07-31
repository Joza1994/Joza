<?php
$to = 'nemanjalemans@gmail.com';


    $subject ='the subject';
    $message ='hello';
 $headers = 'from: nemanjajovanovic.000webhost.app.com' . "\r\n" . 'reply : nemanjajovanovic.000webhost.app.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
 mail($to, $subject, $message, $headers);
 ?>