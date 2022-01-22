<?php

if (!empty($_COOKIE["newsPublished"])) {
    $newsPublished = json_decode($_COOKIE["newsPublished"], true);
    $newsNumber = 0;
    foreach ($newsPublished as $published) {
        echo "<a href='news.php?number=" . $newsNumber . "'>" . $published["nameNews"] . "</a>", "<br>";
        echo "Краткое описание: ", $published["descriptionNews"], "<br>";
        echo "Автор: ", $published["authorNews"], "<br>";
        echo "Дата: ", $published["dataNews"], "<br>";
        $newsNumber++;
    }
} else {
    echo "Новостей нет";
}

?>

