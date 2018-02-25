<?php
$bmw = ["name" => "X5", "speed" => 120, "doors" => 4, "year" => 2015];
$toyota = ["name" => "Corolla", "speed" => 100, "doors" => 4, "year" => 2017];
$opel = ["name" => "Astra", "speed" => 130, "doors" => 4, "year" => 2012];
$cars = [];
$cars["BMW"] = $bmw;
$cars["TOYOTA"] = $toyota;
$cars["OPEL"] = $opel;

foreach ($cars as $key => $item) {
    echo "Car " . $key . "<br>";
    echo "name: " . $item["name"] . " speed: " . $item["speed"] . " doors: " . $item["doors"] . " year: " . $item["year"] . "<br>";
}