<?php
session_start();
$_SESSION['login']="admin";
$_SESSION['password']="202cb962ac59075b964b07152d234b70";
if ((isset($_POST['login'])) && (isset($_POST['password']))) {
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);

    if (($_POST['login'] == $_SESSION['login']) && (md5($_POST['password']) == $_SESSION['password']) ){
        header('Location: http://example.palmo/home.php');
    } else
    {
        header('Location: http://example.palmo/index.php');
    }

}
