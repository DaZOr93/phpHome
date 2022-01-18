<?php
session_start();
if (!isset($_COOKIE['errorLogin'])) {
    setcookie('errorLogin', 0);
}
if (!isset($_COOKIE['errorName'])) {
    setcookie('errorName', 0);
}
if (!isset($_COOKIE['errorEmail'])) {
    setcookie('errorEmail', 0);
}
if (!isset($_COOKIE['errorTel'])) {
    setcookie('errorTel', 0);
}
if (!isset($_COOKIE['errorPassword'])) {
    setcookie('errorPassword', 0);
}
if (!isset($_COOKIE['errorPasswordAgain'])) {
    setcookie('errorPasswordAgain', 0);
}
if (!isset($_COOKIE['errorAgain'])) {
    setcookie('errorAgain', 0);
}
if (isset($_SESSION["authorization"])){
    if ($_SESSION["authorization"] == 'authorization'){
        header('Location: http://example.palmo/home.php');
    }
}
?>
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
    input[type=text], input[type=password], input[type=email] , input[type=tel]{
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=email]:focus , input[type=password]:focus , input[type=tel]:focus  {
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
<form action="registration.php" method="post">
    <div class="container">
        <h1>Регистрация</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Введите Login" name="login"
               value="<?php if(isset($_COOKIE['login'])){echo $_COOKIE['login'];} else {echo "";} ?>"
        >
        <?php
        if ($_COOKIE['errorLogin'] == 1){
        echo "Login не должно быть пустым","<br>";
        }
        ?>
        <label for="name"><b>Имя</b></label>
        <input type="text" placeholder="Введите имя" name="name"
               value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];} else {echo "";} ?>"
        >
        <?php
        if ($_COOKIE['errorName'] == 1){
            echo "Имя не должно быть пустым","<br>";
        }
        ?>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Введите Email" name="email"
               value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];} else {echo "";} ?>"
        >
        <?php
        if ($_COOKIE['errorEmail'] == 1){
            echo "Email не должно быть пустым","<br>";
        }
        ?>
        <label for="tel"><b>Введите Telefon</b></label>
        <input type="tel" placeholder="Введите Telefon" name="tel"
               value="<?php if(isset($_COOKIE['tel'])){echo $_COOKIE['tel'];} else {echo "";} ?>"
        >
        <?php
        if ($_COOKIE['errorTel'] == 1){
            echo "Телефон не должно быть пустым и должен быть 10 цифр","<br>";
        }
        ?>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Введите Password" name="password">

        <?php
        if ($_COOKIE['errorPassword'] == 1){
            echo "Пароль не может быть пустым","<br>";
        }
        ?>

        <label for="passwordAgain"><b>Password again</b></label>
        <input type="password" placeholder="Введите Password Again" name="passwordAgain">
        <?php
        if ($_COOKIE['errorPasswordAgain'] == 1){
            echo "Пароль не может быть пустым","<br>";
        }
        ?>
        <?php
        if ($_COOKIE['errorAgain'] == 1){
            echo "Пароли не совпадают","<br>";
        }
        ?>
        <hr>


        <button type="submit" class="registerbtn">Регистрация</button>
    </div>


</form>

</body>

</html>
