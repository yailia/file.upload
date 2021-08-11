<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/scripts/show_files.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/styles.css">
  <script defer src="/scripts/js/jquery-3.6.0.min.js"></script>
  <script defer src="/scripts/js/main.js"></script>
  <title>Просмотр загруженных картинок</title>
</head>
<body>
  <h1>Загруженные файлы</h1>
  <a href="/"><--- Home</a> <br />
  <form id="form" method="post" action="handler.php" enctype="multipart/form-data">
    <ul class="list">
      <?= makeImagesList($pictures, '/upload/'); ?>
    </ul>
    <button class="delete-btn" type="submit" name="deleteImg">Удалить выбранные</button>
  </form>
</body>
</html>