<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
include $_SERVER['DOCUMENT_ROOT'] . './scripts/show_files.php';
include $_SERVER['DOCUMENT_ROOT'] . '/scripts/file.php';

  if(isset($_POST['delete'])) {
    foreach ($_POST['delete'] as $key => $item) {
      if(in_array($key, scandir($uploadPath))) {
        unlink($uploadPath . '/' . $key);
      }
    }
    $pictures = scandir($uploadPath);
    $pictures = array_values(array_diff($pictures, ['.', '..']));
}