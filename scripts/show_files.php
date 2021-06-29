<?
$pictures = scandir($_SERVER['DOCUMENT_ROOT'] . '/upload');
function makeImagesList ($arr) 
{ 
    if (count($arr) < 3) {
    echo 'Нет загруженных картинок';
}
    for ($i = 2; $i < count($arr); $i++) {
      $picturePath = '/upload' . '/' . $arr[$i];
     echo "<li style='border:1px solid gray; width:30vw; padding:1rem; list-style:none;'>
     <img style='max-height:100px;' src=$picturePath >
     <label style='display:flex'>
        $arr[$i] <br />
        <input method='POST' style='margin-left:auto' type='checkbox' name='delete[$arr[$i]]' id=''>
      </label>
    </li>";
    }
};
 
