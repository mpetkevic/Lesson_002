<?php
define("PI", 3.14);

if (defined("PI")) {
    echo "Constant exists";
} else {
    echo "Constant doesn't exists";
}
echo "<br>";
echo "Constant PI = " . PI;

//PI = 3; error can't change constant value;