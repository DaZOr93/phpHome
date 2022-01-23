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
<form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
    <label>Ваше город: <input type="text" name="city"></label>
    <div>
        <p>Возраст</p>
        <input type="radio" id="age1"
               name="age" value="age1">
        <label for="age1">менее 20 лет</label>

        <input type="radio" id="age2"
               name="age" value="age2">
        <label for="age2">20-25</label>

        <input type="radio" id="age3"
               name="age" value="age3">
        <label for="age3">26-30</label>

        <input type="radio" id="age4"
               name="age" value="age4">
        <label for="age4">более 30</label>
    </div>
    <input type="submit" name="send" value="Отправить">

</form>
<p>Создание товара</p>
<form action="product.php" method="POST" enctype="multipart/form-data">
    <label>Название товара: <input type="text" name="name"></label>
    <br>
    <label>Производитель: <input type="text" name="manufacturer"></label>
    <br>
    <label>Описание: <input type="text" name="description"></label>
    <br>
    <label>Изображение <input type="file" name="image"></label>
    <br>

    <input type="submit" name="send" value="Отправить">
</form>
<p>Тест: </p>
<form name="feedback" method="POST" action="test.php" enctype="multipart/form-data">
    <label>Сколько будет 2+2: <input type="text" name="question1"></label>
    <div>
        <p>Выберите мебель: </p>
        <input type="checkbox" name="question2[]" value="Стол">
        <label for="checkbox">Стол</label>

        <input type="checkbox" name="question2[]" value="Дерево">
        <label for="checkbox">Дерево</label>


        <input type="checkbox" name="question2[]" value="Стул">
        <label for="checkbox">Стул</label>


        <input type="checkbox" name="question2[]" value="Кросовки">
        <label for="age1">Кросовки</label>
    </div>
    <p>Температура кипения воды</p>
    <input type="radio" id="temp1"
           name="question3" value="80">
    <label for="temp1">80 градусов</label>

    <input type="radio" id="temp2"
           name="question3" value="90">
    <label for="temp2">90 градусов</label>

    <input type="radio" id="temp3"
           name="question3" value="100">
    <label for="temp3">100 градусов</label>

    <p>Выберите карту VISA: </p>
    <div class="cc-selector">
        <input  id="visa" type="radio" name="question4" value="visa" />
        <label class="drinkcard-cc visa" for="visa"></label>
        <input id="mastercard" type="radio" name="question4" value="mastercard" />
        <label class="drinkcard-cc mastercard"for="mastercard"></label>
    </div>

    </div>
    <br>
    <input type="submit"  value="Отправить на проверку">

</form>
<style>
    .cc-selector input{
        margin:0;padding:0;
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none;
    }

    .cc-selector-2 input{
        position:absolute;
        z-index:999;
    }

    .visa{background-image:url(http://i.imgur.com/lXzJ1eB.png);}
    .mastercard{background-image:url(http://i.imgur.com/SJbRQF7.png);}

    .cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
    .cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
        -webkit-filter: none;
        -moz-filter: none;
        filter: none;
    }
    .drinkcard-cc{
        cursor:pointer;
        background-size:contain;
        background-repeat:no-repeat;
        display:inline-block;
        width:100px;height:70px;
        -webkit-transition: all 100ms ease-in;
        -moz-transition: all 100ms ease-in;
        transition: all 100ms ease-in;
        -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
        -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
        filter: brightness(1.8) grayscale(1) opacity(.7);
    }
    .drinkcard-cc:hover{
        -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
        -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
        filter: brightness(1.2) grayscale(.5) opacity(.9);
    }

    /* Extras */
    a:visited{color:#888}
    a{color:#444;text-decoration:none;}
    p{margin-bottom:.3em;}
    * { font-family:monospace; }
    .cc-selector-2 input{ margin: 5px 0 0 12px; }
    .cc-selector-2 label{ margin-left: 7px; }
    span.cc{ color:#6d84b4 }
</style>

<body style="margin: 0;">
<?php

?>

</body>

</html>
