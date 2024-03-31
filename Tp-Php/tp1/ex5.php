<?php
echo "<table border=1>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>3</td>" . "<td>X</td>" . "<td>" . $i . "</td>" .
        "<td>=</td>" . "<td>" . 3 * $i . "</td>";
    echo "</tr>";
}
echo "</table>";
