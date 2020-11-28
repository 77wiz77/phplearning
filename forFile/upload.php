<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
  <section>
    <?php
      /*
      Чтобы загрузить файл на сервер, нам надо использовать форму с параметром enctype='multipart/form-data' и массив $_FILES. 
      Итак, создадим файл upload.php со следующим содержимым:
      */
      if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK) //если файл существует
      {
        $name = $_FILES['filename']['name']; //name это ключ массива $_FILES / в данном случае это имя файла 
        move_uploaded_file($_FILES['filename']['tmp_name'], $name); //загрузить файл из временного места сервера на сам сервер 
        //(из временной папки)
        /*
        move_uploaded_file — Перемещает загруженный файл в новое место на сервере
        move_uploaded_file ( string $filename , string $destination ) : bool
        Эта функция проверяет, является ли файл filename загруженным на сервер (переданным по протоколу HTTP POST). 
        Если файл действительно загружен на сервер, он будет перемещён в место, указанное в аргументе destination.

        Такая проверка особенно важна в том случае, если существует шанс того, что какие-либо действия, 
        производимые над загруженным файлом, могут открыть его содержимое пользователю или даже другим пользователям системы.
        */
        echo "Файл загружен";
      }
    ?>
    <h2>Загрузка файла</h2>
    <form method="post" enctype='multipart/form-data'>
    Выберите файл: <input type='file' name='filename' size='10' /><br /><br />
    <input type='submit' value='Загрузить' />
    </form>
  </section>

  <!--
    Здесь определена форм с атрибутом enctype='multipart/form-data'. Форма содержит специальное поле для выбора файла.
Все загружаемые файлы попадают в ассоциативный массив $_FILES. 
Чтобы определить, а есть ли вообще загруженные файлы, можно использовать конструкцию if: if ($_FILES)
Массив $_FILES является двухмерным. 

Мы можем загрузить набор файлов, и каждый загруженный файл можно получить по ключу, который совпадает со значением атрибута name.
Так как элемент для загрузки файла на форме имеет name='filename', 
то данный файл мы можем получить с помощью выражения $_FILES['filename'].

У каждого объекта файла есть свои параметры, которые мы можем получить:
$_FILES['file']['name']: имя файла
$_FILES['file']['type']: тип содержимого файла, например, image/jpeg
$_FILES['file']['size']: размер файла в байтах
$_FILES['file']['tmp_name']: имя временного файла, сохраненного на сервере
$_FILES['file']['error']: код ошибки при загрузке

Также мы можем проверить наличие ошибок при загрузке. 
Если у нас нет ошибки, то поле $_FILES['filename']['error'] содержит значение UPLOAD_ERR_OK.

При отправке файла на сервер он сначала загружается во временное место, 
из которого затем с помощью функции move_uploaded_file() он перемещается в каталог сервера.

Функция move_uploaded_file() принимает два параметра путь к загруженному временному файлу и путь, куда надо поместить загруженный файл.
  -->

  <section>
    <?php //Ограничения и настройка загрузки
      /*
      По умолчанию размер загружаемых файлов ограничен 2 мб. Однако можно настроить данный показатель в файле конфигурации. 
      Изменим этот показатель, например, до 10 мб. Для этого найдем в файле php.ini следующую строку:
      upload_max_filesize = 2M
      Изменим ее на
      upload_max_filesize = 10M
      
      Также мы можем настроить папку для временных загружаемых файлов. Для этого в файле php.ini найдем следующую строку:
      ;upload_tmp_dir =
      Изменим ее на
      upload_tmp_dir = "C:/php/upload"
      Также в каталоге php нам надо создать папку upload.
      */
    ?>
  </section>
</body>
</html>