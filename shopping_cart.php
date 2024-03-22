<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE_55_OMSK</title>

<?php

$phones = [
    ['name' => 'iPhone_13', 'price' => 50000, 'in_stock' => 5],
    ['name' => 'iPhone_14', 'price' => 75000, 'in_stock' => 7],
    ['name' => 'iPhone_15', 'price' => 100000, 'in_stock' => 3],];

?>

<h2><u>ВЫБИРАЙ ТЕЛЕФОНЫ:</u></h2><hr><hr><hr>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <b><li>iPhone 13 PRO MAX >>></b><input type="number" name="ip_13" value="0" min="0" max="<?= $phones[0]['in_stock']; ?>">
    <input type="submit"><br><hr>

    <b><li>iPhone 14 PRO MAX >>></b><input type="number" name="ip_14" value="0" min="0" max="<?= $phones[1]['in_stock']; ?>">
    <input type="submit"><br><hr>

    <b><li>iPhone 15 PRO MAX >>></b><input type="number" name="ip_15" value="0" min="0" max="<?= $phones[2]['in_stock']; ?>">
    <input type="submit"><br><hr><hr><hr>

    <b><h2><u>В КОРЗИНЕ: </u></h2><br>
 
</form>


<?php

$ip_13 = '';
$ip_14 = '';
$ip_15 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if ($name = $_POST['ip_13']) {
        $ip_13 = $phones[0]['name'] . ". Количестов = " . $name . "шт.   на общую сумму " . $name * $phones[0]['price'] . " рублей.";}
        echo $ip_13 . "<br><br>";
        
    if ($name = $_POST['ip_14']) {
        $ip_14 = $phones[1]['name'] . ". Количестов = " . $name . "шт.   на общую сумму " . $name * $phones[1]['price'] . " рублей.";}
        echo $ip_14 . "<br><br>";
    
    if ($name = $_POST['ip_15']) {
        $ip_15 = $phones[2]['name'] . ". Количестов = " . $name . "шт.   на общую сумму " . $name * $phones[2]['price'] . " рублей.";}
        echo $ip_15 . "<br><br>";
} else {
    echo "Корзина пустая";
}

?>

<b><h2><u>ВЫБРАТЬ СПОСОБ ОПЛАТЫ: </u></h2><br>
<form method="POST">
    <input type="radio" name="course1" value="card_1" checked />Картой на кассе <br>
    <input type="radio" name="course1" value="cash_1" />Наличными на кассе <br>
    <input type="radio" name="course1" value="card_2" />Картой курьеру <br>
    <input type="radio" name="course1" value="cash_2" />Наличными куртеру <br><br>
    <input type="submit" value="Выбрать сезон"><hr><hr>
</form>


