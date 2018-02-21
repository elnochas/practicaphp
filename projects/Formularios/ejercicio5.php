<?php
$title = "Lanzar el dado"
?>



<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>monedas</title>
</head>
<body>
<h1><?php echo $title; ?></h1>




<?php
$dado = rand(0,5);
if ($dado == 0)  {  
	echo "<h2>Numero 1</h2>";
	echo "<img src=\"imagenes/dado1.png\">";  
} 
elseif ($dado == 1)
{  
	echo"<h2>Numero 2</h2>";
	echo "<img src=\"imagenes/dado2.png\">";  
} 
elseif($dado==2){
    echo "<h2>Numero 3</h2>";
	echo "<img src=\"imagenes/dado3.png\">";  

}
elseif($dado==3){
    echo "<h2>Numero 4</h2>";
	echo "<img src=\"imagenes/dado4.png\">";  
}
elseif($dado==4){
    echo "<h2>Numero 5</h2>";
	echo "<img src=\"imagenes/dado5.jpg\">";  
}
elseif($dado==5){
    echo "<h2>Numero 6</h2>";
	echo "<img src=\"imagenes/dado6.png\">";  
}
?>
</body>
</html>