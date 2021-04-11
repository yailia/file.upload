<?php
$uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

$addingImgArray = $_FILES['newImg'];
    $err = [];
    for ($i = 0; $i < count($addingImgArray['name']); $i++) {
      if (count($addingImgArray['name']) > 5) {
        $countAddingFiles = count($addingImgArray['name']);
        $err['files'][0] = "<p style='color:red'>Можно загрузить только 5 файлов, вы пытаетесь загрузить $countAddingFiles файлов</p>";
      } else {
        $imgName = $addingImgArray['name'][$i];
        $imgType = $addingImgArray['type'][$i];
        $imgTmpName = $addingImgArray['tmp_name'][$i];
        $imgSizeMb = $addingImgArray['size'][$i]/1000000;
        if ($imgType === 'image/png' || $imgType === 'image/jpg' || $imgType === 'image/jpeg') {
          if ($imgSizeMb > 5) {
            $err['size'][$i] = "<p style='color:red'>Можно загрузить файл до 5Мб, размер файла $imgName - $imgSizeMb МБ </p>";
          } else {
            move_uploaded_file($imgTmpName, $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $imgName);
            $err['success'][$i] = "<p style='color:green'> Файл $imgName успешно загружен </p>";
          }
        } else {
          $err['type'][$i] = "<p style='color:red'>Можно загрузить только картинку, файл $imgName - не картинка</p>";
        }
      }
    }

    function showMsg ($arr) {
      if (empty($arr) && isset($_FILES['newImg'])) {
        echo 'Файлы загружены успешно';
      } else {
        foreach ($arr as $key => $msg) {
          foreach ($msg as $it) {
            echo $it;
          }
        }
      }
    }



// if(isset($_POST['add'])) {
  // echo 'в POST есть чо';
  // if (isset($_FILES['newImg'])) {
    // echo 'в FILES есть чо';
    // foreach ($_FILES['newImg']['type'] as $key => $item) {
      // if ($item === 'image/jpg' || $item === 'image/png') {
        // echo "</br>";
        // foreach ($_FILES['newImg']['name'] as $key1 => $item1) {
          // var_dump($item1);
          // echo "<br />";
        // }
        // move_uploaded_file($_FILES['newImg']['tmp_name'], $uploadPath . $_FILES['newImg']['name']);
      // } else {
        // var_dump($_FILES);
        // echo "<br />";
        // var_dump($key);
//       }
//     }
//   }
// }



  //   $tmp = 'Все хорошо';
  // } else {
  //   $tmp = "ошибка";
  // }

 