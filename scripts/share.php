<?php
function picDirUpd ($path)
{
  $pictures = scandir($path);
  $pictures = array_values(array_diff($pictures, ['.', '..']));
  var_dump($pictures);
}