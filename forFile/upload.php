<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
  /*
  Чтобы загрузить файл на сервер, нам надо использовать форму с параметром enctype='multipart/form-data' и массив $_FILES. 
  Итак, создадим файл upload.php со следующим содержимым:
  */
  if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
  {
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Файл загружен";
  }
?>
<h2>Загрузка файла</h2>
<form method="post" enctype='multipart/form-data'>
Выберите файл: <input type='file' name='filename' size='10' /><br /><br />
<input type='submit' value='Загрузить' />
</form>
</body>
</html>