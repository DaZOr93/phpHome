<?php
if (isset($_FILES["textFile"])){
    $current_patch  = $_FILES['textFile']['tmp_name'];
    $textFile = $_FILES["textFile"];
    $textFileName = $_FILES["textFile"]["name"];
    $newPatch = dirname(__FILE__).'/uploads/'. $textFileName;
    $filePatch = 'uploads/'. $textFileName;
    move_uploaded_file($current_patch, $newPatch);
}
$filesContent = file_get_contents("uploads/fruits.txt");
echo $filesContent;