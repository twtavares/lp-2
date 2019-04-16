<?php

// Please put your PHP code here
//
// You can use entered name variables as $_POST['subscribe_name'],
// e-mail variable as $_POST['subscribe_email']

// Please insert here your email address:
$to      = 'PUT_YOUR_EMAIL_ADDRESS_HERE';

$subject = 'New subscription from '.$_POST['subscribe_name'];
$message = 'Name: '.$_POST['subscribe_name'].', e-mail:'.$_POST['subscribe_email'];
$headers = 'From: '.$_POST['subscribe_email']. "\r\n" .
    'Reply-To: '.$_POST['subscribe_email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>