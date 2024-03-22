<?php
// чтение JSON
echo '<pre>';
$res = file_get_contents('results.json');
print_r($res);
var_dump($res);
echo '<br>';
$data = json_decode($res, true);
// var_dump($data);
for ($i = 0; $i < count($data); $i++) {
    $data[$i]['age'] = 2;
    $data[$i]['salary'] = $data[$i]['salary'] + 10000;
}
print_r($data);

// запись в JSON
$jsondata = json_encode($data);
file_put_contents('results.json', $jsondata);





?>