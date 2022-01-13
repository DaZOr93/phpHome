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
$file1 = fopen('text.txt', 'w+');
fwrite($file1, "hello palmo");
$text = file_get_contents('text.txt');
echo $text;
$fileInfo = stat('text.txt');
echo "<br>", "Размер в байтах ", $fileInfo["size"], "<br>";
echo "<br>", "Размер в мегабайтах ", $fileInfo["size"] / (1024 * 1024), "<br>";
echo "<br>", "Размер в гигабайтах ", $fileInfo["size"] / (1024 * 1024 * 1024), "<br>";
fclose($file1);
$file2 = fopen('text2.txt', 'w');
unlink("text2.txt");
if (!is_dir("testDir")) {
    mkdir("testDir", 0777);
}
$arrDir = ["test1", "test2", "test3"];
foreach ($arrDir as $dirName) {
    if (!is_dir("testDir/$dirName")) {
        mkdir("testDir/$dirName", 0777);
    }

    $file1 = fopen("testDir/$dirName/text.txt", 'w+');
    fwrite($file1, "hello palmo");
    $text = file_get_contents("testDir/$dirName/text.txt");
    echo $text, "<br>";

}
function fileAsDir($str)
{
    if (is_dir($str)) {
        return "dir";
    } else if (file_exists($str)) {
        return "file";
    } else {
        return false;
    }

}

echo "<br>", fileAsDir("text.txt");

function sizeDir($dir)
{
    $size = 0;
    $arrDir = scandir($dir);
    foreach ($arrDir as $name) {
        if (is_file($name)) {
            $fileInfo = stat("$name");
            $size = $size + (int)$fileInfo["size"];
        } else if (is_dir($name)) {
            $arrDir2 = scandir($name);
            foreach ($arrDir2 as $name2) {
                if (is_file($name2)) {
                    $fileInfo = stat("$name2");
                    $size = $size + (int)$fileInfo["size"];
                }
            }

        }

    }
    return $size;
}

echo sizeDir("testDir");

function deletDir($dir){
    $arrDir = scandir($dir);
    foreach ($arrDir as $name) {
        if(($name != '.') && ($name != '..')) {
            if (is_file("$dir/$name")) {
                unlink("$dir/$name");
            } else if (is_dir("$dir/$name")) {
                deletDir("$dir/$name");
            }

            rmdir("$dir");
        }
    }
}

deletDir("testDir");
?>

</body>

</html>