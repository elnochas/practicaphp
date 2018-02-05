
<?php
$title = "Tablas de multiplicar"
?>



<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>tablas</title>
</head>
<body>
<h2><?php echo $title; ?></h2>


<?php


for($numero1 = 1; $numero1 <= 10; $numero1++){
    echo "<table border=\"1\">";
    echo "<br>";
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
echo "</table>";
}
?>
</body>
</html>