<?php
  if (isset($_COOKIE['city'])) echo "Город: " . $_COOKIE["city"] . "<br>";
  if (isset($_COOKIE['language'])) echo "Язык: " . $_COOKIE["language"];

  if (isset($_COOKIE['lan'])) {
    foreach ($_COOKIE['lan'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name. $value <br />";
    }
  }

  setcookie ("city", "", time() - 3600);
?>