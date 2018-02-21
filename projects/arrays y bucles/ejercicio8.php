<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio8</title>
</head>
<body>
<?php
$alumnos=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
echo "<h2>ORDEN ASCENDENTE</h2>";
asort($alumnos);
foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}

$alumnos=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
echo "<h2>ORDEN DESCENDENTE</h2>";
arsort($alumnos);
foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}
$alumnos=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
echo "<h2>ORDEN POR CLAVE</h2>";
ksort($alumnos);
foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}
$alumnos=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
echo "<h2>ORDEN POR CLAVE EN ORDEN INVERSO</h2>";
krsort($alumnos);
foreach ($alumnos as $clave => $valor) {
    echo "<h2>$clave = $valor</h2>";
}
?>
</body>
</html>