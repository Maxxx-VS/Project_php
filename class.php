<!DOCTYPE html>
<html>
<body>



<?php
class Car {

    public $user;
    public $model;
    public $series;
    public $number;
    private $price = 1000000;

    function get_price(){
        echo "Цена: " . $this->price;
    }

    function change_price($A){
        $this->price = $A . "<br>";
    }
}

// create an object
$herbie1 = new Car();
$herbie2 = new Car();
$herbie3 = new Car();
$herbie4 = new Car();

// show object properties
$herbie1->change_price(500);
echo  "Владелец: " . $herbie1->user = "Alex" . "<br>";
echo "Марка авто: " . $herbie1->model = "bmw" . "<br>";
echo "Модель: " . $herbie1->series = "e4" . "<br>";
echo $herbie1-> get_price() . "<br>";
echo "Гос.номер: " . $herbie1->number = "555" . "<br>" . "<br>";

echo  "Владелец: " . $herbie2->user = "Alex" . "<br>";
echo "Марка авто: " . $herbie2->model = "bmw" . "<br>";
echo "Модель: " . $herbie2->series = "e4" . "<br>";
echo "Гос.номер: " . $herbie2->number = "555" . "<br>" . "<br>";

echo  "Владелец: " . $herbie3->user = "Alex" . "<br>";
echo "Марка авто: " . $herbie3->model = "bmw" . "<br>";
echo "Модель: " . $herbie3->series = "e4" . "<br>";
echo "Гос.номер: " . $herbie3->number = "555" . "<br>" . "<br>";

echo  "Владелец: " . $herbie4->user = "Alex" . "<br>";
echo "Марка авто: " . $herbie4->model = "bmw" . "<br>";
echo "Модель: " . $herbie4->series = "e4" . "<br>";
echo "Гос.номер: " . $herbie4->number = "555" . "<br>" . "<br>";


class Old_car extends  Car {
    public $max_speed;
}

$herbie5 = new Old_car();

echo  "Владелец: " . $herbie5->user = "Alex77" . "<br>";
echo "Марка авто: " . $herbie5->model = "bm777w" . "<br>";
echo "Модель: " . $herbie5->series = "e7774" . "<br>";
echo  "Скорость: " . $herbie5->max_speed = "240" . "<br>";
echo "Гос.номер: " . $herbie5->number = "557775" . "<br>" . "<br>";


class Old_old_car extends  Old_car {
    public $min_speed;
}

$herbie6 = new Old_old_car();

echo  "Владелец: " . $herbie6->user = "Alex77" . "<br>";
echo "Марка авто: " . $herbie6->model = "bm777w" . "<br>";
echo "Модель: " . $herbie6->series = "e7774" . "<br>";
echo  "Скорость: " . $herbie6->max_speed = "90" . "<br>";
echo  "Скорость: " . $herbie6->min_speed = "30" . "<br>";
echo "Гос.номер: " . $herbie6->number = "557775" . "<br>" . "<br>";



?>



</body>
</html>


// switch ($seasons) {
//     case "Winter":
//         echo '<b>ЗИМНЯЯ КОЛЕКЦИЯ : </b>' . "<br>" . "<hr>";
//         echo $shoes [0][0] . ": " . "  Цена: " . $shoes [0][2] . 'руб. ' . '<input type="number" name="s_w" value="0" min="0" max= "'. $shoes[0][3] . '">' . '<input type="submit" name="s_w value="В корзину"><br>';
//         echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [0][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $tshirts[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $cap [0][0] . ": " . "  Цена: " . $cap [0][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $cap[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $glasses [0][0] . ": " . "  Цена: " . $glasses [0][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $glasses[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [0][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $sweatshirts[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $socks [0][0] . ": " . "  Цена: " . $socks [0][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $socks[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $trousers [0][0] . ": " . "  Цена: " . $trousers [0][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $trousers[0][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         break;
//     case "Summer":
//         echo '<b>ЛЕТНЯЯ КОЛЕКЦИЯ : </b>' . "<br>" . "<hr>";
//         echo $shoes [0][0] . ": " . "  Цена: " . $shoes [1][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $shoes[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [1][2] . 'руб. ' . '<input type="number" nvalue="0" min="0" max= "'. $tshirts[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $cap [0][0] . ": " . "  Цена: " . $cap [1][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $cap[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $glasses [0][0] . ": " . "  Цена: " . $glasses [1][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $glasses[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [1][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $sweatshirts[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $socks [0][0] . ": " . "  Цена: " . $socks [1][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $socks[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $trousers [0][0] . ": " . "  Цена: " . $trousers [1][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $trousers[1][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         break;
//     case "Spring":
//         echo '<b>ВЕСЕННЯЯ КОЛЕКЦИЯ : </b>' . "<br>" . "<hr>";
//         echo $shoes [0][0] . ": " . "  Цена: " . $shoes [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $shoes[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $tshirts[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $cap [0][0] . ": " . "  Цена: " . $cap [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $cap[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $glasses [0][0] . ": " . "  Цена: " . $glasses [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $glasses[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $sweatshirts[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $socks [0][0] . ": " . "  Цена: " . $socks [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $socks[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $trousers [0][0] . ": " . "  Цена: " . $trousers [2][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $trousers[2][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         break;
//     case "Autumn":
//         echo '<b>ОСЕННЯЯ КОЛЕКЦИЯ : </b>' . "<br>" . "<hr>";
//         echo $shoes [0][0] . ": " . "  Цена: " . $shoes [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $shoes[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $tshirts [0][0] . ": " . "  Цена: " . $tshirts [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $tshirts[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $cap [0][0] . ": " . "  Цена: " . $cap [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $cap[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $glasses [0][0] . ": " . "  Цена: " . $glasses [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $glasses[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $sweatshirts [0][0] . ": " . "  Цена: " . $sweatshirts [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $sweatshirts[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $socks [0][0] . ": " . "  Цена: " . $socks [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $socks[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         echo $trousers [0][0] . ": " . "  Цена: " . $trousers [3][2] . 'руб. ' . '<input type="number" value="0" min="0" max= "'. $trousers[3][3] . '">' . '<input type="submit" value="В корзину"><br>';
//         break;
// }