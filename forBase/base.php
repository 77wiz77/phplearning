<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Базовые возможности php</title>
</head>
<body>

<header class="header-page">
</header>

<main>
  <section>
    <?php
      $input = 'This is the end'; 
      $search = 'is';
      $position = strpos($input, $search); // 2
      if($position!==false)
      {
          echo "Позиция подстроки '$search' в строке '$input': $position";
      }
    ?>
  </section>
  
</main>

<footer class="footer-page">
  <p></p>
</footer>
  
</body>
</html>