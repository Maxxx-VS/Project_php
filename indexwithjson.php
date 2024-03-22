<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>

    <style>
        body {
            text-align: center;
        }

        h2 {
            margin-bottom: 83px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 25px;
            text-align: center;
        }

        .answer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input {
            margin-left: 10px;
            margin-right: 10px;
            width: 25px;
        }

        button {
            margin: 0px 5px 0px 5px;
        }
    </style>
</head>



<body>

    <?php
    $Json_file = file_get_contents('db.json');
    $Json_file = json_decode($Json_file, true);

    // Кепки
    if (isset($_POST['btn0-1'])) {
        $Json_file[0]["Количество"] += 1;
        $Json_file[0]["Остаток"] -= 1;
        $Json_file[0]["Общая сумма"] = $Json_file[0]["Количество"] * $Json_file[0]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn0-2'])) {
        $Json_file[0]["Количество"] -= 1;
        $Json_file[0]["Остаток"] += 1;
        $Json_file[0]["Общая сумма"] -= $Json_file[0]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Футболки
    else if (isset($_POST['btn1-1'])) {
        $Json_file[1]["Количество"] += 1;
        $Json_file[1]["Остаток"] -= 1;
        $Json_file[1]["Общая сумма"] = $Json_file[1]["Количество"] * $Json_file[1]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn1-2'])) {
        $Json_file[1]["Количество"] -= 1;
        $Json_file[1]["Остаток"] += 1;
        $Json_file[1]["Общая сумма"] -= $Json_file[1]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Майки
    else if (isset($_POST['btn2-1'])) {
        $Json_file[2]["Количество"] += 1;
        $Json_file[2]["Остаток"] -= 1;
        $Json_file[2]["Общая сумма"] = $Json_file[2]["Количество"] * $Json_file[2]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn2-2'])) {
        $Json_file[2]["Количество"] -= 1;
        $Json_file[2]["Остаток"] += 1;
        $Json_file[2]["Общая сумма"] -= $Json_file[2]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Штаны
    else if (isset($_POST['btn3-1'])) {
        $Json_file[3]["Количество"] += 1;
        $Json_file[3]["Остаток"] -= 1;
        $Json_file[3]["Общая сумма"] = $Json_file[3]["Количество"] * $Json_file[3]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn3-2'])) {
        $Json_file[3]["Количество"] -= 1;
        $Json_file[3]["Остаток"] += 1;
        $Json_file[3]["Общая сумма"] -= $Json_file[3]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Шорты
    else if (isset($_POST['btn4-1'])) {
        $Json_file[4]["Количество"] += 1;
        $Json_file[4]["Остаток"] -= 1;
        $Json_file[4]["Общая сумма"] = $Json_file[4]["Количество"] * $Json_file[4]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn4-2'])) {
        $Json_file[4]["Количество"] -= 1;
        $Json_file[4]["Остаток"] += 1;
        $Json_file[4]["Общая сумма"] -= $Json_file[4]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Носки
    else if (isset($_POST['btn5-1'])) {
        $Json_file[5]["Количество"] += 1;
        $Json_file[5]["Остаток"] -= 1;
        $Json_file[5]["Общая сумма"] = $Json_file[5]["Количество"] * $Json_file[5]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn5-2'])) {
        $Json_file[5]["Количество"] -= 1;
        $Json_file[5]["Остаток"] += 1;
        $Json_file[5]["Общая сумма"] -= $Json_file[5]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Кросовки
    else if (isset($_POST['btn6-1'])) {
        $Json_file[6]["Количество"] += 1;
        $Json_file[6]["Остаток"] -= 1;
        $Json_file[6]["Общая сумма"] = $Json_file[6]["Количество"] * $Json_file[6]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    } else if (isset($_POST['btn6-2'])) {
        $Json_file[6]["Количество"] -= 1;
        $Json_file[6]["Остаток"] += 1;
        $Json_file[6]["Общая сумма"] -= $Json_file[6]["Цена"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Общая сумма
    else if (isset($_POST['add'])) {
        $Json_file[7]["Цена корзины"] = $Json_file[0]["Общая сумма"] + $Json_file[1]["Общая сумма"] + $Json_file[2]["Общая сумма"] + $Json_file[3]["Общая сумма"] + $Json_file[4]["Общая сумма"] + $Json_file[5]["Общая сумма"] + $Json_file[6]["Общая сумма"];
        $newJsonfile = json_encode($Json_file, JSON_UNESCAPED_UNICODE); // создаем новый файл Json
        file_put_contents("db.json", $newJsonfile);
    }
    // Показать чек
    else if (isset($_POST['add'])) {
    }
    ?>

    <h1>Спортмастер</h1>
    <h2>Добро пожаловать в наш магазин. <br> Желаем Вам приятных покупок!</h2>

    <form method="POST">
        <table>
            <tr>
                <th><b>Наименование:</b></th>
                <th><b>Цена: (руб)</b></th>
                <th><b>Остаток:</b></th>
                <th><b>Кол-во:</b></th>
            </tr>
            <tr>
                <td><?php echo $Json_file[0]["Наименование"]; ?></td>
                <td><?php echo $Json_file[0]["Цена"]; ?></td>
                <td><?php echo $Json_file[0]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn0-1">+</button> <?php echo $Json_file[0]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn0-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td><?php echo $Json_file[1]["Наименование"]; ?></td>
                <td><?php echo $Json_file[1]["Цена"]; ?></td>
                <td><?php echo $Json_file[1]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn1-1">+</button> <?php echo $Json_file[1]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn1-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td><?php echo $Json_file[2]["Наименование"]; ?></td>
                <td><?php echo $Json_file[2]["Цена"]; ?></td>
                <td><?php echo $Json_file[2]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn2-1">+</button> <?php echo $Json_file[2]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn2-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td><?php echo $Json_file[3]["Наименование"]; ?></td>
                <td><?php echo $Json_file[3]["Цена"]; ?></td>
                <td><?php echo $Json_file[3]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn3-1">+</button> <?php echo $Json_file[3]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn3-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td><?php echo $Json_file[4]["Наименование"]; ?></td>
                <td><?php echo $Json_file[4]["Цена"]; ?></td>
                <td><?php echo $Json_file[4]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn4-1">+</button> <?php echo $Json_file[4]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn4-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td><?php echo $Json_file[5]["Наименование"]; ?></td>
                <td><?php echo $Json_file[5]["Цена"]; ?></td>
                <td><?php echo $Json_file[5]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn5-1">+</button> <?php echo $Json_file[5]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn5-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td><?php echo $Json_file[6]["Наименование"]; ?></td>
                <td><?php echo $Json_file[6]["Цена"]; ?></td>
                <td><?php echo $Json_file[6]["Остаток"]; ?></td>
                <td>
                    <button class="btn btn-outline-primary btn-sm" name="btn6-1">+</button> <?php echo $Json_file[6]["Количество"]; ?> <button class="btn btn-outline-primary btn-sm" name="btn6-2">-</button> <button class="btn btn-warning btn-sm" name="add">В корзину</button>
                </td>
                <tfoot>
                    <td colspan="3"> <?php echo '<b>Общая сумма покупок: </b>', $Json_file[7]["Цена корзины"], '<b> (руб)</b>'; ?> </td>
                    <td> <a href="check.php" class="btn btn-dark btn-sm">Оплатить</a></td>
                </tfoot>
            </tr>
        </table>
    </form>

</body>

</html>






<!-- // if(file_exists('db.txt')){
    //     $counter = file_get_contents('db.txt');
    //     $counter++;
    //     $f = fopen('db.txt','w+');
    //     fputs($f,$counter);
    //     fclose($f);
    // }
    // else{
    //     $f = fopen('db.txt','w+');
    //     fputs($f,0);
    //     fclose($f);
    // }

    // $counter = file_get_contents('db.txt');
    // echo 'Кликов: '.$counter; -->