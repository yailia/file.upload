<?php
ini_set('error_reporting', E_ALL);
include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';

$err = [];
if (file_exists($uploadPath)) {
  if (isset($_FILES['newImg'])) {
    $addingImgArray = $_FILES['newImg'];
    for ($i = 0; $i < count($addingImgArray['name']); $i++) {
      $imgName = $addingImgArray['name'][$i];
      $imgSizeMb = $addingImgArray['size'][$i]/1000000;
      $countAddingFiles = count($addingImgArray['name']);
      
      if (count($addingImgArray['name']) > $grantedCount) {
        $err['files'][0] = "<p class='red'>Можно загрузить только 5 файлов, вы пытаетесь загрузить $countAddingFiles файлов</p>";
        break;
      }
      if(!$addingImgArray["tmp_name"][$i]) {
        $err['files'][0] = "<p class='red'>Выберите файлы</p>";
        break;
      }
      if (!in_array(mime_content_type($addingImgArray["tmp_name"][$i]), $grantedTypes, $strict = true)) {
        $err['type'][$i] = "<p class='red'>Можно загрузить только картинку, файл $imgName - не картинка</p>";
        break;
      }
      if ($imgSizeMb > $grantedSize) {
        $err['size'][$i] = "<p class='red'>Можно загрузить файл до 5Мб, размер файла $imgName - $imgSizeMb МБ </p>";
        break;
      }
      if (move_uploaded_file($addingImgArray['tmp_name'][$i], $uploadPath .'/' . $imgName)) {
        $err['success'][$i] = "<p class='green'> Файл $imgName успешно загружен </p>";
      } else {
              $err['success'][$i] = "<p> Что-то пошло не так. Попробуйте еще раз.</p>";
            }
          }
        }
      }

if (!empty($err) ) {
  foreach ($err as $key => $msg) {
    foreach ($msg as $it) {
      echo $it;
    }
  }
}