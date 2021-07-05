<? 
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
  <title>Добавление картинок на сервер</title>
</head>
<body>
  <h1>Добавить картинки</h1> 
  <a href="/gallery">Все картинки ---></a>
  <br />
  <br />
  <form enctype="multipart/form-data" method="POST" action="/">
    <input 
    type="file" 
    name="newImg[]" id="" 
    multiple="true"
    accept="<?= implode(', ', $grantedTypes) ?>"
    >
    <button type="submit" name="add">Добавить*</button>
    <p>
      <small>* можно добавить не больше 5 картинок размером до 5МБ</small>
    </p>
    <p><? showMsg($err); ?>
  </form>
</body>
</html>
