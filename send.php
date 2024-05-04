<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$name = trim(urldecode(htmlspecialchars($name)));
$email = trim(urldecode(htmlspecialchars($email)));
$msg = trim(urldecode(htmlspecialchars($msg)));

if(mail("neoldboymrdavid@gmail.com",
"Новый запрос на создание сайта",
"<h1>На сайте оставлена заявка</h1>
<br>От:<b>".$name."</br>
<br>email:<b>".$email."</br>
<br>комментарий:<b>".$msg."
<br>Поздравляю с новой заявкой!",
"From: 1c-webdevelopment.ru\r\n". "Content-type: text/html\r\n"))

{
    echo"{'status': 'ok'}";
}else{
    echo"{'status': 'error'}";
}