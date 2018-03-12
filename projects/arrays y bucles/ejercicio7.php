
<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio7</title>
</head>
<body>
	<form method="get">
      <div> 
      <h2>Introduce el numero de elementos</h2>
     
        <input type="number" name="num" min="1" max="100" value="1"> 
        <input type="submit" name="lanzar">
    </div>

</form>



<?php
$numero_elementos = $_GET["num"];


if (!isset($numero_elementos) || empty($numero_elementos)) die;
echo "<h2>El numero de elementos es: $numero_elementos</h2>";


// Inicializo el array de temperaturas
$temperatura = array();

$i = 0;
while ($i < $numero_elementos) {

    $temperatura[$i] = rand(1, 30);
    $i++;

}


echo "<h3>Temperaturas  de mayor a menor </h3>";
rsort($temperatura);
for ($i = 0; $i < count($temperatura); $i++) {
    echo "<h1>$temperatura[$i]</h1>";

}

echo "<h3>Temperaturas de menor a mayor</h3>";
sort($temperatura);
for ($i = 0; $i < count($temperatura); $i++) {
    echo "<h1>$temperatura[$i]</h1>";

}

?>

</body>
</html>