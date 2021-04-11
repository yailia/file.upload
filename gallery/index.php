<?
include $_SERVER{'DOCUMENT_ROOT'} . '/scripts/show_files.php';
include $_SERVER{'DOCUMENT_ROOT'} . '/scripts/delete_files.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Просмотр загруженных картинок</title>
</head>
<body>
  <h1>Загруженные файлы</h1>
  <a href="/"><--- Home</a> <br />
  <form action="" method="post">
  <ul>
    <? makeImagesList($pictures); ?>
  </ul>
  <button type="submit" name="deleteImg">Удалить выбранные</button>
  </form>
</body>
</html>