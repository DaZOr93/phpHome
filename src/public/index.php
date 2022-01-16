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
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=email], input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }


</style>

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
<form action="reg.php" method="post">
    <div class="container">
        <h1>Регистрация</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="userName"><b>Username</b></label>
        <input type="text" placeholder="Введите username" name="userName" required>
        <label for="name"><b>Имя</b></label>
        <input type="text" placeholder="Введите имя" name="name" required>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Введите Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Введите Password" name="psw" required>

        <hr>


        <button type="submit" class="registerbtn">Регистрация</button>
    </div>


</form>
</body>

</html>