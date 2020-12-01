<?php
  require_once 'connection.php'; // подключаем скрипт
  
  // подключаемся к серверу
  $link = mysqli_connect($host, $user, $password, $database) 
      or die("Ошибка " . mysqli_error($link));
  
  // выполняем операции с базой данных
  $query ="SELECT * FROM phones";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  if($result)
  {
      echo "Выполнение запроса прошло успешно <br>";
  }

  //создаем таблицу товары
  $query =
  "CREATE Table tovars
  (
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(200) NOT NULL,
      company VARCHAR(200) NOT NULL
  )";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  if($result)
  {
      echo "Создание таблицы прошло успешно";
  }

  //удаляем таблицу товары
  $query ="DROP TABLE tovars";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  if($result)
  {
      echo "Удаление таблицы прошло успешно";
  }
  // закрываем подключение
  mysqli_close($link);
?>