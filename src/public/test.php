<?php
if (!empty($_POST)) {
    $error = 0;
    $points = 0;
    if (trim($_POST["question1"]) !== '') {
        if (trim($_POST["question1"]) == 4) {
            $points++;
            echo "Сколько будет 2+2?", "<br>", "Ваш ответ: ", $_POST["question1"], "<br>";
            echo "Правильно +1 балл", "<br>";
        } else {
            echo "Сколько будет 2+2?", "<br>", "Ваш ответ: ", $_POST["question1"], "<br>";
            echo "Не правильно", "<br>";
        }

    } else {
        echo "Сколько будет 2+2:", "<br>";
        echo "Вы не ввели ответ", "<br>";
    }
    echo "<br>";
    if (!empty($_POST["question2"])) {
        if ($_POST["question2"] == ["Стол", "Стул"]){
            $points = $points + 2;
            echo "Выбирите мебель", "<br>";
            echo "Ваш ответ: ";
            foreach ($_POST["question2"] as $answer){
                echo $answer,' ';
            }
            echo  "<br>","Правильно +2 балл", "<br>";
        } elseif (($_POST["question2"] == ["Стол"]) || ($_POST["question2"] == ["Стул"])){
            $points++;
            echo "Выбирите мебель", "<br>";
            echo "Ваш ответ: ";
            foreach ($_POST["question2"] as $answer){
                echo $answer,' ';
            }
            echo  "<br>","Почти правильно +1 балл", "<br>";
        } else{
            echo "Выбирите мебель", "<br>";
            echo "Ваш ответ: ";
            foreach ($_POST["question2"] as $answer){
                echo $answer,' ';
            }
            echo  "<br>","Не правильно", "<br>";
        }

    }   else {
    echo "Выберите мебель", "<br>";
    echo "Вы не выбрали ответы", "<br>";
}
    echo "<br>";
    if (isset($_POST['question3'])) {
        if ($_POST['question3'] == 100) {
            $points++;
            echo "Температура кипения воды?", "<br>", "Ваш ответ: ", $_POST["question3"], "<br>";
            echo "Правильно +1 балл", "<br>";
        } else {
            echo "Температура кипения воды?", "<br>", "Ваш ответ: ", $_POST["question3"], "<br>";
            echo "Не правильно", "<br>";
        }
    } else {
        echo "Температура кипения воды?", "<br>";
        echo "Вы не выбрали ответ", "<br>";
    }
    echo "<br>";
    if (isset($_POST['question4'])) {
        if ($_POST['question4'] == 'visa') {
            $points++;
            echo "Выберете карту VISA", "<br>", "Ваш ответ: ", '<img src="http://i.imgur.com/lXzJ1eB.png" alt="VISA">', "<br>";
            echo "Правильно +1 балл", "<br>";
        } else {
            echo "Выберете карту VISA", "<br>", "Ваш ответ: ", '<img src="http://i.imgur.com/SJbRQF7.png" alt="VISA">', "<br>";
            echo "Не правильно", "<br>";
        }
    } else {
        echo "Выберете карту VISA", "<br>";
        echo "Вы не выбрали ответ", "<br>";
    }

    echo "<br>";
    echo 'Количество балов: ', $points;
}
