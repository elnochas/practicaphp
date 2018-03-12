<?php
calcular_minimo(4);


function calcular_minimo($numero_elementos) 
{
   
    for($i=0;$i < $numero_elementos;$i++)
    {
    $minimo=$temperaturas[0];
    $temperaturas[$i]=rand(0,20);
    echo "Las temperaturas son";
    echo "<h4>$temperaturas[$i]</h4>";
    "<br>";
    if($temperaturas[$i]>$minimo)
    {
        $minimo=$temperaturas[$i];
    }
}

$minimo=$temperaturas[0];
foreach($temperaturas as $valor){
if($valor<$minimo){
    $minimo=$valor;
}
}
echo "<h3>El minimo es: $minimo</h3>";

}

?>