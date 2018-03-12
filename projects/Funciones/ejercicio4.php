<?php
calcular_maximo(8);


function calcular_maximo($numero_elementos) 
{
    $maximo=$temperaturas[0];
    for($i=0;$i < $numero_elementos;$i++)
    {
    $temperaturas[$i]=rand(1,100);
    echo "Las temperaturas son";
    echo "<h4>$temperaturas[$i]</h4>";
    "<br>";
    if($temperaturas[$i]>$maximo)
    {
    	$maximo=$temperaturas[$i];
    }
}
echo "<h3>La temperatura maxima es: $maximo</h3>";

}
?>