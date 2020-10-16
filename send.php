<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['textarea'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$comment = htmlspecialchars($comment);
$name = urldecode($name);
$phone = urldecode($phone);
$comment = urldecode($comment);
$name = trim($name);
$phone = trim($phone);
$comment = trim($comment);
echo $name;
//echo "<br>";
echo $phone;
echo $comment
if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>