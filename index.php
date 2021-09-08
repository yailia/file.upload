<?php
ini_set('error_reporting', E_ALL);
include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/scripts/file.php';

 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/styles.css">
  <script defer src="/scripts/js/jquery-3.6.0.min.js"></script>
  <script defer src="/scripts/js/main.js"></script>
  <title>Добавление картинок на сервер</title>
</head>
<body>
  <h1>Добавить картинки</h1> 
  <a href="/gallery">Все картинки ---></a>
  <br />
  <br />
  <form class="add-form" enctype="multipart/form-data" method="POST" action="/">
    <input type="file" name="newImg[]" multiple accept="<?= implode(', ', $grantedTypes) ?>">
    <button class="add-form__btn" type="submit" action="file.php" name="add">Добавить*</button>
    <p>
      <small>* можно добавить не больше <?= $grantedCount ?> картинок размером до <?= $grantedSize ?>МБ</small>
    </p>
  </form>
  <div class="message-container">

  </div>
</body>
</html>
