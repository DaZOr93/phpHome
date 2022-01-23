<?php
if (!empty($_POST)) {
    $error = 0;

    if (trim($_POST["name"]) !== '') {
        $name = $_POST["name"];
    } else {
        $error = 1;
        echo "Ошибка в поле имя","<br>";
    }
    if (trim($_POST["manufacturer"]) !== '') {
        $manufacturer = $_POST["manufacturer"];
    } else {
        $error = 1;
        echo "Ошибка в поле производитель","<br>";
    }
    if (trim($_POST["manufacturer"]) !== '') {
        $manufacturer = $_POST["description"];
    } else {
        $error = 1;
        echo "Ошибка в поле описание","<br>";
    }

    if (isset($_FILES["image"])) {

        if (explode('/', $_FILES['image']['type'])[0] === 'image') {

            $current_patch = $_FILES['image']['tmp_name'];
            $image = $_FILES["image"];
            $imageName = $_FILES["image"]["name"];
            $newPatch = dirname(__FILE__) . '/uploads/' . $imageName;
            $filePatch = 'uploads/' . $imageName;
            move_uploaded_file($current_patch, $newPatch);
        } else {
            echo "Ошибка файл не картинка","<br>";
            $error = 1;
        }

    } else {
        echo "Ошибка файла","<br>";
        $error = 1;
    }

    if ($error == 0){
        echo "Название товара: ",$name, "<br>";
        echo "Производитель: ",$manufacturer, "<br>";
        echo "Описание: ", $manufacturer, "<br>";
        echo "<img src='" . $filePatch . "' alt=''>", "<br>";

    }

}