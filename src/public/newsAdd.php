<?php
if (empty($_COOKIE["newsPublished"])) {
    $newsPublished = [];
    setcookie("newsPublished", json_encode($newsPublished), time() + 3600);
}
function notClear($data)
{
    if (trim($data) !== '') {
        return true;
    }
    return false;
}

function minCharacters($data, $characters)
{
    if (mb_strlen($data) < $characters) {
        return false;
    } else {
        return true;
    }

}

if (!empty($_POST)) {
    $error = 0;
    if (notClear($_POST["nameNews"])) {
        $nameNews = $_POST["nameNews"];

    } else {
        $error = 1;
    }
    if (notClear($_POST["descriptionNews"])) {
        if (minCharacters($_POST["descriptionNews"], 20)) {
            $descriptionNews = $_POST["descriptionNews"];
        } else {
            $error = 1;
        }
    } else {
        $error = 1;
    }
    if (notClear($_POST["dataNews"])) {
        $dataNews = $_POST["dataNews"];
    } else {
        $dataNews = date('d-m-Y');
    }
    if (notClear($_POST["textNews"])) {
        if (minCharacters($_POST["textNews"], 100)) {
            $textNews = $_POST["textNews"];
        } else {
            $error = 1;
        }
    } else {
        $error = 1;
    }
    if (notClear($_POST["authorNews"])) {
        $authorNews = $_POST["authorNews"];

    } else {
        $error = 1;
    }
    if (isset($_FILES["imageNews"])) {

        if (explode('/', $_FILES['imageNews']['type'])[0] === 'image') {

            $current_patch = $_FILES['imageNews']['tmp_name'];
            $imageNews = $_FILES["imageNews"];
            $imageNewsName = $_FILES["imageNews"]["name"];
            $newPatch = dirname(__FILE__) . '/uploads/' . $imageNewsName;
            $filePatch = 'uploads/' . $imageNewsName;
            move_uploaded_file($current_patch, $newPatch);
        } else {
            $error = 1;
        }

    } else {
        $error = 1;
    }


    if (notClear($_POST["statusNews"])) {
        if (($_POST["statusNews"] == 'published') && ($error !== 1)) {

            $newsPublished = json_decode($_COOKIE["newsPublished"]);
            $news = ["nameNews" => $nameNews, "descriptionNews" => $descriptionNews, "dataNews" => $dataNews, "textNews" => $textNews, "authorNews" => $authorNews, "imageNews" => $filePatch];
            $newsPublished[] = $news;
            $newsPublished = json_encode($newsPublished);
            setcookie("newsPublished", $newsPublished);
            echo "Новость добавлена";
            echo "<button><a href='newsList.php'>Список новостей</a></button>";

        }
    }


    if ($error == 1) {
        echo "Ошибка";
    }
}

?>
<form action="newsAdd.php" method="post" enctype="multipart/form-data">
    <label for="nameNews"><b>Имя новости</b></label>
    <input type="text" placeholder="Введите Название новости" name="nameNews">
    <br>
    <label for="descriptionNews"><b>Описание новости</b></label>
    <input type="text" placeholder="Введите описание новости" name="descriptionNews">
    <br>
    <label for="dataNews"><b>Дата</b></label>
    <input type="date" name="dataNews">
    <br>
    <label for="statusNews"><b>Статус</b></label>
    <input type="radio" value="draft" name="statusNews" checked>
    <label for="statusNews"><b>черновик</b></label>
    <input type="radio" value="published" name="statusNews">
    <label for="statusNews"><b>опубликовано</b></label>
    <br>
    <label for="textNews""><b>текст новости</b></label>
    <textarea rows="3" cols="45" name="textNews" placeholder="текст новости"></textarea>
    <br>
    <label for="authorNews"><b>автор новости</b></label>
    <input type="text" placeholder="Введите автора новости" name="authorNews">
    <br>
    <label for="imageNews"><b>картинка новости</b></label>
    <input type="file" name="imageNews">
    <br>
    <input type="submit">
</form>
