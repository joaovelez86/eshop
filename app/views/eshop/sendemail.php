<?php
header('Content-type: application/json');
$status = array(
    'type' => 'successo',
    'message' => 'Obrigado pelo teu contacto. Em breve vais ser contactado '
);

$name       = @trim(stripslashes($_POST['name']));
$email      = @trim(stripslashes($_POST['email']));
$subject    = @trim(stripslashes($_POST['subject']));
$message    = @trim(stripslashes($_POST['message']));

$email_from = $email;
$email_to = 'email@email.com';

$body = 'Nome: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Assunto: ' . $subject . "\n\n" . 'Mensagem: ' . $message;

$success = @mail($email_to, $subject, $body, 'De: <' . $email_from . '>');

echo json_encode($status);
die;
