<?php
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