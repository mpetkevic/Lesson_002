<?php
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