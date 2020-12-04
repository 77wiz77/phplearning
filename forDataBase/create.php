<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт
 
if(isset($_POST['name']) && isset($_POST['company'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));
    /*
    Здесь мы использовали функцию mysqli_real_escape_string(). 
    Она служит для экранизации символов в строке, которая потом используется в запросе SQL. 
    В качестве параметров она принимает объект подключения и строку, которую надо экранировать.
    Таким образом, мы применяем экранизацию символов фактически два раза: 
    сначала для sql-выражения с помощью функции mysqli_real_escape_string(), 
    а затем для html с помощью функции htmlentities(). Это позволит нам защититься сразу от двух видов атак: XSS-атак и SQL-инъекций.
    */
     
    // создание строки запроса
    $query ="INSERT INTO tovars VALUES(NULL, '$name','$company')"; //$query ="INSERT INTO tovars VALUES(NULL, 'Samsung Galaxy III','Samsumg')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<h2>Добавить новую модель</h2>
<form method="POST">
<p>Введите модель:<br> 
<input type="text" name="name" /></p>
<p>Производитель: <br> 
<input type="text" name="company" /></p>
<input type="submit" value="Добавить">
</form>
</body>
</html>