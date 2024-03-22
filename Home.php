<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP_55</title>
</head>

<body>

<?php
$buyer = array();
// список товаров товаров
$goods = [
    ['id' => 1, 'name' => 'Шапка', 'price' => 3000, 'in_stock' => 10],
    ['id' => 2, 'name' => 'Шарф', 'price' => 2000, 'in_stock' => 15],
    ['id' => 3, 'name' => 'Пуховик', 'price' => 10000, 'in_stock' => 80],];
?>  



<h3><u>ВЫБИРАЙ ТОВАРЫ:</u></h3><hr>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <?php foreach ($goods as $good): ?>
        <tr>
            <b><td><li><?= $good['id']; ?><br></b>
            <td><li><b><?= $good['name']; ?> руб/шт.<br></b>
            <td><li>Стоимость: <b><?= $good['price']; ?> руб/шт.<br></b>
            <td><li>В наличии: <b><?= $good['in_stock']; ?> шт.<br></b>
            <input type="number" name="fname" value="0" min="0" max="<?= $product['in_stock']; ?>">

            <input type="submit">
            
        </tr>   
    <?php endforeach; ?>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
    $name = $_POST['fname'];
    echo $name * 1000;
    
}


?> 





</body>


