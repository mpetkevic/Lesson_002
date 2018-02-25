<?php
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