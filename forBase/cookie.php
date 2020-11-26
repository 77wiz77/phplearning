<?php //Для сохранения куки на компьютере пользователя используется функция setcookie(). Она имеет следующее определение:
  bool setcookie(string $name, string $value, int $expire, string $path, string $domain, bool $secure, bool $httponly);
  $value1 = "Сингапур";
  $value2 = "китайский";
  setcookie("city", $value1);
  setcookie("language", $value2, time()+3600);  // срок действия 1 час
?>