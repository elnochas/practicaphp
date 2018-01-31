<?php
echo "<table border=\"1\">";
$numero1 =8;
for($i = 1; $i <= 10; $i++){
    $resultado = $numero1 * $i;
    echo"<tr>";
    echo "<td>$numero1</td>";
    echo "<td> x </td>";
    echo "<td> $i </td>";
    echo "<td> = </td>";
    echo "<td>$resultado </td>";
    echo "</tr>";
}
?>