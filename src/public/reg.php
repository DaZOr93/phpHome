<?php
if (!empty($_POST)) {
    $user = fopen('user.txt', 'a+');
    fwrite($user, "_____________New User_____________".PHP_EOL);
    if (isset($_POST["userName"])){
        $userName = $_POST["userName"];
        fwrite($user, "Username: ".$userName.PHP_EOL);
    }
    if (isset($_POST["name"])){
        $name = $_POST["name"];
        fwrite($user, "Имя: ".$name.PHP_EOL);
    }
    if (isset($_POST["email"])){
        $email= $_POST["email"];
        fwrite($user, "Email: ".$email.PHP_EOL);
    }
    fwrite($user, "__________________________________".PHP_EOL);
    fclose($user);
}
?>