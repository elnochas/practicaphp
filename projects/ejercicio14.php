<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio13</title>
</head>
<body>
	<form method="get">
      <div>
      <h2>Selecciona una nota entre 0 y 10.</h2>
        <input type="number" name="num" min="0" max="10"> 
        <input type="submit" name="lanzar">
    </div>

</form>
   



<?php
$nota=$_GET["num"];

if($nota<=5){
    echo"Insuficiente";
}elseif($nota<=6){
    echo"Suficiente";
}elseif($nota<=7){
    echo"Bien";
}elseif($nota<=9){
    echo"Notable";
}elseif($nota<=10){
    echo"Sobresaliente";
}





?>
</body>
</html>