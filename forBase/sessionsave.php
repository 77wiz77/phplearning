<?php
  require "session.php";
  //Теперь получим эти значения и выведем на страницу:
  if (isset($_SESSION['city']) && isset($_SESSION['lang']))
  {
      $city = $_SESSION['city'];
      $language = $_SESSION['lang'];
      echo "Город: $city <br /> Язык: $language";
  }

  echo "<br><br>";

  /*
  При запуске сессии, если пользователь первый раз заходит на сайт, PHP назначает ему уникальный идентификатор сессии. 
  Этот идентификатор с помощью cookie сохраняется в браузере пользователя. 
  С помощью специальных функций мы можем получить данный идентификатор:
  */
  echo session_id(); // идентификатор сессии
  echo "<br><br>";
  echo session_name();  // имя - PHPSESSID
  echo "<br><br>";
  //То же значение мы могли бы получить, обратившись к cookie напрямую:	
  echo $_COOKIE['PHPSESSID'];
?>