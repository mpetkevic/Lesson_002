<?php
echo "Задание 1" . "<br>";
$name = "Miroslav";
$age = "31";

echo "Меня зовут " . $name . "<br>";
echo "Мне " . $age . " лет" . "<br>";

echo "\"!|\/'\"\\";
echo "<hr>";

echo "Задание 2" . "<br>";

$total = 80;
echo $total . " рисунков" . "<br>";
$flomas = 23;
echo $flomas . " выполнены фломастерами" . "<br>";
$pencil = 40;
echo $pencil . " выполнены карандашами" . "<br>";
$paints = $total - $flomas - $pencil;
echo $paints . " выполнены красками" . "<br>";

echo "<hr>";

echo "Задание 3" . "<br>";

define("PI", 3.14);

if (defined("PI")) {
    echo "Constant exists";
} else {
    echo "Constant doesn't exists";
}
echo "<br>";
echo "Constant PI = " . PI;

//PI = 3; error can't change constant value;

echo "<hr>";

echo "Задание 4" . "<br>";

$newAge = mt_rand(0, 89);

echo "Возраст = " . $newAge . "<br>";

define("age_min", 0);
define("age_normal", 18);
define("age_wrong", 65);

if ($newAge >= age_normal && $newAge <= age_wrong) {
    echo "Вам еще работать и работать";
} elseif ($newAge < age_wrong && $newAge > age_min) {
    echo "Вам ещё рано работать";
} elseif ($newAge > age_wrong) {
    echo "Вам пора на пенсию";
} else {
    echo "Неизвестный возраст";
}






echo "<hr>";

echo "Задание 5" . "<br>";

$day = mt_rand(0, 8);

echo "День = " . $day . "<br>";

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день" . "<br>";
        break;
    case 6:
    case 7:
        echo "Это выходной день" . "<br>";
        break;
    default:
        echo "Неизвестный день";
}

echo "<hr>";

echo "Задание 6" . "<br>";

$bmw = ["name" => "X5", "speed" => 120, "doors" => 4, "year" => 2015];
$toyota = ["name" => "Corolla", "speed" => 100, "doors" => 4, "year" => 2017];
$opel = ["name" => "Astra", "speed" => 130, "doors" => 4, "year" => 2012];
$cars["BMW"] = $bmw;
$cars["TOYOTA"] = $toyota;
$cars["OPEL"] = $opel;

foreach ($cars as $key => $item) {
    echo "Car " . $key . "<br>";
    echo "name: " . $item["name"] . " speed: " . $item["speed"] . " doors: " . $item["doors"] . " year: " . $item["year"] . "<br>";
}


echo "<hr>";

echo "Задание 7" . "<br>";

echo "<table border='1'>";

for ($col = 1; $col <= 10; $col++) {
    echo "<tr>";

    for ($row = 1; $row <= 10; $row++) {
        echo "<td>";

        if ($col % 2 == 0 && $row % 2 == 0) {
            echo "(" . $result = $col * $row . ")" . "</td>";
        } elseif ($col % 2 != 0 && $row % 2 != 0) {
            echo "[" . $result = $col * $row . "]" . "</td>";
        } else {
            echo $result = $col * $row . "</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";

echo "<hr>";

echo "Задание 8" . "<br>";

$str = "123 456";
$arr = explode(" ", $str);
$length = count($arr) - 1;
$newArr = [];

while ($length >= 0) {
    $newArr[] = $arr[$length];
    $length--;
}

//var_dump($newArr);
$newStr = implode("%", $newArr);

echo "String = " . $str . "<br>";
echo "New string = " . $newStr;

echo "<hr>";

echo "Задание доп" . "<br>";

$data = [0, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 1, 4181, 6765, 10946, 17711];

//print_r($data);

sort($data);


$sortedData = [];

for ($k = 0; $k < count($data); $k++) {
    $sortedData[] = $data[$k];
}

var_dump($sortedData);