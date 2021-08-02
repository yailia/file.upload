<?php
$pictures = scandir($uploadPath);
$pictures = array_values(array_diff($pictures, ['.', '..']));

function makeImagesList ($arr, $path) 
{ 
    if (count($arr) < 3) {
    echo 'Нет загруженных картинок';
}
    for ($i = 0; $i < count($arr); $i++) {
      $picturePath = $path . '/' . $arr[$i];
     echo "<li>
     <img src=$picturePath >
     <label>
        $arr[$i] <br />
        <input method='POST' type='checkbox' name='delete[$arr[$i]]' id=''>
      </label>
    </li>";
    }
};
 
