<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">
<?php
$fruits = fopen('fruits.txt', 'a+');
fwrite($fruits, "Яблоко".PHP_EOL);
fwrite($fruits, "Груша".PHP_EOL);
fwrite($fruits, "Банан".PHP_EOL);
fwrite($fruits, "Слива".PHP_EOL);
fwrite($fruits, "Вишня".PHP_EOL);
fwrite($fruits, "Черешня".PHP_EOL);
fwrite($fruits, "Персик".PHP_EOL);
fwrite($fruits, "Смородина".PHP_EOL);
fwrite($fruits, "Малина".PHP_EOL);
fwrite($fruits, "Ананас".PHP_EOL);
$arrFruits = file("fruits.txt");
sort($arrFruits);
file_put_contents('fruits.txt', $arrFruits);

function deleteBigFiles($dir){
    $arrDir = scandir($dir);
    foreach ($arrDir as $name){
        if (is_file("$dir/$name")){
            $fileSize = stat("$dir/$name")["size"]/(1024*1024);
            if($fileSize >= 1){
               unlink("$dir/$name");
            }
        }
    }
}
deleteBigFiles("uploads");
?>
<form action="file.php" method="post" enctype="multipart/form-data" >
    <p>Выберите файл для отображения на другой странице</p>
    <label for="file"><input type="file" name="textFile"></label>

    <input type="submit">
</form>
</body>

</html>