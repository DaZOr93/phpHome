<?php
session_start();
if (isset($_SESSION["authorization"])){
    if ($_SESSION["authorization"] == 'authorization'){
        header('Location: http://example.palmo/home.php');
    }
}

if (!isset($_COOKIE['errorLogin'])) {
    setcookie('errorLogin', 0);
}

if (!isset($_COOKIE['errorPassword'])) {
    setcookie('errorPassword', 0);
}
if (!isset($_COOKIE['errorAuthorization'])) {
    setcookie('errorAuthorization', 0);
}
?>
<form id='forma' action='login.php' method='post'>
    <h1>Форма входа</h1>
    <p>Заполните поля для входа на сайт</p>
    <p>Логин<br /><input type='text' name='login'
                         value="<?php if(isset($_COOKIE['login'])){echo $_COOKIE['login'];} else {echo "";} ?>">
    </p>
    <?php
    if ($_COOKIE['errorLogin'] == 1){
        echo "Login не должно быть пустым","<br>";
    }
    ?>
    <p>Пароль<br /><input type='password' name='password'></p>
    <?php
    if ($_COOKIE['errorPassword'] == 1){
        echo "Пароль не может быть пустым","<br>";
    }
    ?>
    <?php
    if ($_COOKIE['errorAuthorization'] == 1){
        echo "Неверный логин или пароль","<br>";
    }
    ?>
    <p><input type='submit' name='submit' value='Войти'> <br></p>
</form>
