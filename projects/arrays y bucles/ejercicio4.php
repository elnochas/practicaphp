<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio4</title>
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
$numero_elementos=$_GET["num"];
echo"<h1>$numero_elementos</h1>";

$temperaturas = array();
//array temperaturas

//inicio array temperaturas.
for ($i=0;$i < $numero_elementos; $i++){
    $temperaturas[$i]=rand(1,30);
}

//calculo media
$suma=0;
foreach ($temperaturas as $valor){
    $suma=$suma + $valor;
}
$media=$suma/$numero_elementos;

echo "<pre>";
print_r($temperaturas);
echo "<pre>";

//calculo el maximo
$maximo=$temperaturas[0];
foreach($temperaturas as $valor){
if($valor>$maximo){
    $maximo=$valor;
}
}
echo "<h3>MAXIMO: $maximo</h3>";

//calculo el minimo
$minimo=$temperaturas[0];
foreach($temperaturas as $valor){
if($valor<$minimo){
    $minimo=$valor;
}
}
echo "<h3>Minimo: $minimo</h3>";


?>
</body>
</html>