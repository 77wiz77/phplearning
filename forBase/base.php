<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Базовые возможности php</title>
</head>
<body>

<header class="header-page">
  <h1>Работа со строками</h1> <br>
</header>

<main>
  <section>
    <?php //Функции strpos() и mb_strpos()
    /*
    Функция strpos($str, $search) возвращает позицию подстроки или символа $search в строке $str или значение false, 
    если строка $str не содержит подстроки $search:
    */
      // $input = 'This is the end'; 
      // $search = 'is';
      // $position = strpos($input, $search); // 2
      // if($position!==false)
      // {
      //     echo "Позиция подстроки '$search' в строке '$input': $position";
      // }
    ?>
    <!--При использовании этой функции надо учитывать, что индексация символов в строке начинается с нуля, 
    поэтому позиция символа 'T' будет равна 0. Поэтому сравнение $position!=false будет работать некорректно, 
    ведь false и 0 при сравнении и приведении к общему типу будут представлять одно и то же значение. 
    Поэтому в данном случае корректно использовать только операцию эквивалентности: $position!==false или $position===false.
    Теперь применим функцию на другом примере:-->
    <?php
      // $input = 'Мама мыла раму'; 
      // $search = 'мы';
      // $position = strpos($input, $search); // 9
      // /*Неожиданно, но результатом функции будет число 9. 
      // Хотя мы видим, что истинная позиция подстроки 'мы' в исходной строке равна 5.
      // Все дело в том, что некоторые строковые функции не всегда корректно обрабатывают кириллические символы, 
      // и для них лучше использовать другую функцию - mb_strpos():*/
    ?>
    <?php	
      // $position = mb_strpos($input, $search); // 5 / работает с кириллицей
    ?>
  </section>

  <section>
    <?php //Функция strrpos()
    //Функция strrpos() во многом аналогична функции strpos(), только ищет позицию не первого, а последнего вхождения подстроки в строку:
      // $input = 'This is the end'; 
      // $search = 'is';
      // $position = strpos($input, $search); // 5
    ?>
    <?php
      /*Но опять же данная функция не совсем корректно работает с кириллическими символами, 
      поэтому нам надо использовать ее аналог - mb_strrpos():*/
      // $position = mb_strrpos($input, $search);
    ?>
  </section>
  
  <section>
    <?php //Функция trim()
    //Функция trim($str) удаляет из строки начальные и конечные пробелы, а также управляющие символы '\n', '\r', '\t':
      // $input = '  Мама мыла раму  ';
      // $input = trim($input);
      // echo $input;
    ?>
  </section>

  <section>
    <?php //Изменение регистра
    // //Для перевода строки в нижний регистр используется функция strtolower:
    //   $input = 'The World is Mine';
    //   $input = strtolower($input);
    //   //Для перевода в нижний регистр строки с кириллическими символами можно использовать функцию mb_strtolower:
    //   $input = mb_strtolower($input);
    //   //Для перевода строки в верхний регистр примеяются функции strtoupper()/mb_ strtoupper(), которые работают аналогично.
    ?>
  </section>

  <section>
    <?php //Функция strlen()
    // //Функция strlen() возвращает длину строки, то есть количество символов в ней:
    //   $input = 'Hello world';
    //   $num = strlen($input);
    //   echo $num;

    //   //Функция strlen() также некорректно работает с кириллицей, поэтому в этом случае лучше применять функцию mb_strlen():
    //   $input = 'Мама мыла раму';
    //   $num = mb_strlen($input);
    //   echo $num;
    ?>
  </section>

  <section>
    <?php //Получение подстроки
    /*Применяя функцию substr($str, $start [, $length]), можно получить из одной строки ее определенную часть. 
    Данная функция обрезает строку $str, начиная c символа в позиции $start до конца строки. 
    С помощью дополнительного необязательного параметра $length можно задать количество вырезаемых символов.*/
      // $input = 'The world is mine!'; 
      // $subinput1 = substr($input, 2);
      // $subinput2 = substr($input, 2, 6);
      // echo $subinput1; //e world is mine!
      // echo "<br />";
      // echo $subinput2; //e worl

      // //Так как данная функция некорректно работает с кириллицей, то вместо нее следует применять функцию mb_substr(), 
      // //которая действует аналогично:
      // $input = 'Мама мыла раму'; 
      // $subinput1 = mb_substr($input, 2);
      // $subinput2 = mb_substr($input, 2, 6);
    ?>
  </section>

  <section>
    <?php //Замена подстрок
    /*Для замены определенной части строки применяется функция str_replace($old, $new, $input). 
    Эта функция заменяет в строке $input все вхождения подстроки $old на подстроку $new с учетом регистра:*/
      $input = 'Мама мыла раму'; 
      $input = str_replace("мы", "ши", $input);
      echo $input;
    ?>
  </section>
</main>

<footer class="footer-page">
  <p></p>
</footer>
  
</body>
</html>