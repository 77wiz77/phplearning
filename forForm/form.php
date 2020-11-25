<!--Пример обработки форм
Пример передачи данных методом POST
Метод POST передает данные таким образом, что пользователь сайта уже не видит передаваемые скрипту данные:
http://www.komtet.ru/script.php

Метод GET отправляет скрипту всю собранную информацию формы как часть URL:
http://www.komtet.ru/script.php?login=admin&name=komtet-->

<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
  <h3>Вход на сайт</h3>
  <form action="login.php" method="POST">
    Логин: <input type="text" name="login" /><br><br>  //тег name это ключ для связи php   
    Пароль: <input type="text" name="password" /><br><br>
    <input type="submit" value="Войти"> //type submit - отправить данные
  </form>
</body>
</html> 

Ниже тоже самое, но скрипт выполняется в самом документе (нужно php код в самое начало писать)
-->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<div>
<?php
  // if(isset($_POST['login']) && isset($_POST['password'])){
  
  //   $login=htmlentities($_POST['login']); //функция htmlentities преобразует символы в соответствующие html сущности
  //   //другими словами выводит символы с спец знаками типа: &lt;b&gt;bold&lt;/b&gt;
  //   $password = htmlentities($_POST['password']);
  //   echo "Ваш логин: $login <br> Ваш пароль: $password";
  // }
?>
<?php
  if(isset($_POST['login']) && isset($_POST['password'])){
  
  $login=strip_tags($_POST['login']); //strip_tags - полностью убирает теги html из введенной строки
  $password = strip_tags($_POST['password']);
  echo "Ваш логин: $login <br> Ваш пароль: $password";
  }
?>

</div>

<h3>Вход на сайт</h3>
<form method="POST">
    Логин: <input type="text" name="login" /><br><br>
    Пароль: <input type="text" name="password" /><br><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>