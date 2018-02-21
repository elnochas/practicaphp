<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio3</title>
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
for ($i=0;$i < $numero_elementos; $i++){
    $suma=$suma + $temperaturas[$i];
}
$media=$suma/$numero_elementos;

echo "<pre>";
print_r($temperaturas);
echo "<pre>";

//calculo el maximo
$maximo=$temperaturas[0];
for($i=1;$i<$numero_elementos;$i++){
if($temperaturas[$i]>$maximo){
    $maximo=$temperaturas[$i];
}
}
echo "<h3>MAXIMO: $maximo</h3>";

//calculo el minimo
$minimo=$temperaturas[0];
for($i=1;$i<$numero_elementos;$i++){
if($temperaturas[$i]<$minimo){
    $minimo=$temperaturas[$i];
}
}
echo "<h3>MINIMO: $minimo</h3>";


?>
</body>
</html>