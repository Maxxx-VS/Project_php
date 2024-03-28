<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-55</title>


<h2>Добро пожаловать</h2>
<h2>в магазин на диване!</h2>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
        <select name="Googs">
        <h4>Выберай товар: </h4>
            <option value="Шапка">Шапка</option>
            <option value="Куртка">Куртка</option>
            <option value="Штаны">Штаны</option>
            <option value="Кроссовки">Кроссовки</option>
        </select>

        <select name="Quantity">
        <h4>Выберай товар: </h4>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br><br><input type="submit" name="Submit" value="В корзину">

</form>


<?php



if(isset($_POST['Googs'])) {
    add();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function add(){
    echo '<br>';
    echo "Выбраный товар: ".htmlspecialchars($_POST['Googs']) . '<br>';
    echo "Количество: ".htmlspecialchars($_POST['Quantity']);
    $g = $q = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $g = test_input($_POST["Googs"]);
        $q = test_input($_POST["Quantity"]);
        $data[] = $_POST['Googs'];
        $data[] = $_POST['Quantity'];
        $res = file_get_contents('results.json');
        $data = json_decode($res, true);
        $data[count($data)] = $g;
        $data[count($data)] = $q;
        $jsondata = json_encode($data, JSON_UNESCAPED_UNICODE);
        file_put_contents('results.json', $jsondata);
}
}

?>

<form action="final.php" method="post">
    <br><br><input type="submit" name="out" value="Чек" /><br><br><hr>
</form>

<?php

if (isset($_POST["out"])){
    myFunction();
} 

function myFunction(){
    $count = 0;
    $res_1 = file_get_contents('results.json');
    $obj = json_decode($res_1, true);
    $len = count($obj);



    
    for ($i = 0; $i <= $len-1; $i+=2){

        switch($obj[$i]){
     
            case "Куртка": $prise = 100; $image_path = "kurtka.png"; break;
            case "Шапка": $prise = 200; $image_path = "shapka.png"; break;
            case "Кроссовки": $prise = 300; $image_path = "krossovki.png"; break;
            default:  $prise = 400; $image_path = "shtany.png";break;
        }


        echo "Товар: ".$obj[$i].'<br>';
        echo "Цена за штуку: ".$prise." рублей<br>";
        echo "Количество: ".$obj[$i+1].'шт.'.'<br>';
        echo "Итого: ".$prise * $obj[$i+1]." рублей.".'<br>';
        echo "<img src='$image_path' alt='Описание изображения'><hr>";
        $count += $prise * $obj[$i+1];
}

echo "<span>ВСЕГО: ".$count." рублей.</span>";

}

?>

</body>