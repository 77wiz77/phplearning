<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM tovars";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result) 
{
  //Для вывода результатов запроса здесь используется цикл for. 
  //Для цикла for нам нужно знать, сколько всего строк получено в переменной $result. Для этого применяется функция mysqli_num_rows().
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo 
    "
    <table>
      <tr>
        <th>Id</th>
        <th>Модель</th>
        <th>Производитель</th>
      </tr>
    ";

    //Для прохода по строкам используется следующий цикл:
    for ($i = 0 ; $i < $rows ; ++$i)
    {
      //Чтобы извлечь отдельную строку, используется функция mysqli_fetch_row(). 
      //После вызова этой функции указатель в наборе $result переходит к новой строке, 
      //поэтому с каждым новым вызовом мы извлекаем новую строку.
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            //Внутренний цикл осуществляет перебор по ячейкам текущей строки:
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
            /*Так как при выборки мы получаем данные для всех трех столбцов таблицы, то счетчик $j проходит от 0 до 3. 
            Каждая строка представляет собой массив ячеек, поэтому с помощью выражения $row[$j] 
            мы можем получить доступ к конкретной ячейке строки.*/
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}

//Мы также можем получать не все данные, а, например, данные для определенных столбцов. Например, получим только названия моделей:
$query1 ="SELECT name FROM tovars";
 
$result = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "<ul>";
    while ($row = mysqli_fetch_row($result)) {
        echo "<li>$row[0]</li>";
    }
    echo "</ul>";
     
    mysqli_free_result($result);
}
/*
В этом случае каждая строка в наборе $result будет содержать только одну ячейку, то есть обратиться $row[1], 
мы не сможем, так как в данном случае извлекаем данные только для одного столбца.
*/
 
mysqli_close($link);
?>
</body>
</html>