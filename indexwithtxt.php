<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 33px;
        }

        button {
            margin: 0px 5px 0px 5px;
        }
    </style>
</head>



<body>

    <?php

    $Json_file = file_get_contents('db.json'); // получаем из файла данные
    $Json_file = json_decode($Json_file, true);

    $countt0 = 0;
    $countt1 = 0;
    $countt2 = 0;
    $countt3 = 0;
    $countt4 = 0;
    $countt5 = 0;
    $countt6 = 0;


    $ostatok0 = 0;
    $ostatok1 = 0;
    $ostatok2 = 0;
    $ostatok3 = 0;
    $ostatok4 = 0;
    $ostatok5 = 0;
    $ostatok6 = 0;

    $check = 0;
    $answer = 0;

    $favorites = array(
        array("Кепки", 800, 20, 0),
        array("Футболки", 2000, 10, 0),
        array("Майки", 1500, 25, 0),
        array("Штаны", 3000, 5, 0),
        array("Шорты", 2500, 15, 0),
        array("Носки", 100, 13, 0),
        array("Кросовки", 6000, 7, 0)
    );

    // Кепки
    if (isset($_POST['btn0-1'])) {
        $countt0 = file_get_contents('kol-vo_kepki.txt');
        $countt0++;
        $f = fopen('kol-vo_kepki.txt', 'w+');
        fputs($f, $countt0);
        fclose($f);
        $favorites[0][2] -= $countt0;
        $check = $countt0 * $favorites[0][1];
        $answer = $check;
    } else if (isset($_POST['btn0-2'])) {
        $countt0 = file_get_contents('kol-vo_kepki.txt');
        $countt0--;
        $f = fopen('kol-vo_kepki.txt', 'w+');
        fputs($f, $countt0);
        fclose($f);
        $favorites[0][2] += $countt0;
        $check = $countt0 * $favorites[0][1];
        $answer = ($check - $favorites[0][1]) + $favorites[0][1];
    }

    // Футболки
    else if (isset($_POST['btn1-1'])) {
        $countt1 = file_get_contents('kol-vo_futbolki.txt');
        $countt1++;
        $f = fopen('kol-vo_futbolki.txt', 'w+');
        fputs($f, $countt1);
        fclose($f);
        $favorites[1][2] -= $countt1;
        $check = $countt1 * $favorites[1][1];
        $answer = $check;
    } else if (isset($_POST['btn1-2'])) {
        $countt1 = file_get_contents('kol-vo_futbolki.txt');
        $countt1--;
        $f = fopen('kol-vo_futbolki.txt', 'w+');
        fputs($f, $countt1);
        fclose($f);
        $favorites[1][2] -= $countt1;
        $check = $countt1 * $favorites[1][1];
        $answer = ($check - $favorites[1][1]) + $favorites[1][1];
    }
    // Майки
    else if (isset($_POST['btn2-1'])) {
        $countt2 = file_get_contents('kol-vo_maiki.txt');
        $countt2++;
        $f = fopen('kol-vo_maiki.txt', 'w+');
        fputs($f, $countt2);
        fclose($f);
        $favorites[2][2] -= $countt2;
        $check = $countt2 * $favorites[2][1];
        $answer = $check;
    } else if (isset($_POST['btn2-2'])) {
        $countt2 = file_get_contents('kol-vo_maiki.txt');
        $countt2--;
        $f = fopen('kol-vo_maiki.txt', 'w+');
        fputs($f, $countt2);
        fclose($f);
        $favorites[2][2] -= $countt2;
        $check = $countt2 * $favorites[2][1];
        $answer = ($check - $favorites[2][1]) + $favorites[2][1];
    }
    // Штаны
    else if (isset($_POST['btn3-1'])) {
        $countt3 = file_get_contents('kol-vo_shtani.txt');
        $countt3++;
        $f = fopen('kol-vo_shtani.txt', 'w+');
        fputs($f, $countt3);
        fclose($f);
        $favorites[3][2] -= $countt3;
        $check = $countt3 * $favorites[3][1];
        $answer = $check;
    } else if (isset($_POST['btn3-2'])) {
        $countt3 = file_get_contents('kol-vo_shtani.txt');
        $countt3--;
        $f = fopen('kol-vo_shtani.txt', 'w+');
        fputs($f, $countt3);
        fclose($f);
        $favorites[3][2] -= $countt3;
        $check = $countt3 * $favorites[3][1];

        $answer = ($check - $favorites[3][1]) + $favorites[3][1];
    }
    // Шорты
    else if (isset($_POST['btn4-1'])) {
        $countt4 = file_get_contents('kol-vo_shorty.txt');
        $countt4++;
        $f = fopen('kol-vo_shorty.txt', 'w+');
        fputs($f, $countt4);
        fclose($f);
        $favorites[4][2] -= $countt4;
        $check = $countt4 * $favorites[4][1];
        $answer = $check;
    } else if (isset($_POST['btn4-2'])) {
        $countt4 = file_get_contents('kol-vo_shorty.txt');
        $countt4--;
        $f = fopen('kol-vo_shorty.txt', 'w+');
        fputs($f, $countt4);
        fclose($f);
        $favorites[4][2] -= $countt4;
        $check = $countt4 * $favorites[4][1];
        $answer = ($check - $favorites[4][1]) + $favorites[4][1];
    }
    // Носки
    else if (isset($_POST['btn5-1'])) {
        $countt5 = file_get_contents('kol-vo_noski.txt');
        $countt5++;
        $f = fopen('kol-vo_noski.txt', 'w+');
        fputs($f, $countt5);
        fclose($f);
        $favorites[5][2] -= $countt5;
        $check = $countt5 * $favorites[5][1];
        $answer = $check;
    } else if (isset($_POST['btn5-2'])) {
        $countt5 = file_get_contents('kol-vo_noski.txt');
        $countt5--;
        $f = fopen('kol-vo_noski.txt', 'w+');
        fputs($f, $countt5);
        fclose($f);
        $favorites[5][2] -= $countt5;
        $check = $countt5 * $favorites[5][1];
        $answer = ($check - $favorites[5][1]) + $favorites[5][1];
    }
    // Кросовки
    else if (isset($_POST['btn6-1'])) {
        $countt6 = file_get_contents('kol-vo_krosovki.txt');
        $countt6++;
        $f = fopen('kol-vo_krosovki.txt', 'w+');
        fputs($f, $countt6);
        fclose($f);
        $favorites[6][2] -= $countt6;
        $check = $countt6 * $favorites[6][1];
        $answer = $check;
    } else if (isset($_POST['btn6-2'])) {
        $countt6 = file_get_contents('kol-vo_krosovki.txt');
        $countt6--;
        $f = fopen('kol-vo_krosovki.txt', 'w+');
        fputs($f, $countt6);
        fclose($f);
        $favorites[6][2] -= $countt6;
        $check = $countt6 * $favorites[6][1];
        $answer = ($check - $favorites[6][1]) + $favorites[6][1];
    }
    ?>

    <h1>Спортмастер</h1>
    <h2>Добро пожаловать в наш магазин. <br> Желаем Вам приятных покупок!</h2>

    <form action="indexwithtxt.php" method="POST">
        <table>
            <tr>
                <th><b>Наименование:</b></th>
                <th><b>Цена: (руб)</b></th>
                <th><b>Остаток:</b></th>
                <th><b>Кол-во:</b></th>
            </tr>
            <tr>
                <td>Кепки</td>
                <td><?php echo $favorites[0][1]; ?></td>
                <td><?php echo $favorites[0][2]; ?></td>
                <td>
                    <button name="btn0-1">+</button> <?php echo $countt0; ?> <button name="btn0-2">-</button> <button name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td>Футболки</td>
                <td><?php echo $favorites[1][1]; ?></td>
                <td><?php echo $favorites[1][2]; ?></td>
                <td>
                    <button name="btn1-1">+</button> <?php echo $countt1; ?> <button name="btn1-2">-</button> <button name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td>Майки</td>
                <td><?php echo $favorites[2][1]; ?></td>
                <td><?php echo $favorites[2][2]; ?></td>
                <td>
                    <button name="btn2-1">+</button> <?php echo $countt2; ?> <button name="btn2-2">-</button> <button name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td>Штаны</td>
                <td><?php echo $favorites[3][1]; ?></td>
                <td><?php echo $favorites[3][2]; ?></td>
                <td>
                    <button name="btn3-1">+</button> <?php echo $countt3; ?> <button name="btn3-2">-</button> <button name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td>Шорты</td>
                <td><?php echo $favorites[4][1]; ?></td>
                <td><?php echo $favorites[4][2]; ?></td>
                <td>
                    <button name="btn4-1">+</button> <?php echo $countt4; ?> <button name="btn4-2">-</button> <button name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td>Носки</td>
                <td><?php echo $favorites[5][1]; ?></td>
                <td><?php echo $favorites[5][2]; ?></td>
                <td>
                    <button name="btn5-1">+</button> <?php echo $countt5; ?> <button name="btn5-2">-</button> <button name="add">В корзину</button>
                </td>
            </tr>
            <tr>
                <td>Кросовки</td>
                <td><?php echo $favorites[6][1]; ?></td>
                <td><?php echo $favorites[6][2]; ?></td>
                <td>
                    <button name="btn6-1">+</button> <?php echo $countt6; ?> <button name="btn6-2">-</button> <button name="add">В корзину</button>
                </td>
                <tfoot>
                    <td colspan="5"> <?php echo '<b>Общая сумма покупок: </b>', $answer, '<b> (руб)</b>'; ?> </td>
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