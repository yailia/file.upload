<?php
  include $_SERVER['DOCUMENT_ROOT'] . '/scripts/file.php';

  if(isset($_POST['delete'])) {
  foreach ($_POST['delete'] as $key => $item) {
    if(file_exists($uploadPath . '/' . $key)) {
      unlink($uploadPath . '/' . $key);
      header("Refresh:0");
    }
  }

}
