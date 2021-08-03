<?php
ini_set('error_reporting', E_ALL);

$err = [];
if (file_exists($uploadPath)) {
  if (isset($_FILES['newImg'])) {
    $addingImgArray = $_FILES['newImg'];
    for ($i = 0; $i < count($addingImgArray['name']); $i++) {
      if (count($addingImgArray['name']) > $grantedCount) {
        $countAddingFiles = count($addingImgArray['name']);
        $err['files'][0] = "<p class='red'>Можно загрузить только 5 файлов, вы пытаетесь загрузить $countAddingFiles файлов</p>";
      } else {
        $imgName = $addingImgArray['name'][$i];
        $imgSizeMb = $addingImgArray['size'][$i]/1000000;
        if($addingImgArray["tmp_name"][$i]) {
          if (in_array(mime_content_type($addingImgArray["tmp_name"][$i]), $grantedTypes, $strict = true)) {
            if ($imgSizeMb > $grantedSize) {
              $err['size'][$i] = "<p class='red'>Можно загрузить файл до 5Мб, размер файла $imgName - $imgSizeMb МБ </p>";
            } else {
              if (move_uploaded_file($addingImgArray['tmp_name'][$i], $uploadPath .'/' . $imgName)) {
                $err['success'][$i] = "<p class='green'> Файл $imgName успешно загружен </p>";
              } else {
                $err['success'][$i] = "<p> Что-то пошло не так. Попробуйте еще раз.</p>";
              }
            }
          } else {
            $err['type'][$i] = "<p class='red'>Можно загрузить только картинку, файл $imgName - не картинка</p>";
          }
        }  else {
          $err['files'][0] = "<p>Выберите файлы</p>";
        }
      }
    }
  }
}