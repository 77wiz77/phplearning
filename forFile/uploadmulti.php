<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
  <?php
  if($_FILES)
  {
      foreach ($_FILES["uploads"]["error"] as $key => $error) { //извлечение ключей элементов с помощью цикла
        //иначе говоря каждый файл отдельно проверяется. Извлекается из массива $_FILES и помещается в переменную error
          if ($error == UPLOAD_ERR_OK) { //если файл существует
              $tmp_name = $_FILES["uploads"]["tmp_name"][$key]; //путь к временному месту файла (ну и его имя)
              $name = $_FILES["uploads"]["name"][$key]; //путь к постоянному месту файла (ну и его имя)
              move_uploaded_file($tmp_name, "$name"); //первое это временный путь, второе постоянный
          }
      }
  }
  
  ?>
  <h2>Загрузка файла</h2>
  <form method="post" enctype='multipart/form-data'>
  <input type='file' name='uploads[]' /><br />
  <input type='file' name='uploads[]' /><br />
  <input type='file' name='uploads[]' /><br />
  <input type='submit' value='Загрузить' />
  </form>
  <!--
    Каждое поле выбора файла имеет атрибут name='uploads[]', 
    поэтому сервер будет рассматривать набор отправленных файлов как единый массив.
    Затем используя цикл foreach, проходим по все файлам и сохраняем их в каталог веб-сайта.
  -->
</body>
</html>