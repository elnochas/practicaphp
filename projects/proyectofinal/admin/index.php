<?php
include_once("../config.php");

$query = "SELECT * FROM producto inner join fabricante on producto.codigo_fabricante = fabricante.codigo";
$result = mysqli_query($mysqli, $query);
// print_r($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mi tienda informatica </title>
</head>

<body>
<h3> Productos </h3>
	<?php
    echo "<table >";

	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['codigo']."</td>";
        echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['precio']."</td>";  
		echo "<td><img src=\"../".$res['imagen']."\"/></td>";
        
        echo "</tr>";
    }
    echo "</table>";

	mysqli_close($mysqli);
	?>

</body>
</html>