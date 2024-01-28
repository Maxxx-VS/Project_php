<!DOCTYPE html>
<html>
<body>

<h3><u>ВЫБИРАЙ СЕЗОН:</u></h3>
<form method="post" action="">
    <input type="checkbox" name="course1" value="Winter" />Зима <br>
    <input type="checkbox" name="course2" value="Summer" />Лето <br>
    <input type="checkbox" name="course3" value="Spring" />Весна <br>
    <input type="checkbox" name="course4" value="Autumn" />Осень <br><br>
    <input type="submit" value="Выбрать сезон"><hr><hr>
</form>

<?php
$buyer = array();
// список товаров товаров
$shoes = array(
    array('Ботинки', "ЗИМА", 1000, 10),
    array('Ботинки', "ВЕСНА", 2000, 20),
    array('Ботинки', "ЛЕТО", 3000, 30),
    array('Ботинки', "ОСЕНЬ", 4000, 40));
$tshirts = array(
    array('Футболки', "ЗИМА", 1000, 10),
    array('Футболки', "ВЕСНА", 2000, 20),
    array('Футболки', "ЛЕТО", 3000, 30),
    array('Футболки', "ОСЕНЬ", 4000, 40));
$cap = array(
    array('Кепки', "ЗИМА", 1000, 10),
    array('Кепки', "ВЕСНА", 2000, 20),
    array('Кепки', "ЛЕТО", 3000, 30),
    array('Кепки', "ОСЕНЬ", 4000, 40));
$glasses = array(
    array('Очки', "ЗИМА", 1000, 10),
    array('Очки', "ВЕСНА", 2000, 20),
    array('Очки', "ЛЕТО", 3000, 30),
    array('Очки', "ОСЕНЬ", 4000, 40));
$sweatshirts = array(
    array('Кофты', "ЗИМА", 1000, 10),
    array('Кофты', "ВЕСНА", 2000, 20),
    array('Кофты', "ЛЕТО", 3000, 30),
    array('Кофты', "ОСЕНЬ", 4000, 40));
$socks = array(
    array('Носки', "ЗИМА", 1000, 10),
    array('Носки', "ВЕСНА", 2000, 20),
    array('Носки', "ЛЕТО", 3000, 30),
    array('Носки', "ОСЕНЬ", 4000, 40));
$trousers = array(
    array('Штаны', "ЗИМА", 1000, 10),
    array('Штаны', "ВЕСНА", 2000, 20),
    array('Штаны', "ЛЕТО", 3000, 30),
    array('Штаны', "ОСЕНЬ", 4000, 40));

// выбор времени года

if (isset($_POST["course1"])){
    $i = 0;
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i=0);}
elseif (isset($_POST["course2"])){
    $i = 1;
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i=1);}
elseif (isset($_POST["course3"])){
    $i = 2;
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i=2);}
elseif (isset($_POST["course4"])){
    $i = 3;
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i=3);}
    else {
    echo "<b>ВЫ НЕ ВЫБРАЛИ СЕЗОН!</b><br><br>";}



function winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i){
    echo "<b> КОЛЛЕКЦИЯ - ". $shoes[$i][1] . ":<br><br></b>";
    echo $shoes [$i][0] . ": " . "  Цена: " . $shoes [$i][2] . 'руб. ';
    echo '<input type="number" name="' . $shoes[$i][0] . '" value="0" min="0" max="' . $shoes[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
    echo $tshirts [$i][0] . ": " . "  Цена: " . $tshirts [$i][2] . 'руб. ';
    echo '<input type="number" name="tshirts" value="0" min="0" max="' . $tshirts[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
    echo $cap [$i][0] . ": " . "  Цена: " . $cap [$i][2] . 'руб. ';
    echo '<input type="number" name="cap" value="0" min="0" max="' . $cap[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
    echo $glasses [$i][0] . ": " . "  Цена: " . $glasses [$i][2] . 'руб. ';
    echo '<input type="number" name="glasses" value="0" min="0" max="' . $glasses[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
    echo $sweatshirts [$i][0] . ": " . "  Цена: " . $sweatshirts [$i][2] . 'руб. ';
    echo '<input type="number" name="sweatshirts" value="0" min="0" max="' . $sweatshirts[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
    echo $socks [$i][0] . ": " . "  Цена: " . $socks [$i][2] . 'руб. ';
    echo '<input type="number" name="socks " value="0" min="0" max="' . $socks[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
    echo $trousers [$i][0] . ": " . "  Цена: " . $trousers [$i][2] . 'руб. ';
    echo '<input type="number" name="trousers" value="0" min="0" max="' . $trousers[$i][3] . '"><input type="submit" value="В корзину"><br><hr><br><br>';

    echo $trousers [$i][0] . ": " . "  Цена: " . $trousers [$i][2] . 'руб. ';
    echo '<form method="post" action=""><input type="number" name="' . $shoes[$i][0] . '" value="0" min="0" max="' . $trousers[$i][3] . '"><input type="submit" value="В корзину"><br><hr></form>';
}


if (isset($_POST[$shoes[$i][0]])){
    $_SESSION['session_var_name'];
    echo "ДА!";
} 











?>

