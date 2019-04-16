<?php

// Please put your PHP code here
//
// You can use entered name variables as $_POST['trial_name'],
// e-mail variable as $_POST['trial_email']

// Please insert here your email address:
$to      = 'PUT_YOUR_EMAIL_ADDRESS_HERE';

$subject = 'New trial for '.$_POST['trial_name'];
$message = 'Name: '.$_POST['trial_name'].', e-mail:'.$_POST['trial_email'];
$headers = 'From: '.$_POST['trial_email']. "\r\n" .
    'Reply-To: '.$_POST['trial_email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>