<?php
$to = $_POST['email'];
$subject = 'Привет';
$message = 'Привет!';
$headers = 'From: kiri11-00@mail.ru' . "\r\n" .
    'Reply-To: 1903kirill04@mail.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo 'Письмо отправлено!';
?>
