<!DOCTYPE html>
<html>
<body>

<h2>Вбибирай сезон:</h2>
<form method="post" action="">
    <b><input type="radio" name="course1" value="Winter" />ЗИМА</b><br>
    <b><input type="radio" name="course2" value="Summer" />ВЕСНА</b><br>
    <b><input type="radio" name="course3" value="Spring" />ЛЕТО</b><br>
    <b><input type="radio" name="course4" value="Autumn" />ОСЕНЬ</b><br>
    <b><input type="submit" value="Выбрать сезон"><hr><hr>
</form>

<?php
$buyer = array();
// список товаров товаров
$shoes = array(
    array('Ботинки', "ЗИМА",1000, 10),
    array('Ботинки', "ВЕСНА", 2000, 20),
    array('Ботинки', "ЛЕТО", 3000, 30),
    array('Ботинки', "ОСЕНЬ", 4000, 40));
$tshirts = array(
    array('Футболки', "ЗИМА",1000, 10),
    array('Футболки', "ВЕСНА", 2000, 20),
    array('Футболки', "ЛЕТО", 3000, 30),
    array('Футболки', "ОСЕНЬ", 4000, 40));
$cap = array(
    array('Кепки', "ЗИМА",1000, 10),
    array('Кепки', "ВЕСНА", 2000, 20),
    array('Кепки', "ЛЕТО", 3000, 30),
    array('Кепки', "ОСЕНЬ", 4000, 40));
$glasses = array(
    array('Очки', "ЗИМА",1000, 10),
    array('Очки', "ВЕСНА", 2000, 20),
    array('Очки', "ЛЕТО", 3000, 30),
    array('Очки', "ОСЕНЬ", 4000, 40));
$sweatshirts = array(
    array('Кофты', "ЗИМА",1000, 10),
    array('Кофты', "ВЕСНА", 2000, 20),
    array('Кофты', "ЛЕТО", 3000, 30),
    array('Кофты', "ОСЕНЬ", 4000, 40));
$socks = array(
    array('Носки', "ЗИМА",1000, 10),
    array('Носки', "ВЕСНА", 2000, 20),
    array('Носки', "ЛЕТО", 3000, 30),
    array('Носки', "ОСЕНЬ", 4000, 40));
$trousers = array(
    array('Штаны', "ЗИМА",1000, 10),
    array('Штаны', "ВЕСНА", 2000, 20),
    array('Штаны', "ЛЕТО", 3000, 30),
    array('Штаны', "ОСЕНЬ", 4000, 40));
// устанавливаем время года
switch (date("m")) {
    case 1:
    case 2:
    case 12:
        $i = 0;
        winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);
    break;
    case 3:
    case 4:
    case 5:
        $i = 1;
        winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);
    break;
    case 6:
    case 7:
    case 8:
        $i = 2;
        winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);
    break;
    case 9:
    case 10:
    case 11:
        $i = 3;
        winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);
    break;}

// выбор времени года
if (isset($_POST["course1"])){
    $seasons = $_POST["course1"];
    $i = 0;
    clean();
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);} 
elseif (isset($_POST["course2"])){
    $seasons = $_POST["course2"];
    $i = 1;
    clean();
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);}
elseif (isset($_POST["course3"])){
    $seasons = $_POST["course3"];
    $i = 2;
    clean();
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);}
elseif (isset($_POST["course4"])){
    $seasons = $_POST["course4"];
    $i = 3;
    clean();
    winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i);}

function winter($shoes, $tshirts, $cap, $glasses, $sweatshirts, $socks, $trousers, $i){
    ob_start();
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
    echo '<input type="number" name="trousers" value="0" min="0" max="' . $trousers[$i][3] . '"><input type="submit" value="В корзину"><br><hr>';
}
function clean(){
    ob_end_clean();
}

?>

<form method="post" action="">
    <? echo $shoes [$i][0] . ": " . "  Цена: " . $shoes [$i][2] . 'руб. '; ?>
    <input type="number" name="shoes" value="0" min="0" max="' . $shoes[$i][3] . '"><input type="submit" value="В корзину"><br><hr>
</form>

<?php
if (isset($_POST["shoes"])){
    echo "ДА!";
    echo $i;
    echo $i;
    echo $i;
} 
?>





</body>
</html>