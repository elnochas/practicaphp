<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio3</title>
</head>
<body>
	<form method="get">
      <div>
      <h2>Selecciona una dia entre 1 y 7.</h2>
        <input type="number" name="num" min="1" max="7" value="1"> 
        <input type="submit" name="lanzar">
    </div>

</form>
   



<?php
$dias=$_GET["num"];

if (isset($dias)){
    switch ($dias) {
        case 1:
            echo "Lunes";
            break;
            case 2:
            echo "Martes";
            break;
            case 3:
            echo "Miercoles";
            break;
            case 4:
            echo "Jueves";
            break;
            case 5:
            echo "Viernes";
            break;
            case 6:
            echo "Sabado";
            break;
            case 7:
            echo "Domingo";
            break;
        

    }
}
echo "<br>";
echo"<h1>Dia: $dias</h1>";





?>
</body>
</html>