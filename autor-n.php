<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorzation</title>
</head>
<body>

<h2>Добро пожаловать</h2>
<h2>Введи данные</h2>


<form name="form" action="" method="post">


        <label>Фамилия:</label><br>
        <input name="surname" type="text"><br>

        <label>Имя:</label><br>
        <input name="name" type="text"><br>

        <label>Отчество:</label><br>
        <input name="lastname" type="text"><br><hr>

        <button type="submit" name="btn">Отправить</button><br><br>

</form>


<?php

$name_1 = array("surname"=>"Иванов",
        "name"=>"Иван",
        "lastname"=>"Иванович",
        );
$name_2 = array("surname"=>"Петров",
        "name"=>"Петр",
        "lastname"=>"Петрович",
        );
$name_3 = array("surname"=>"Сидоров",
        "name"=>"Сидор",
        "lastname"=>"Сидорович",
        );

if(isset( $_POST['surname'])){
    if ($_POST['surname'] == $name_1 ["surname"] && $_POST['name'] == $name_1 ["name"] && $_POST['lastname'] == $name_1 ["lastname"]) {
        echo '<br>';
        echo '<a href="final.php">За покупками!</a><br>';
    } else {
        echo "Не введены данные";
        } 
    }

if(isset( $_POST['surname'])){
    if ($_POST['surname'] == $name_2 ["surname"] && $_POST['name'] == $name_2 ["name"] && $_POST['lastname'] == $name_2 ["lastname"]) {
        echo '<br>';
        echo '<a href="final.php">За покупками!</a><br>';
    }
}

if(isset( $_POST['surname'])){
    if ($_POST['surname'] == $name_3 ["surname"] && $_POST['name'] == $name_3 ["name"] && $_POST['lastname'] == $name_3 ["lastname"]) {
        echo '<br>';
        echo '<a href="final.php">За покупками!</a>';
    }
}


?>    







</body>
</html>