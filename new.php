<!DOCTYPE html>
<html>
<body>

<h3>Вбибирай сезон:</h3>
<form method="POST">
    <input type="radio" name="course1" value="Winter" />Зима <br>
    <input type="radio" name="course2" value="Summer" />Лето <br>
    <input type="radio" name="course3" value="Spring" />Весна <br>
    <input type="radio" name="course4" value="Autumn" />Осень <br><br>
    <input type="submit" value="Выбрать сезон"><hr><hr>
</form>

<?php
// устанавливаем время года
$flag = 0;
do {
switch (date("m")) {
    case 1:
    case 2:
    case 12:
        $i = 0;
        $flaf = 1;
    break;
    case 3:
    case 4:
    case 5:
        $i = 1;
        $flaf = 1;
    break;
    case 6:
    case 7:
    case 8:
        $i = 2;
        $flaf = 1;
    break;
    case 9:
    case 10:
    case 11:
        $i = 3;
        $flaf = 1;
    break;
    default:
        throw new Exception('Ошибка');
    break;}
    } while ($flaf != 1);



    
// определяем переменные
$seasons = '';
$money = 10000;

// выбор времени года
if (isset($_POST["course1"])){
    $seasons = $_POST["course1"];
    $i = 0;} 
elseif (isset($_POST["course2"])){
    $seasons = $_POST["course2"];
    $i = 1;}
elseif (isset($_POST["course3"])){
    $seasons = $_POST["course3"];
    $i = 2;}
elseif (isset($_POST["course4"])){
    $seasons = $_POST["course4"];
    $i = 3;}

// список товаров товаров
$shoes = array(
    array('Ботинки', "Winter",1000, 10),
    array('Ботинки', "Summer", 2000, 20),
    array('Ботинки', "Spring", 3000, 30),
    array('Ботинки', "Autumn", 4000, 40));
$tshirts = array(
    array('Футболки', "Winter",1000, 10),
    array('Футболки', "Summer", 2000, 20),
    array('Футболки', "Spring", 3000, 30),
    array('Футболки', "Autumn", 4000, 40));
$cap = array(
    array('Кепки', "Winter",1000, 10),
    array('Кепки', "Summer", 2000, 20),
    array('Кепки', "Spring", 3000, 30),
    array('Кепки', "Autumn", 4000, 40));
$glasses = array(
    array('Очки', "Winter",1000, 10),
    array('Очки', "Summer", 2000, 20),
    array('Очки', "Spring", 3000, 30),
    array('Очки', "Autumn", 4000, 40));
$sweatshirts = array(
    array('Кофты', "Winter",1000, 10),
    array('Кофты', "Summer", 2000, 20),
    array('Кофты', "Spring", 3000, 30),
    array('Кофты', "Autumn", 4000, 40));
$socks = array(
    array('Носки', "Winter",1000, 10),
    array('Носки', "Summer", 2000, 20),
    array('Носки', "Spring", 3000, 30),
    array('Носки', "Autumn", 4000, 40));
$trousers = array(
    array('Штаны', "Winter",1000, 10),
    array('Штаны', "Summer", 2000, 20),
    array('Штаны', "Spring", 3000, 30),
    array('Штаны', "Autumn", 4000, 40));
?>

<form method="POST">
<ul>
    <li><?php echo $shoes [$i][0] . ": " . "  Цена: " . $shoes [$i][2] . 'руб. '?>
    <input type="number" name="shoes" value="0" min="0" max = "<?= $shoes[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
    <li><?php echo $tshirts [$i][0] . ": " . "  Цена: " . $tshirts [$i][2] . 'руб. '?>
    <input type="number" name="tshirts" value="0" min="0" max = "<?= $tshirts[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
    <li><?php echo $cap [$i][0] . ": " . "  Цена: " . $cap [$i][2] . 'руб. '?>
    <input type="number" name="cap" value="0" min="0" max = "<?= $cap[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
    <li><?php echo $glasses [$i][0] . ": " . "  Цена: " . $glasses [$i][2] . 'руб. '?>
    <input type="number" name="glasses" value="0" min="0" max = "<?= $glasses[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
    <li><?php echo $sweatshirts [$i][0] . ": " . "  Цена: " . $sweatshirts [$i][2] . 'руб. '?>
    <input type="number" name="sweatshirts" value="0" min="0" max = "<?= $sweatshirts[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
    <li><?php echo $socks [$i][0] . ": " . "  Цена: " . $socks [$i][2] . 'руб. '?>
    <input type="number" name="socks" value="0" min="0" max = "<?= $socks[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
    <li><?php echo $trousers [$i][0] . ": " . "  Цена: " . $socks [$i][2] . 'руб. '?>
    <input type="number" name="trousers" value="0" min="0" max = "<?= $trousers[$i][3]; ?>"><input type="submit" value="В корзину"><br><hr>
<ul>
</form>




</body>
</html>


if ($name = $_POST['ip_14']) {
        $cart += ['iPhone_14', $name * $phones[1]['price']];}
        arr($cart, $name);

    if ($name = $_POST['ip_15']) {
        $cart += ['iPhone_15', $name * $phones[0]['price']];}
        arr($cart, $name);
}

function arr($cart, $name) {
    for ($n = 0; $n < count($cart); $n++) {
        echo $n + 1 . '.' . $cart[$n] . "<br>\r\n";
            break 1;
    }
}


if ($name = $_POST['ip_15']) {
        $cart += ['iPhone_15', $name * $phones[0]['price']];}
        arr($cart);
