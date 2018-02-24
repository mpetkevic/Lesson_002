<?php
echo "Задание 1" . "<br>";
$name = "Miroslav";
$age = 31;

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

if(defined("PI")) {
    echo "Constant exists";
} else {
    echo "Constant doesn't exists";
}
echo "<br>";
echo "Constant PI = " . PI;

echo "<hr>";

echo "Задание 4" . "<br>";

$newAge = mt_rand(0,89);

echo "Возраст = " . $newAge . "<br>";

if ($newAge >= 18 && $newAge <= 65) {
    echo "Вам еще работать и работать";
} elseif ($newAge < 18 && $newAge > 0) {
    echo "Вам ещё рано работать";
} elseif ($newAge > 65) {
    echo "Вам пора на пенсию";
} else {
    echo "Неизвестный возраст";
}

echo "<hr>";

echo "Задание 5" . "<br>";

$day = mt_rand(0,8);

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
