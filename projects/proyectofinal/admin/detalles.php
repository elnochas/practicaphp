<?php
include_once("../config.php");
$codigo=$_GET['codigo'];


$query="SELECT * FROM producto where codigo_fabricante=$codigo";
$result=mysqli_query($mysqli, $query);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mi tienda informatica </title>
</head>

<body>
<h3> Articulo</h3>

	<?php
    echo "<table width='80%' border=0>";
	echo"<tr bgcolor='yellow'>";
	echo "<td>Codigo</td>";
	echo "<td>Nombre</td>";
	echo "<td>Precio</td>";
	echo "<td>Descripcion</td>";
	echo "<td>Imagen</td>";

	

	echo"</tr>";
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['codigo']."</td>";
        echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td>".$res['descripcion']."</td>";   
		echo "<td><img src=\"../".$res['imagen']."\"/></td>";
		
        
        echo "</tr>";
    }
    echo "</table>";

	mysqli_close($mysqli);
	?>