
<meta charset="utf-8"> 
<?php

error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['Email']))		{$Email		= $_POST['Email'];		if ($Email == '')	{unset($Email);}}
if (isset($_POST['textar']))			{$textar			= $_POST['textar'];		if ($textar == '')	{unset($textar);}}
if (isset($_POST['send_message']))			{$send_message			= $_POST['send_message'];		if ($send_message == '')		{unset($send_message);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($Email) ) {
$Email=stripslashes($Email);
$Email=htmlspecialchars($Email);
}
if (isset($textar) ) {
$textar=stripslashes($textar);
$textar=htmlspecialchars($textar);
}
// адрес почты куда придет письмо
$address="dracon.24041250@mail.ru";
// текст письма 
$note_textar="Тема :  \r\nИмя : $name \r\n Email : $Email \r\n Дополнительная информация : $textar";

if (isset($name)  &&  isset ($send_message) ) {
mail($address,$note_textar,"Content-type:textar/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b style='color:red;'> $Email</b>.</p>";
}

?>
