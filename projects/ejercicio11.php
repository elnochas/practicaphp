<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio11</title>
</head>
<body>
	<form method="get">
	<div>
        <p>Selecciona el numero de monedas que deseas lanzar.
        <select name="num">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          </select>
      </div>
      <div>
      <p>Selecciona el tipo de moneda.
      	<select name="tipomon" size="1">
         
          <option value="dolar">Dolares</option>
          <option value="euro">Euros</option>
      </select>
      </div>

      <div>

        <input type="submit" name="lanzar">
    </div>

</form>
   



<?php
$numero=$_GET["num"];
$moneda=$_GET["tipomon"];

$monedas = array();

for($i = 0; $i < $numero; $i++){
    $monedas[$i] = rand(0, 1);
}
$imagenes = array();
$imagenes["dolar"]["cara"]= 'imagenes/caradolar.jpg';
$imagenes["dolar"]["cruz"]= 'imagenes/cruzdolar.jpg';
$imagenes["euro"]["cara"]= 'imagenes/cara.png';
$imagenes["euro"]["cruz"]= 'imagenes/cruz.png';

for($i = 0; $i < $numero; $i++){
   if ($monedas[$i] == 0){
    echo "<h2>Cara</h2>";
	echo "<img src=\"".$imagenes[$moneda]["cara"]."\">";
   }else {
    echo "<h2>Cruz</h2>";
    echo "<img src=\"".$imagenes[$moneda]["cruz"]."\">";
	
   }
}



?>
</body>
</html>