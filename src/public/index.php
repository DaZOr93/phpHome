<?php
session_start();
if (isset($_SESSION["authorization"])) {
    if ($_SESSION["authorization"] == 'authorization') {
        echo "Вы авторизованы ","<a href=home.php>Перейти на домашнюю страницу</a>";
    }
} else {
    echo "<a href=reg.php>
    <button>Регистрация</button>
</a>

<a href=authorization.php>
    <button>Авторизация</button>
</a>";
}
?>
