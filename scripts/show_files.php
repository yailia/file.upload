<?php
$pictures = scandir($uploadPath);
$pictures = array_values(array_diff($pictures, ['.', '..']));

function makeImagesList ($arr, $path) 
{ 
    for ($i = 0; $i < count($arr); $i++) {
      $picturePath = $path . '/' . $arr[$i];
     echo "<li>
     <label>
      <img src=$picturePath >
        $arr[$i] <br />
        <input method='POST' type='checkbox' name='delete[$arr[$i]]' id=''>
      </label>
    </li>";
    }
};
 
