<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio14</title>
</head>
<body>
	<form method="get">
      <div>
      <h2>Selecciona una nota entre 0 y 10.</h2>
        <input type="number" name="num" min="0" max="10" value="0"> 
        <input type="submit" name="lanzar">
    </div>

</form>
   



<?php
$nota=$_GET["num"];

if (isset($nota)){

if($nota>=0 && $nota<5){
    echo"Insuficiente";
}elseif($nota>=5 && $nota<6){
    echo"Suficiente";
}elseif($nota>=6 && $nota<7){
    echo"Bien";
}elseif($nota>=7 && $nota<9){
    echo"Notable";
}elseif($nota>=9 && $nota<=10){
    echo"Sobresaliente";
}else
echo"La nota introducida no es valida";
}
echo "<br>";
echo"<h1>Nota: $nota</h1>";





?>
</body>
</html>