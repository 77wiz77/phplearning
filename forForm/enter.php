<!--Формы могут содержать различные элементы - текстовые поля, флажки, переключатели и т.д., обработка которых имеет свои особенности.-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Элементы форм</title>
  <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
  <header>

  </header>

  <main>

    <!--Чекбокс или флажок (отмеченный и не отмеченный)-->
    <section>
      Запомнить: <input type="checkbox" name="remember" checked="checked" />
      Запомнить: <input type="checkbox" name="remember" /><br><br>
      <?php //Если флажок отмечен, то при отправке на сервер для поля remember будет передано значение on:
        $remember = $_GET['remember'];
      ?>
      <!--Если нас не устраивает значение on, то с помощью атрибута value мы можем установить нужное нам значение:-->
      Запомнить: <input type="checkbox" name="remember" value="1" /><br><br>
      <!--Иногда необходимо создать набор чекбоксов, где можно выбрать несколько значений. Например: 
      (чтобы выбрать нужно зажать ЛКМ)-->
      ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" />
      PHP: <input type="checkbox" name="technologies[]" value="PHP" />
      RUBY: <input type="checkbox" name="technologies[]" value="Ruby" /><br><br>
      <!--В этом случае значение атрибута name должно иметь квадратные скобки. 
      И тогда после отправки сервер будет получать массив отмеченных значений:-->
      <?php //данная часть кода работать не будет так как значение не передано с помощью формы и <input type="submit" value="Отправить">
      //также нужно переместить php код над формой
        $technologies = $_POST['technologies[]'];
        foreach($technologies as $item) echo "$item<br />";
        //В данном случае переменная $technologies будет представлять массив, 
        //который можно перебрать и выполнять все другие операции с массивами.
      ?>
    </section>

    <!--Переключатели-->
    <section> 
      <br><p>Переключатели или радиокнопки позволяют сделать выбор между несколькими взаимоисключающими вариантами:</p><br>
      <input type="radio" name="course" value="ASP.NET" />ASP.NET <br>
      <input type="radio" name="course" value="PHP" />PHP <br>
      <input type="radio" name="course" value="Ruby" />RUBY <br>
      <input type="submit" value="Отправить">
      <?php //для того чтобы эта часть кода заработала нужна форма и метод POST, также переместить php код над формой
        if(isset($_POST['course']))
        {
            $course = $_POST['course'];
            echo $course;
        }
      ?>
    </section>

    <!--Список-->
    <section>
      <p>Список представляет элемент select, который предоставляет выбор одного или нескольких элементов:</p>
      <select name="course" size="1">
      <option value="ASP.NET">ASP.NET</option>
      <option value="PHP">PHP</option>
      <option value="Ruby">RUBY</option>
      <option value="Python">Python</option>
      <?php
        if(isset($_POST['course']))
        {
            $course = $_POST['course'];
            echo $course;
        }
      ?>
      </select>
      <!--Но элемент select также позволяет множественный выбор. 
      И в этом случае обработка выбранных значений изменяется, так как сервер получает массив значений:-->
      <select name="courses[]" size="4" multiple="multiple">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">RUBY</option>
        <option value="Python">Python</option>
      </select>
      <!--Такие списки имеют атрибут multiple="multiple". 
      Для передачи массива также указываются в атрибуте name квадратные скобки: name="courses[]"-->
      <?php
        if(isset($_POST['courses']))
        {
            $courses = $_POST['courses'];
            foreach($courses as $item) echo "$item<br>";
        }
      ?>
    </section>

  </main>

  <footer>

  </footer>
  
</body>
</html>	
