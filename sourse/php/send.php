<?php
$name = $_POST['name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$textar= $_POST['textar'];

$name = htmlspecialchars($name);
$Email = htmlspecialchars($Email);
$Subject = htmlspecialchars($Subject);
$textar = htmlspecialchars($textar);

$name = urldecode($name);
$Email = urldecode($Email);
$Subject = urldecode($Subject);
$textar = urldecode($textar);

$name = trim($name);
$Email = trim($Email);
$Subject = trim($Subject);
$textar = trim($textar);

echo $name;
echo "<br>";
echo $Email;

if(mail('dracon.24041230@mail.ru','Новое письмо с сайта',
"Имя: "$name"\n",
"Email: "$Email"\n",
"Cообщение: "$textar"\n",
"Предмет: "$Subject,
"From: no-reply@mydomain.ru \r\n"))
{
    echo ('Отправлено!');
}
else{
    echo('Eсть ошибки! Проверьте данные!');
}
?>