<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<h1>Форма добавления новости</h1>

<form action="/php2.local/form.php" method="post">
  <p><input type="text" name="title" placeholder="Заголовок новости" size="25"/></p>

  <p><textarea name="text_news" cols="100" rows="8" placeholder="Текст новости"></textarea></p>

  <p><button role="button" type="submit">Отправить</button></p>
</form>
<a href="/php2.local/">Назад</a>
</body>
</html>