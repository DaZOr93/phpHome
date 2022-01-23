<?php
if (!empty($_POST['city'])){
    echo "Ваш город ", $_POST['city'],",<br>";
}
if (isset($_POST['age'])){
    if ($_POST['age'] == "age1"){
        echo "Вам менее 20 лет";
    }
    if ($_POST['age'] == "age2"){
        echo "Вам 20-25 лет";
    }
    if ($_POST['age'] == "age3"){
        echo "Вам 26-30 лет";
    }
    if ($_POST['age'] == "age4"){
        echo "Вам более 30 лет";
    }

}

