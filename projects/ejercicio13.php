<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio13</title>
</head>
<body>
	<form method="get">
	<div>
        <p>Selecciona el numero de dados que deseas lanzar.
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

        <input type="submit" name="lanzar">
    </div>

</form>
   



<?php
$numero=$_GET["num"];

$dados = array();

for($i = 0; $i < $numero; $i++){
    $dados[$i] = rand(0, 5);
}
//array
$imagenes = array();
$imagenes["numero1"]= 'imagenes/dado1.png';
$imagenes["numero2"]= 'imagenes/dado2.png';
$imagenes["numero3"]= 'imagenes/dado3.png';
$imagenes["numero4"]= 'imagenes/dado4.png';
$imagenes["numero5"]= 'imagenes/dado5.jpg';
$imagenes["numero6"]= 'imagenes/dado6.png';

for($i = 0; $i < $numero; $i++){
   if ($dados[$i] == 0){
	echo "<img src=\"".$imagenes["numero1"]."\">";
   } 
   elseif ($dados[$i] == 1) { 
    echo "<img src=\"".$imagenes["numero2"]."\">";	
   }
   elseif ($dados[$i] == 2) {  
    echo "<img src=\"".$imagenes["numero3"]."\">";
}elseif ($dados[$i] == 3) { 
    echo "<img src=\"".$imagenes["numero4"]."\">";
}elseif ($dados[$i] == 4) {
    echo "<img src=\"".$imagenes["numero5"]."\">";
}elseif ($dados[$i] == 5) {
    echo "<img src=\"".$imagenes["numero6"]."\">";
}
}


?>
</body>
</html>