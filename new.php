<!DOCTYPE html>
<html>
<body>

<h3>Вбибирай сезон:</h3>
<form method="POST">
    <input type="radio" name="course1" value="Winter" />Зима <br>
    <input type="radio" name="course2" value="Summer" />Лето <br>
    <input type="radio" name="course3" value="Spring" />Весна <br>
    <input type="radio" name="course4" value="Autumn" />Осень <br>
    <input type="submit" value="Отправить"><hr><hr>
</form>



<?php
// выбор времени года
$seasons = '';
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

// добавление в корзину
$buyer = array();



// депозит покупателя
$money = 10000;



// товары
$shoes = array(
    array('Обувь', "Winter",5000, 5),
    array('Обувь', "Summer", 1500, 30),
    array('Обувь', "Spring", 2500, 15),
    array('Обувь', "Autumn", 2500, 50));
$tshirts = array(
    array('Футболки', "Winter",1000, 10),
    array('Футболки', "Summer", 2000, 45),
    array('Футболки', "Spring", 1500, 35),
    array('Футболки', "Autumn", 1500, 10));
$cap = array(
    array('Кепки', "Winter",100, 5),
    array('Кепки', "Summer", 200, 3),
    array('Кепки', "Spring", 150, 4),
    array('Кепки', "Autumn", 150, 8));
$glasses = array(
    array('Очки', "Winter",400, 3),
    array('Очки', "Summer", 600, 7),
    array('Очки', "Spring", 750, 9),
    array('Очки', "Autumn", 750, 5));
$sweatshirts = array(
    array('Кофты', "Winter",4000, 13),
    array('Кофты', "Summer", 6000, 17),
    array('Кофты', "Spring", 7500, 19),
    array('Кофты', "Autumn", 7500, 15));
$socks = array(
    array('Носки', "Winter",50, 100),
    array('Носки', "Summer", 60, 200),
    array('Носки', "Spring", 85, 40),
    array('Носки', "Autumn", 85, 56));
$trousers = array(
    array('Штаны', "Winter",5000, 10),
    array('Штаны', "Summer", 6000, 20),
    array('Штаны', "Spring", 8500, 5),
    array('Штаны', "Autumn", 8500, 9));




switch ($seasons) {
    case "Winter":
        echo "Зимняя колекция: " . "<br>" . "<hr>";
        echo $shoes [0][0] . ": " . "  Цена: " . $shoes [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $shoes[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $tshirts[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $cap [0][0] . ": " . "  Цена: " . $cap [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $cap[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $glasses [0][0] . ": " . "  Цена: " . $glasses [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $glasses[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $sweatshirts[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $socks [0][0] . ": " . "  Цена: " . $socks [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $socks[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $trousers [0][0] . ": " . "  Цена: " . $trousers [0][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $trousers[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
        break;
    case "Summer":
        echo "Летняя колекция: " . "<br>" . "<hr>";
        echo $shoes [0][0] . ": " . "  Цена: " . $shoes [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $shoes[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $tshirts[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $cap [0][0] . ": " . "  Цена: " . $cap [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $cap[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $glasses [0][0] . ": " . "  Цена: " . $glasses [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $glasses[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $sweatshirts[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $socks [0][0] . ": " . "  Цена: " . $socks [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $socks[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $trousers [0][0] . ": " . "  Цена: " . $trousers [1][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $trousers[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
        break;
    case "Spring":
        echo "Весенняя колекция: " . "<br>" . "<hr>";
        echo $shoes [0][0] . ": " . "  Цена: " . $shoes [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $shoes[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $tshirts[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $cap [0][0] . ": " . "  Цена: " . $cap [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $cap[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $glasses [0][0] . ": " . "  Цена: " . $glasses [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $glasses[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $sweatshirts[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $socks [0][0] . ": " . "  Цена: " . $socks [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $socks[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $trousers [0][0] . ": " . "  Цена: " . $trousers [2][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $trousers[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
        break;
    case "Autumn":
        echo "Осенняя колекция: " . "<br>" . "<hr>";
        echo $shoes [0][0] . ": " . "  Цена: " . $shoes [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $shoes[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $tshirts[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $cap [0][0] . ": " . "  Цена: " . $cap [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $cap[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $glasses [0][0] . ": " . "  Цена: " . $glasses [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $glasses[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $sweatshirts[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $socks [0][0] . ": " . "  Цена: " . $socks [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $socks[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        echo $trousers [0][0] . ": " . "  Цена: " . $trousers [3][2] . 'руб. ' . '<input type="number" name="shoes" value="0" min="0" max= "'. $trousers[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
        break;

}

?>



</body>
</html>


