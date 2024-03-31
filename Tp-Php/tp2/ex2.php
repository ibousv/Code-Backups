<?php

$r = range(rand(1, 10), 20);
echo "<table border=1>";
foreach ($r as $key => $value) {
    $ts[$key] = sin($value);
    echo "<tr>";
    foreach ($ts as $v) {
        echo "<td>$value</td>
        <td>$v</td>";
    }
    echo "
    </tr>";
}
echo "</table>";