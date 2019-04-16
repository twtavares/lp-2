<?php

// Please put your PHP code here
//
// You can use entered name variable as $_POST['contact_name'],
// e-mail variable as $_POST['contact_email'],
// phone variable as $_POST['contact_phone'],
// company variable as $_POST['contact_company'],
// message variable as $_POST['contact_message']

// Please insert here your email address:
$to      = 'PUT_YOUR_EMAIL_ADDRESS_HERE';

$subject = 'Message from '.$_POST['contact_name'];
$message = $_POST['contact_message']. "\r\nE-mail: " .$_POST['contact_email']. "\r\nCompany: " .$_POST['contact_company']. "\r\nPhone: " .$_POST['contact_phone'];
$headers = 'From: '.$_POST['contact_email']. "\r\n" .
    'Reply-To: '.$_POST['contact_email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>