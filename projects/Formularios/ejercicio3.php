<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio09</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="name">Introduce un numero entre 1 y 10</label>
        <input type="text" name="numero1">
        <button type="submit">Enviar numero</button>
    </div>
    </form>



<?php
if (!empty($_GET["numero1"])) {
    echo "Numero: ".$_GET["numero1"];

}

$numero=$_GET["numero1"];
echo "<table border=\"1\">";
for($i = 1; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo"<tr>";
    echo "<td>$numero</td>";
    echo "<td> x </td>";
    echo "<td> $i </td>";
    echo "<td> = </td>";
    echo "<td>$resultado </td>";
    echo "</tr>";
}




?>
</body>
</html>