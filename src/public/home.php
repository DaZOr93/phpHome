<?php
session_start();
if ($_SESSION["authorization"] == 'authorization'){
    echo "Добро пожаловать ". $_SESSION["login"];
    echo "<a href='logout.php'> <button>Выйти</button></a>";
}
