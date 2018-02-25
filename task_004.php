<?php
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