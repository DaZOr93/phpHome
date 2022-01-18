<?php
session_start();

if (!empty($_POST)) {
    setcookie('errorAuthorization', 0);
    $error = 0;
    if (trim($_POST["login"]) !== '') {
        setcookie('errorLogin', 0);
        setcookie('login', $_POST["login"]);
    } else {
        setcookie('errorLogin', 1);
        $error = 1;
    }

    if (trim($_POST["password"]) !== '') {
        setcookie('errorPassword', 0);
    } else {
        setcookie('errorPassword', 1);
        $error = 1;
    }

    if($error == 0){
        if(strpos(file_get_contents("user.txt"), $_POST['login'].":".md5($_POST['password']))){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION["authorization"] = 'authorization';
            header('Location: http://example.palmo/home.php');
        } else {
            setcookie('errorAuthorization', 1);
            header('Location: http://example.palmo/authorization.php');
        }

    } else{
        header('Location: http://example.palmo/authorization.php');
    }
}
