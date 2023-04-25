<?php

if(isset($_POST['submit'])) {
    $to = $_POST['email'];; // электронный адрес получателя
    $subject = $_POST['subject']; // тема сообщения, полученная из формы
    $message = $_POST['message']; // сообщение, полученное из формы
    $from = "1903kirill04@mail.ru"; // электронный адрес отправителя, полученный из формы
    $headers = "From:" . $from;
    
    if(mail($to,$subject,$message,$headers)) {
        echo "Сообщение успешно отправлено.";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}

?>
