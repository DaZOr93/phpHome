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
<form id='forma' action='login.php' method='post'>
    <h1>Форма входа</h1>
    <p>Заполните поля для входа на сайт</p>
    <p>Логин<br /><input type='text' name='login'value="<?php if(isset($_COOKIE['login'])){echo $_COOKIE['login'];} else {echo "";} ?>"></p>
    <p>Пароль<br /><input type='password' name='password' value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} else {echo "";} ?>"></p>
    <p><input type='submit' name='submit' value='Войти'> <br></p></form>"


</body>

</html>
