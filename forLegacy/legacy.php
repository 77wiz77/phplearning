<!DOCTYPE html>
<html>
<head>
<title>Основы PHP</title>
<meta charset="utf-8">
</head>
<body>

<!--Пример работы формы через файл display.php -->
  <!-- <h2>ПРИВЕТ:</h2> 
    <form action="/display.php" method="POST">
      <p>Введите имя: <input type="text" name="firstname" /></p> 
      <p>Введите фамилию: <input type="text" name="lastname" /></p>
      <input type="submit" value="Отправить">
    </form> -->
  
<!--Переменные-->
<?php // вывод переменной
  $a = 10;
  echo "a = " . $a . "<br>";
  $b=$a;
  echo "b = " . $b . "<br>";
?>

<?php //проверка на существование
  // $a;
  // if(isset($a)) //проверка на существование
  //     echo "a = " . $a;
  // else
  //     echo "переменная a не определена";
?>
 
<?php //удаление значения переменной
  // $a=20;
  // echo $a . "<br>"; // 20
  // unset($a); //удаление значения переменной a
  // echo $a; // ошибка, переменная не определена (ничего не выведется)
  // if(isset($a)) //проверка на существование
  //     echo "a = " . $a;
  // else
  //     echo "переменная a не определена";
?>

<!--Тип-->

<?php //В php тип данных указывать не нужно, так как в php динамическая типизация
  // $int = -100; //тут int чисто имя переменной
  // echo $int;
?>

<?php //Кроме десятичных целых чисел PHP обладает возможностью использовать также двоичные, восьмеричные и шестнадцатеричные числа.
  // Все числа в десятичной системе имеют значение 28
  // $int_10 = 28; // десятичное число
  // $int_2 = 0b11100; // двоичное число
  // $int_8 = 034; // восьмеричное число
  // $int_16 = 0x1C; // шестнадцатеричное число

  // //выведется везде число 28, php сам преобразовывает другие системы исчисления в десятичные
  // echo "int_10 = $int_10 <br>"; 
  // echo "int_2 = $int_2 <br>"; 
  // echo "int_8 = $int_8 <br>";  
  // echo "int_16 = $int_16";
?>

<?php //тип double
  // $a1 = 1.5; 
  // $a2 = 1.3e4; // 1.3 * 10^4 или 13000
  // $a3 = 6E-8; // 0.00000006
  // echo $a1 . " | " . $a2 . " | " . $a3;
?>

<?php //тип boolean
  // $foo = true;
  // $a=10;
  // $b=5;
  // echo "foo = true <br>";
  // if($foo) //если $foo равно true
  //   echo $a+$b;
  // else
  //   echo $a-$b;
  // $foo = false;
  // echo "<br> foo = false <br>";
  // if($foo)
  //   echo $a+$b;
  // else
  //   echo $a-$b;
?>

<?php //Специальное значение NULL
  // $a;
  // echo $a; //ничего не выведется
?>

<?php //Значение NULL указывает, что значение переменной не определено
  // $a=NULL;

  // if($a)
  //     echo "Переменная a определена";
  // else
  //     echo "Переменная a не определена";

  // $a=null; //Константа NULL не чувствительна к регистру, поэтому мы можем написать и так
?>

<?php //тип строки string
//От типа кавычек зависит обработка строк интерпретатором. 
//Так, переменные в двойных кавычках заменяются значениями, а переменные в одинарных кавычках остаются неизменными.
  // $a=10;
  // $b=5;
  // $result = "$a+$b <br>";
  // echo $result;
  // $result = '$a+$b';
  // echo $result;
  // //$text = "Модель "Apple II""; так неправильно, чтобы вывести ковычки можно воспользоваться знаком слэш перед каждой из них
  // $text = "Модель \"Apple II\"";
  // echo $text;
?>

<?php //тип array (ассоциативные массивы)
  // $phones = array('iPhone', 'Samsung Galaxy S III', 'Nokia N9', 'Samsung ACE II');
  // echo $phones[1];
?>

<!--Константы-->
<?php
// define("NUMBER", 22); // define - оператор для определения константы, позже значение этой переменной изменить нельзя
// echo NUMBER;
// $num = NUMBER;
// echo $num;
?>

<!--Предопределенные константы-->
<!-- 
__FILE__: хранит полный путь и имя текущего файла
__LINE__: хранит текущий номер строки, которую обрабатывает интерпретатор
__DIR__: хранит каталог текущего файла
__FUNCTION__: название обрабатываемой функции
__CLASS__: название текущего класса
__METHOD__: название обрабатываемого метода
__NAMESPACE__: название текущего пространства имен -->

<?php
// echo "Cтрока " . __LINE__ . " в файле " . __FILE__; 
// Чтобы проверить, определены ли константы, мы можем использовать функцию bool defined(string $name). 
// Если константа $name определена, то функция будет возвращать значение true
?>

<!--Получение и установка типа переменной -->
<?php
  // $a = 10;
  // $b = "10";
  // echo is_numeric($a);
  // echo "<br>";
  // echo is_numeric($b);

  /*is_integer($a): возвращает значение TRUE, если переменная $a хранит целое число
  is_string($a): возвращает значение TRUE, если переменная $a хранит строку
  is_double($a): возвращает значение TRUE, если переменная $a хранит действительное число
  is_numeric($a): возвращает значение TRUE, если переменная $a представляет целое или действительное число 
  или является строковым представлением числа. 
  Оба выражения is_numeric() возвратят TRUE, так как переменная $a представляет число, 
  а переменная $b является строковым представлением числа

  is_bool($a): возвращает значение TRUE, если переменная $a хранит значение TRUE или FALSE
  is_scalar($a): возвращает значение TRUE, если переменная $a представляет один из простых типов: 
  строку, целое число, действительное число, логическое значение.
  is_null($a): возвращает значение TRUE, если переменная $a хранит значение NULL
  is_array($a): возвращает значение TRUE, если переменная $a является массивом
  is_object($a): возвращает значение TRUE, если переменная $a содержит ссылку на объект
  gettype($a): возвращает тип переменной $a, например, 
  integer (целое число), double (действительное число), string (строка), boolean (логическое значение), 
  NULL, array (массив), object (объект) или unknown type. Например:*/
?>

<?php //gettype - функция для определения типа переменной
  // $a = 10;
  // $b = "10";
  // echo gettype($a); // integer
  // echo "<br>";
  // echo gettype($b); // string
?>

<!--Установка типа. Функция settype()-->
<?php
  // $a = 10.7;
  // settype($a, "integer"); //Если удалось установить тип, то функция возвращает TRUE, если нет - то значение FALSE.
  // echo $a; // 10
?>

<!--Арифметические операции-->
<?php //пример остаток от деления
  // $a=12;
  // echo $a % 5; // равно 2
?>

<?php //пример инкремента: ++а (когда сначала прибавляется 1, потом выполняется присваивание переменной b)
      //a++ (когда сначала присваивается переменной b, и только потом плюс 1)
  // $a=12;
  // $b=++$a; // $b равно 13
  // echo $b;
?>
<?php
  // $a=12;
  // $a += 5;
  // echo $a; // равно 17
?>
<?php
  // $a=12;
  // $a -= 5;
  // echo $a; // равно 7
?>
<?php
  // $a=12;
  // $a *= 5;
  // echo $a; // равно 60
?>
<?php
  // $a=12;
  // $a /= 5;
  // echo $a; // равно 2.4
?>
<?php //оператор . с числами работает точно также как и с строками (конкатинация символов)
  // $a=12;
  // $a .= 5;
  // echo $a; // равно 125
  // // идентично
  // $b="12";
  // $b .="5"; // равно 125
?>
<?php
  // $a=12;
  // $a %= 5;
  // echo $a; // равно 2
?>

<!--Операции сравнения-->
<!--
== Оператор равенства сравнивает два значения, и если они равны, возвращает true, иначе возвращает false: $a == 5
=== Оператор тождественности также сравнивает два значения, и если они равны, возвращает true, иначе возвращает false: $a === 5
!= Сравнивает два значения, и если они не равны, возвращает true, иначе возвращает false: $a != 5
!== Сравнивает два значения, и если они не равны, возвращает true, иначе возвращает false: $a !== 5
> Сравнивает два значения, и если первое больше второго, то возвращает true, иначе возвращает false: $a > 5
< Сравнивает два значения, и если первое меньше второго, то возвращает true, иначе возвращает false: $a < 5
>= Сравнивает два значения, и если первое больше или равно второму, то возвращает true, иначе возвращает false: $a >= 5
<= Сравнивает два значения, и если первое меньше или равно второму, то возвращает true, иначе возвращает false: $a <= 5-->

<!--Оператор равенства и тождественности-->
<!--Оба оператора сравнивают два выражения и возвращают true, если выражения равны. Но между ними есть различия. 
Если в операции равенства принимают два значения разных типов, то они приводятся к одному - тому, 
который интерпретатор найдет оптимальным.-->
<?php //выведет: равны
  // $a = "22a";
  // $b = 22;
  // if($a==$b)
  //     echo "равны"; 
  // else
  //     echo "не равны";
  /*Очевидно, что переменные хранят разные значения разных типов. 
  Но при сравнении они будут приводится к одному типу - числовому. 
  И переменная $a будет приведена к числу 22. И в итоге обе переменных окажутся равны.*/
?>

<?php //Или, например, следующие переменные также будут равны
  // $a = false;
  // $b = 0;
?>

<?php //Чтобы избежать подобных ситуаций используется операция эквивалентности, которая учитывает не только значение, но и тип переменной:
  //выведет: не равны
  // $a = "22a";
  // $b = 22;
  // if($a===$b)
  //     echo "равны";
  // else
  //     echo "не равны";
  //Теперь переменные будут не равны.
  //Аналогично работают операторы неравенства != и !==.
?>

<!--Логические операции-->
<!--
&& Возвращает true, если обе операции сравнения возвращают true, иначе возвращает false: $a == 5 && $b = 6
and Аналогично операции &&: $a == 5 and $b > 6
|| Возвращает true, если хотя бы одна операция сравнения возвращают true, иначе возвращает false: $a == 5 || $b = 6
or Аналогично операции ||: $a < 5 or $b > 6
! Возвращает true, если операция сравнения возвращает false: !($a >= 5)
xor Возвращает true, если только одно из значений равно true. Если оба равны true или ни одно из них не равно true, возвращает false.
-->
<?php //false
  // $a=12;
  // $b=6;
  // if($a xor $b)
  //     echo 'true';
  // else
  //     echo 'false';
  //Здесь результат логической операции будет false, так как обе переменных имеют определенное значение
?>
<?php //true
  // $a=12;
  // $b=NULL;
  // if($a xor $b)
  //     echo 'true';
  // else
  //     echo 'false';
  // Здесь уже результат будет true, так как значение одной переменной не установлено. 
  // Если переменная имеет значение NULL, то в логических операциях ее значение будет рассматриваться как false
?>

<!--Битовые операции-->
<!--Битовые операции производятся над отдельными битами числа. 
Числа рассматриваются в двоичном представлении, например, 2 в двоичном представлении 010, число 7 - 111.

& (логическое умножение) Умножение производится поразрядно, и если у обоих операндов значения разрядов равно 1, 
то операция возвращает 1, иначе возвращается число 0. Например:-->
<?php
  // $a1 = 4; //100
  // $b1 = 5; //101
  // echo $a1 & $b1; // равно 4
  //Здесь число 4 в двоичной системе равно 100, а число 5 равно 101. 
  //Поразрядно умножим числа и получим (1*1, 0*0, 0 *1) = 100, то есть число 4 в десятичном формате.
?>

<!--
  | (логическое сложение)
Похоже на логическое умножение, операция также производится по двоичным разрядам, 
но теперь возвращается единица, если хотя бы у одного числа в данном разряде имеется единица. Например:-->
<?php
  // $a1 = 4; //100
  // $b1 = 5; //101
  // echo $a1 | $b1; // равно 5
?>

<!--
  ~ (логическое отрицание)
инвертирует все разряды: если значение разряда равно 1, то оно становится равным нулю, и наоборот.-->
<?php
  // $b = 5;
  // echo ~$b; // -6
?>

<!--
  <<
x<<y - сдвигает число x влево на y разрядов. 
Например, 4<<1 сдвигает число 4 (которое в двоичном представлении 100) на один разряд влево, 
то есть в итоге получается 1000 или число 8 в десятичном представлении

  >>
x>>y - сдвигает число x вправо на y разрядов. 
Например, 16>>1 сдвигает число 16 (которое в двоичном представлении 10000) на один разряд вправо, 
то есть в итоге получается 1000 или число 8 в десятичном представлении
-->

<!--Объединение строк-->
<?php
  // $a="Привет, ";
  // $b=" мир";
  // echo $a . $b . "!"; //Привет, мир!
  //Если переменные представляют не строки, а другие типы, 
  //например, числа, то их значения преобразуются в строки и затем также происходит операция объединения строк.
?>

<!--Условные конструкции-->
<?php //Конструкция if..else
  // $a = 4;
  // $b = 2;
  // if($a>0)
  // {
  //     $result= $a * $b;
  //     echo "результат равен: $result <br>";
  // }
  // echo "конец выполнения программы";
?>
<?php //если блок содержит одну инструкцию можно опустить фигурные скобки
  // $a = 4;
  // $b = 2;
  // if($a>0)
  //     echo $a * $b;
  // echo "<br>конец выполнения программы";
?>
<?php //Можно в одной строке поместить всю конструкцию:
  // if($a>0) echo $a * $b;
?>

<?php
  // $a = 4;
  // $b = 2;
  // if($a>0)
  // {
  //     echo $a * $b;
  // }
  // else
  // {
  //     echo $a / $b;
  // }
  // echo "<br>конец выполнения программы";
?>

<?php //Поскольку здесь в обоих блоках по одной инструкции, также можно было не использовать фигурные скобки для определения блоков:
  // if($a>0)
  //   echo $a * $b;
  // else
  //   echo $a / $b;
?>

<?php // условие elseif
  // $a = 5;
  // $b = 2;
  // if($a<0)
  // {
  //     echo $a * $b;
  // }
  // elseif($a==0)
  // {
  //     echo $a + $b;
  // }
  // elseif($a==5)
  // {
  //     echo $a - $b;
  // }
  // else
  // {
  //     echo $a / $b;
  // }
?>

<?php //Конструкция switch..case
  // $a = 1;
  // if($a==1)     echo "сложение";
  // elseif($a==2) echo "вычитание";
  // elseif($a==3) echo "умножение";
  // elseif($a==4) echo "деление";

  //или через switch
  // $a = 1;
  // switch($a)
  // {
  //     case 1: 
  //         echo "сложение";
  //         break;
  //     case 2: 
  //         echo "вычитание";
  //         break;
  //     case 3: 
  //         echo "умножение";
  //         break;
  //     case 4: 
  //         echo "деление";
  //         break;
  // }
?>
<?php
  // $a = 1;
  // switch($a)
  // {
  //     case 1: 
  //         echo "сложение";
  //         break;
  //     case 2: 
  //         echo "вычитание";
  //         break;
  //     default: 
  //         echo "действие по умолчанию";
  //         break;
  // }
?>
<?php //Тернарная операция
  /*Тернарная операция состоит из трех операндов и имеет следующее определение: 
  [первый операнд - условие] ? [второй операнд] : [третий операнд]. 
  В зависимости от условия тернарная операция возвращает второй или третий операнд: 
  если условие равно true, то возвращается второй операнд; если условие равно false, то третий. Например:*/
  // $a = 1;
  // $b = 2;
  // $z = $a < $b ? $a + $b : $a - $b;
  // echo $z;
  /*Если значение переменной $a меньше $b и условие истинно, то переменная $z будет равняться $a + $b. 
  //Иначе значение $z будет равняться $a - $b*/
?>

<!--Циклы-->
<?php //цикл for
  // for ($i = 1; $i < 10; $i++)
  // {
  //     echo "Квадрат числа $i равен " . $i * $i . "<br/>";
  // }
?>

<?php //цикл while
  // $counter = 1;
  // while($counter<10)
  // {
  //     echo $counter * $counter . "<br />";
  //     $counter++;
  // }

  //или если всего одна конструкция можно убрать фигурные скобки так

  // $counter = 0;
  // while(++$counter<10)
  //     echo $counter * $counter . "<br />";
?>

<?php //цикл do..while
  // $counter = 1;
  // do
  // {
  //     echo $counter * $counter . "<br />";
  //     $counter++;
  // }
  // while($counter<10)
?>

<?php //оператор break прерывание
  // for ($i = 1; $i < 10; $i++)
  // {
  //     $result = $i * $i;
  //     if($result>80)
  //     {
  //         break;
  //     }
  //     echo "Квадрат числа $i равен $result <br/>";
  // }
?>

<?php //оператор continie продолжение
  // for ($i = 1; $i < 10; $i++)
  // {
  //     if($i==5)
  //     {
  //         continue;
  //     }
  //     echo "Квадрат числа $i равен " . $i * $i . "<br/>";
  // }
?>

<!--Функции-->
<?php
  // function display()
  // {
  //     echo "вызов функции display()";
  // }
?>

<?php
//  display();
  
//  function display()
//  {
//      echo "вызов функции display()";
//  }
?>

<?php //Возвращение значения и оператор return
  // $a = get(); //присваивание переменной а значения функции get
  // echo "Сумма квадратов от 1 до 9 равна $a";
  
  // function get()
  // {
  //     $result = 0; // возвращаемое значение
  //     for($i = 1; $i<10; $i++)
  //     {
  //         $result+= $i * $i;
  //     }
  //     return $result;
  // }
?>

<?php //Использование параметров
  // $a = get(1, 10);
  // echo "Сумма квадратов от 1 до 9 равна $a";
  
  // function get($lowlimit, $highlimit)
  // {
  //     $result = 0; // возвращаемое значение
  //     for($i = $lowlimit; $i < $highlimit; $i++)
  //     {
  //         $result+= $i * $i;
  //     }
  //     return $result;
  // }
?>

<?php
  // function get($lowlimit, $highlimit=10) //задаем значение по умолчанию
  // {
  //     $result = 0; // возвращаемое значение
  //     for($i = $lowlimit; $i < $highlimit; $i++)
  //     {
  //         $result+= $i * $i;
  //     }
  //     return $result;
  // }
  
  // $a = get(1);
  // echo "Сумма квадратов равна $a";
?>

<?php //передача по ссылке
  // $number = 10; 
  // get($number); //get считать значение переменной
  // echo "<br /> \$number равно: $number";
  
  // function get($a)
  // {
  //     $a*=$a;
  //     echo "Квадрат равен: $a";
  // }
?>

<?php //передача параметра по ссылке
  /*При передаче по ссылке перед параметром ставится знак амперсанда: function get(&$a). 
  Теперь интерпретатор будет передавать не значение переменной, а ссылку на эту переменную в памяти, в итоге, 
  переменная $number после передачи на место параметра &$a также будет изменяться.*/

  // $number = 10; 
  // get($number);
  // echo "<br /> \$number равно: $number";
  
  // function get(&$a)
  // {
  //     $a*=$a;
  //     echo "Квадрат равен: $a";
  // }
?>

<!--Области видимости переменной-->
<?php //локальные переменные
  // //Локальные переменные создаются внутри функции. К таким переменным можно обратиться только изнутри данной функции.
  // function get($lowlimit, $highlimit)
  // {
  //     $result = 0; // возвращаемое значение
  //     for($i = $lowlimit; $i < $highlimit; $i++)
  //     {
  //         $result+= $i * $i;
  //     }
  //     return $result;
  // }
  // $a = $result; // так нельзя написать, так как $result - локальная переменная
  // echo "Сумма квадратов от 1 до 9 равна $a";
?>

<?php //статические переменные
//после завершения работы функции их значение сохраняется. При каждом новом вызове функция использует ранее сохраненное значение
  // function getCounter()
  // {
  //     static $counter = 0;
  //     $counter++;
  //     echo $counter;
  // }
  // getCounter(); // counter=1
  // getCounter(); // counter=2
  // getCounter(); // counter=3
?>

<?php //глобальные переменные
/*Иногда требуется, чтобы переменная была доступна везде, глобально. 
Подобные переменные могут хранить какие-то общие для всей программы данные. 
Для определения глобальных переменных используется ключевое слово global:*/
  // function getGlobal()
  // {
  //     global $gvar;
  //     $gvar = 20;
  //     echo "$gvar <br />";
  // }
  // getGlobal();
  // echo $gvar;
  //После вызова функции getGlobal() к переменной $gvar можно будет обратиться из любой части программы.
?>

<!--Подключение внешних файлов-->
<?php //Инструкция include
//Инструкция include подключает в программу внешний файл с кодом php.
  // include "/factorial.php";
  
  // $a = 5;
  // $fact = getFactorial($a); //getFactorial - функция из файла factorial.php
  // echo "Факториал числа $a равен $fact";
?>

<?php //Инструкция include_once //работает как и include, но вызывается один раз
  // include_once "factorial.php";
  
  // $a = 5;
  // $fact = getFactorial($a);
  // echo "Факториал числа $a равен $fact";
  /*И теперь, если мы подключим этот же файл с помощью include_once еще где-нибудь ниже, 
  то это подключение будет проигнорировано, так как файл уже подключен в программу.*/
?>

<?php //Инструкции require и require_once
  //require "factorial.php"; //работает как include, только если файл не будет найден действие программы прекратится
?>

<?php
  //require_once "factorial.php"; //тоже самое что и require только используется один раз
?>

<!--Массивы-->
<?php
  // $phones[0] = "Nokia N9";
  // $phones[1] = "Samsung Galaxy ACE II";
  // $phones[2] = "Sony Xperia Z3";
  // $phones[3] = "Samsung Galaxy III";
  
  // for($i=0;$i<count($phones);$i++) //count(x) - количество элементов в массиве х
  //     echo "$phones[$i] <br />";

  // print_r($phones); //вывести массив в виде ключ/значение
?>

<?php //тоже самое что и в блоке выше
  // $phones[] = "Nokia N9";
  // $phones[] = "Samsung Galaxy ACE II";
  // $phones[] = "Sony Xperia Z3";
  // $phones[] = "Samsung Galaxy III";
  // $num = count($phones); 
  // for($i=0;$i<$num;$i++)
  //     echo "$phones[$i] <br />";

  // // получим элемент по ключу 1
  // $myPhone = $phones[1];
  // echo "$myPhone <br />";
  // // присвоение нового значения
  // $phones[1] = "Samsung X650";
  // echo "$phones[1] <br />";
?>

<?php //также в качестве ключей могут использоваться строки
  // $phones["nokia"] = "Nokia N9";
  // $phones["samsumg"] = "Samsung Galaxy III";
  // $phones["sony"] = "Sony Xperia Z3";
  // $phones["apple"] = "iPhone5";
  // echo $phones["samsumg"];
?>

<?php //оператор array / еще один способ создания массива
  // $phones = array('iPhone', 'Samsung Galaxy S III', 'Nokia N9', 'Sony XPeria Z3');
  // echo $phones[1];
?>

<?php //PHP автоматически нумерует элементы с нуля. Но мы также можем указать для каждого элемента ключ:
  // $phones = array("apple"=>"iPhone5", "samsumg"=>"Samsung Galaxy III", 
  // "nokia" => "Nokia N9", "sony" => "Sony XPeria Z3");
  // echo $phones["samsumg"]
?>

<?php //перебор ассоциативных массивов
/*Ассоциативный массив - Это такие же массивы, только у них индекс не число, а строка. Или что угодно ещё. */
  // $phones = array("apple"=>"iPhone5", 
  //                 "samsumg"=>"Samsung Galaxy III", 
  //                 "nokia" => "Nokia N9", 
  //                 "sony" => "Sony XPeria Z3");
  // foreach($phones as $item)
  //     echo "$item <br />";
  /*В цикле foreach из массива последовательно извлекаются все элементы и их значение помещается в переменную, 
  указанную после ключевого слова as. В данном случае в переменную $item по очереди помещаются все четыре значения из массива $phones. 
  Когда будет извлечен последний элемент из массива, цикл завершается.*/
?>

<?php //Цикл foreach позволяет извлекать не только значения, но и ключи элементов:
  // $phones = array("apple"=>"iPhone5", 
  //                 "samsumg"=>"Samsung Galaxy III", 
  //                 "nokia" => "Nokia N9", 
  //                 "sony" => "Sony XPeria Z3");
  // foreach($phones as $key=>$value)
  //     echo "$key => $value <br />";
?>

<?php //Альтернативу циклу foreach представляет использование функций list и each:
  // $phones = array("apple"=>"iPhone5", 
  //                 "samsumg"=>"Samsung Galaxy III", 
  //                 "nokia" => "Nokia N9", 
  //                 "sony" => "Sony XPeria Z3");
  // while (list($key, $value) = each($phones))
  //     echo "$key => $value <br />"; //тоже самое что и в блоке выше
  /*Цикл while будет работать, пока функция each не вернет значение false. 
  Функция each проходит по всем элементам массива $phones и получает его в виде массива, в который входят ключ и значение элемента. 
  Затем этот массив передается функции list и проиcходит присваивает значения массива переменным внутри скобок. 
  Когда функция each закончит перебор элементов массива $phones, она возвратит false, и действие цикла while будет завершено.*/
?>

<?php //многомерные массивы / в PHP массивы могут также быть многомерными, то есть такими, где элемент массива сам является массивом
  // $phones = array(
  //         "apple"=> array("iPhone5", "iPhone5s", "iPhone6") , 
  //         "samsumg"=>array("Samsung Galaxy III", "Samsung Galaxy ACE II"),
  //         "nokia" => array("Nokia N9", "Nokia Lumia 930"), 
  //         "sony" => array("Sony XPeria Z3", "Xperia Z3 Dual", "Xperia T2 Ultra"));
  // foreach ($phones as $brand => $items) //=>является разделителем для ассоциативных массивов. 
  // //В контексте этого цикла foreach он присваивает ключ массива $brand и значение $items.
  // {
  //     echo "<h3>$brand</h3>";
  //     echo "<ul>";
  //     foreach ($items as $key => $value)
  //     {
  //         echo "<li>$value</li>";
  //     }
  //     echo "</ul>";
  // }
  	
  // echo $phones["apple"][0];
  // echo $phones["nokia"][1];
?>

<?php //Допустим, вложенные массивы также представляют ассоциативные массивы:
  // $technics = array(
  //         "phones" => array("apple" => "iPhone5", 
  //                     "samsumg" => "Samsung Galaxy III",
  //                     "nokia" => "Nokia N9"),
  //         "tablets" => array("lenovo" => "Lenovo IdeaTab A3500", 
  //                         "samsung" => "Samsung Galaxy Tab 4",
  //                         "apple" => "Apple iPad Air"));
  // foreach ($technics as $tovar => $items)
  // {
  //     echo "<h3>$tovar</h3>";
  //     echo "<ul>";
  //     foreach ($items as $key => $value)
  //     {
  //         echo "<li>$key : $value</li>";
  //     }
  //     echo "</ul>";
  // }
  // // присвоим одному из элементов другое значение
  // $technics["phones"]["nokia"] = "Nokia Lumnia 930";
  // // выведем это значение
  // echo $technics["phones"]["nokia"];
?>

<!--Операции с массивами-->
<?php //Функция is_array 
  // //Функция is_array() проверяет, является ли переменная массивом, и если является, то возвращает true, иначе возвращает false.
  // $isar = is_array($technics);
  // echo ($isar==true)?"это массив":"это не массив";
?>
<?php //Функции count/sizeof
  // //Функция count() и sizeof() получают количество элементов массива:
  // $number = count($technics);
  // // то же самое, что
  // // $number = sizeof($technics);
  // echo "В массиве technics $number элементов";
?>
<?php //Функции shuffle
  // //Функция shuffle перемешивает элементы массивы случайным образом:
  // $os = array("Windows 95", "Windows XP", "Windows Vista", "Windows 7", "Windows 8", "Windows 10");
  // shuffle($os);
  // print_r($os);
  // // один из возможных вариантов
  // // Array ( [0] => Windows 95 [1] => Windows 7 [2] => Windows Vista [3] => Windows XP [4] => Windows 10 [5] => Windows 8)
?>
<?php //Функции compact
  // //Функция compact позволяет создать из набора переменных ассоциативный массив, где ключами будут сами имена переменных:
  // $model = "Apple II";
  // $producer = "Apple";
  // $year = 1978;
  
  // $data = compact('model', 'producer', 'year');
  // print_r($data);
  // // получится следующий вывод
  // // Array ( [model] => Apple II [producer] => Apple [year] => 1978 ) 

  // //Функция compact получает в скобках набор переменных. 
  // //Каждая переменная указывается в кавычка без знака $. Результатом функции является новый массив.
?>

<!--В PHP имеются два типа сортировки: сортировка строк по алфавиту и сортировка чисел по возрастанию/убыванию. 
Если сортируемые значения представляют строки, то они сортируются по алфавиту, 
если числа - то они сортируются в порядке возрастания чисел. PHP по умолчанию самостоятельно выбирает тип сортировки.

Для сортировки по возрастанию используется функция asort:-->
<?php //Сортировка массива с помощью функции asort()
  // $tablets = array("lenovo" => "Lenovo IdeaTab A3500", 
  //                         "samsung" => "Samsung Galaxy Tab 4",
  //                         "apple" => "Apple iPad Air");
  // asort($tablets);
  
  // echo "<ul>";
  // foreach ($tablets as $key => $value)
  // {
  //     echo "<li>$key : $value</li>"; //будет сортировка массива по возрастанию по алфавитному порядку
  // }
  // echo "</ul>";
?>
<!--В данном случае значения массива представляют строки, поэтому PHP выберет сортировку по алфавиту. 
Однако с помощью дополнительного параметра мы можем явно указать интерпретатору PHP тип сортировки. 
Данный параметр может принимать три значения:
SORT_REGULAR: автоматический выбор сортировки
SORT_NUMERIC: числовая сортировка
SORT_STRING: сортировка по алфавиту
Укажем явно тип сортировки:-->
<?php //указываем тип сортировки по алфавиту в функции asort 
  //asort($tablets, SORT_STRING);
?>
<?php //Чтобы отсортировать массив в обратном порядке, применяется функция arsort:
  //arsort($tablets);
?>
<!--Сортировка по ключам-->
<?php /*Функция asort производит сортировку по значениям элементов, но также существует и еще и сортировка по ключам. 
  Она представлена функцией ksort:*/
  // ksort($tablets, SORT_STRING);
  //Сортировка по ключам в обратном порядке выполняется функцией krsort():
  // krsort($tablets);
?>
<!--Естественная сортировка
Хотя выше описанные функции сортировки прекрасно выполняют свою работу, но их возможностей все-таки недостаточно. 
Например, отсортируем по возрастанию следующий массив:-->
<?php
  // $os = array("Windows 7", "Windows 8", "Windows 10");
  // asort($os);
  // print_r($os);
  // // результат
  // // Array ( [2] => Windows 10 [0] => Windows 7 [1] => Windows 8 ) 
?>
<!--Так как значения представляют строки, то PHP сортирует по алфавиту. 
Однако подобная сортировка не учитывает числа и регистр. 
Поэтому значение "Windows 10" будет идти в самом начале, а не в конце, как должно было быть. 
И для решения этой проблемы в PHP есть функция natsort(), которая выполняет естественную сортировку:-->
<?php //функция natsort()
  // $os = array("Windows 7", "Windows 8", "Windows 10");
  // natsort($os);
  // print_r($os);
  // // результат
  // // Array ( [0] => Windows 7 [1] => Windows 8 [2] => Windows 10) 
?>
<!--Если нам надо еще при этом, чтобы сортировка не учитывала регистр, то мы можем применить функцию natcasesort():-->
<?php
  // natcasesort($os);
?>

<!--Конец по основам PHP 
Не забыть создать главную страницу и отдельную папку под Legacy и поменять пути в двух местах с помощью ctrl F-->
</body>
</html>