<!DOCTYPE html>
<html>
<head>
<title>Первый сайт на PHP</title>
<meta charset="utf-8">
</head>
<body>

<!--Пример работы формы через файл display.php -->
<h2>ПРИВЕТ:</h2> 
  <form action="display.php" method="POST">
    <p>Введите имя: <input type="text" name="firstname" /></p> 
    <p>Введите фамилию: <input type="text" name="lastname" /></p>
    <input type="submit" value="Отправить">
  </form>

<?php // вывод переменной
  $a = 10;
  echo $a;
  $a = 10;
  $b=$a;
  echo $b;
?>

<?php
  $a;
  if(isset($a)) //проверка на существование
      echo $a;
  else
      echo "переменная a не определена";
?>


</body>
</html>