<!DOCTYPE html>
<html>
<body>
<?php
$buyer = array();
// список товаров товаров
$goods = [
    ['name' => 'Кроссовки', 'price' => 1000, 'quantity' => 10],
    ['name' => 'Футболка', 'price' => 2000, 'quantity' => 10],
    ['name' => 'Кепка', 'price' => 3000, 'quantity' => 10],];
?>

<h3><u>ВЫБИРАЙ ТОВАРЫ:</u></h3><hr>
<form method="post" action="">
    <?php foreach ($goods as $good): ?>
        <tr>
            <b><td><li><?= $good['name']; ?><br></b>
            <td><li>Стоимость: <b><?= $good['price']; ?> руб/шт.<br></b>
            <td><li>В наличии: <b><?= $good['quantity']; ?> шт.<br></b>
            <input type="number" name="goods" value="0" min="0" max="<?= $good['quantity']; ?>">
            <button type="submit">В корзину</button></td><hr>
        </tr>   
    <?php endforeach; ?>
</form>


<?php echo $_POST['goods']; ?>

<?php

// if (isset($_GET["goods"])){
//     echo "ДА!";
// } 
?>

<?php
  echo $_POST['goods'];
  echo "<br><br>";
  print_r($_POST); 
?>