<?php
if ((isset($_GET['number'])) && (is_numeric($_GET['number']))) {
    if (($_COOKIE["newsPublished"] != []) && (isset($_COOKIE["newsPublished"]))) {
        $newsPublished = json_decode($_COOKIE["newsPublished"], true);
        if (!empty($newsPublished[$_GET['number']])) {
            $selectNews = $newsPublished[$_GET['number']];
            echo "Название новости: ", $selectNews["nameNews"], "<br>";
            echo "Новость: ", $selectNews["textNews"], "<br>";
            echo "<img src='" . $selectNews['imageNews'] . "' alt=''>", "<br>";
            echo "Автор: ", $selectNews["authorNews"], "<br>";
            echo "Дата: ", $selectNews["dataNews"], "<br>";
            die();
        }
    }
}
echo "Неверно выбрана новость";
?>
