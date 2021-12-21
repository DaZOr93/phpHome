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

<body style="margin: 0;">
<?php
$name = "oleg";
echo 'my name ', $name, "<br>";
$a = 8;
$b = 1;
echo "сумма ", $a + $b, "<br>";
echo "разность ", $a - $b, "<br>";
echo "произведение ", $a * $b, "<br>";
echo "деление ", $a / $b, "<br>";
echo "остаток от деление ", $a % $b, "<br>";
$number = 5;
$result = pow($number, 3);
echo $number, ' в степени 3 = ', $result, "<br>";
$age = 28;
if (($age >= 18) && ($age <= 60)) {
    echo "Вам ещё работать и работать", "<br>";
}
if ($age < 18) {
    echo "Вам ещё рано работать", "<br>";
}
if ($age > 60) {
    echo "Пора на отдых", "<br>";
}
$dayNumber = 5;
if ($dayNumber <= 7) {
    if ($dayNumber <= 5) {
        echo "Это рабочий день", "<br>";
    }
    if ($dayNumber > 5) {
        echo "Это выходной", "<br>";
    }
} else {
    echo "Ошибка, не правильный день недели", "<br>";
}
define("DAYS_COUNT", 7);
const MONTH_COUNT = 12;
echo "Количество дней в неделе ", DAYS_COUNT, " Количество месяцев в году ", MONTH_COUNT, "<br>";
$first = 4;
$second = 3;
if ($first == $second) {
    echo "Сумма чисел равна ", $first + $second, "<br>";
}
if ($first !== $second) {
    echo "Разница чисел равна ", $first - $second, "<br>";
}
$random = rand(1, 100);
if ($random % 2 == 0) {
    echo "Число $random  кратно 2";
} else {
    echo "Число $random  не кратно 2";
}


?>

</body>

</html>
