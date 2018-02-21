<?php
$title = "Lanzar moneda al aire"
?>



<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>monedas</title>
</head>
<body>
<h1><?php echo $title; ?></h1>




<?php
$moneda = rand(0, 1);
if ($moneda == 0)  
{  
	echo "<h2>Cara</h2>";
	echo "<img src=\"cara.png\">";  
} else  
{  
	echo"<h2>Cruz</h2>";
	echo "<img src=\"cruz.png\">";  
}
?>
</body>
</html>