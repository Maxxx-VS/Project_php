<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>РЕГИСТРАЦИЯ ПОЛЬЗОВАТЕЛЯ</h2>
        <p>Login: <input type="text" name="login"><br></p>
        <p>Name: <input type="text" name="name"><br></p>
        <!-- <p>Surname: <input type="text" name="surname"><br></p>
        <p>Age: <input type="text" name="age"><br></p>
        <p>Email: <input type="text" name="email"><br></p>
        <p>Site: <input type="text" name="website"><br></p>
        <p>City: <input type="text" name="city"><br></p>
        <p>Salary: <input type="text" name="salary"><br></p> --> -->

        <h3>Gender:</h3>
        <input type="radio" name="gender" value="female">Female<br>
        <input type="radio" name="gender" value="male">Male<br><br>
        <input type="submit"><br><hr>
        <button type="submit">ВЫВОД</button>
        <input type="text" name="date" value="<? echo $salary; ?>">
    </form>


</body>

<?php
$super_users = array();
$users = array();
$login = $name = $surname = $age = $salary = $email = $website = $city = "";
// получаем из поля ввода на странице
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = test_input($_POST["login"]);
    $name = test_input($_POST["name"]);
    // $surname = test_input($_POST["surname"]);
    // $age = test_input($_POST["age"]);
    // $salary = test_input($_POST["salary"]);
    // $email = test_input($_POST["email"]);
    // $website = test_input($_POST["website"]);
    // $city = test_input($_POST["city"]);

// дял вывода нв странице
    echo "ЛОГИН: " . $login . "<br>";    
    echo "ИМЯ: " . $name . "<br>";
    // echo "ФАМИЛИЯ: " . $surname . "<br>";
    // echo "ВОЗРАСТ: " . $age . "<br>";
    // echo "ЗАРПЛАТА: " . $salary . "<br>";    
    // echo "ПОЧТА: " . $email . "<br>";
    // echo "САЙТ: " . $website . "<br>";
    // echo "ГОРОД: " . $city . "<br>";    

// сохраняем введенные из поля ввода на странице
    $data[] = $_POST['login'];
    $data[] = $_POST['name'];
    // $data[] = $_POST['surname'];
    // $data[] = $_POST['age'];
    // $data[] = $_POST['salary'];
    // $data[] = $_POST['email'];
    // $data[] = $_POST['website'];
    // $data[] = $_POST['city'];

// чтение файла JSON
    $res = file_get_contents('results.json');
    $data = json_decode($res, true);
// запись файла JSON    
    array_push($data, $data1);
    $data[count($data)-1]['login'] = $login;
    $data[count($data)-1]['name'] = $name;
    // $data[count($data)-1]['surname'] = $surname;
    // $data[count($data)-1]['age'] = $age;
    // $data[count($data)-1]['salary'] = $salary;
    // $data[count($data)-1]['email'] = $email;
    // $data[count($data)-1]['website'] = $website;
    // $data[count($data)-1]['city'] = $city;

    $jsondata = json_encode($data, JSON_UNESCAPED_UNICODE);
    file_put_contents('results.json', $jsondata);
}




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <input type="text" name="date" value="<? echo $salary; ?>">
</form>