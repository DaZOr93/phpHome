<?php

session_start();

if (!empty($_POST)) {
    $error = 0;
    if (trim($_POST["login"]) !== '') {
        setcookie('errorLogin', 0);
        setcookie('login', $_POST["login"]);
        $login = $_POST["login"];
    } else {
        setcookie('errorLogin', 1);
        $error = 1;
    }

    if (trim($_POST["name"]) !== '') {
        setcookie('errorName', 0);
        setcookie('name', $_POST["name"]);
        $name = $_POST["name"];

    } else {
        setcookie('errorName', 1);
        $error = 1;
    }

    if (trim($_POST["email"]) !== '') {
        setcookie('errorEmail', 0);
        setcookie('email', $_POST["email"]);
        $email = $_POST["email"];

    } else {
        setcookie('errorEmail', 1);
        $error = 1;
    }

    if ((trim($_POST["tel"]) !== '') && (is_numeric($_POST["tel"])) && (strlen($_POST["tel"]) == 10)) {
        setcookie('tel', $_POST["tel"]);
        setcookie('errorTel', 0);
        $tel = $_POST["tel"];
    } else {
        setcookie('errorTel', 1);
        $error = 1;
    }

    if (trim($_POST["password"]) !== '') {
        setcookie('errorPassword', 0);
        $password = $_POST["password"];
    } else {
        setcookie('errorPassword', 1);
        $error = 1;
    }

    if (trim($_POST["passwordAgain"]) !== '') {
        setcookie('errorPasswordAgain', 0);
        $passwordAgain = $_POST["passwordAgain"];
    } else {
        setcookie('errorPasswordAgain', 1);
        $error = 1;
    }

    if ($_POST["password"] == $_POST["passwordAgain"]) {
        setcookie('errorAgain', 0);
    } else {
        setcookie('errorAgain', 1);
        $error = 1;
    }

    if($error == 0){
        $user = fopen('user.txt', 'a+');
        fwrite($user, "_____________New User_____________" . PHP_EOL);
        fwrite($user, "login: " . $login . PHP_EOL);
        fwrite($user, "Имя: " . $name . PHP_EOL);
        fwrite($user, "Email: " . $email . PHP_EOL);
        fwrite($user, "Tel: " . $tel . PHP_EOL);
        fwrite($user,   $login .":".md5($password) . PHP_EOL);
        fwrite($user, "__________________________________" . PHP_EOL);
        fclose($user);
        $_SESSION["authorization"] = 'authorization';
        $_SESSION['login'] = $login;
        header('Location: http://example.palmo/home.php');
    } else {
        header('Location: http://example.palmo/reg.php');
    }

}

