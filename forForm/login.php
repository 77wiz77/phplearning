<?php
  $login = "Не известно";
  $password = "Не известно";
  //если логин и пароль существуют то вставить их
  if(isset($_POST['login'])) $login = $_POST['login']; //isset - проверка на существование
  if (isset($_POST['password'])) $password = $_POST['password'];
  
  echo "Ваш логин: $login  <br> Ваш пароль: $password";
?>