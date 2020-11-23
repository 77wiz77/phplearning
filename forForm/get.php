<!--Получение данных из строки запроса
Пример работы метода передачи GET-->
<?php
$login = "не определен";
$age = "не определен";
if(isset($_GET['login'])){
 
    $login = $_GET['login'];
}
if(isset($_GET['age'])){
 
    $age = $_GET['age'];
}
    echo "Ваш логин: $login <br> Ваш возраст: $age";
?>

<!--
  Данные формы мы также можем передать через запрос GET. 
  Для этого достаточно у формы указать атрибут method="get", 
  и тогда все значения полей формы также будут передаваться через строку запроса:
-->
<br><br><br>

<form method="GET">
    Логин: <input type="text" name="login" /><br><br>
    Пароль: <input type="text" name="password" /><br><br>
    <input type="submit" value="Отправить">
</form>