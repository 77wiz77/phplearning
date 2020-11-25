<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Готовый пример использования форм</title>
</head>
<body>
  <header></header>
  <main>
    <h2>Анкета</h2>
    <form action="input.php" method="POST">
      <p>Введите имя:<br> 
      <input type="text" name="firstname" /></p>
      <p>Форма обучения: <br> 
      <input type="radio" name="eduform" value="очно" />очно <br>
      <input type="radio" name="eduform" value="заочно" />заочно </p>
      <p>Требуется общежитие:<br>
      <input type="checkbox" name="hostel" />Да</p>
      <p>Выберите курсы: <br>
      <select name="courses[]" size="5" multiple="multiple">
          <option value="ASP.NET">ASP.NET</option>
          <option value="PHP">PHP</option>
          <option value="Ruby">RUBY</option>
          <option value="Python">Python</option>
          <option value="Java">Java</option>
      </select></p>
      <p>Краткий комментарий: <br>
      <textarea name="comment" maxlength="200"></textarea></p>
      <input type="submit" value="Выбрать">
    </form>
  </main>
  <footer></footer>
</body>
</html>