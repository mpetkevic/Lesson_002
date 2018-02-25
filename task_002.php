<?php
$total = 80;
echo $total . " рисунков" . "<br>";
$flomas = 23;
echo $flomas . " выполнены фломастерами" . "<br>";
$pencil = 40;
echo $pencil . " выполнены карандашами" . "<br>";
$paints = $total - $flomas - $pencil;
echo $paints . " выполнены красками" . "<br>";