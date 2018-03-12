

<?php


//1


//llamar funci0on
imprimir_tabla_multiplicar (8);
//funcion
function imprimir_tabla_multiplicar ($numero){
   
    echo "<table border=\"1\">";
    for($i = 0; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo"<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td>$resultado </td>";
        echo "</tr>";
    }
}


//2

$listaA=inicializar_array(10,1,20);
echo "<pre>";
print_r($listaA);
echo "<pre>";

$listaB=inicializar_array(30,-10,-20);
echo "<pre>";
print_r($listaB);


function inicializar_array($numero_elementos,$min,$max){
$lista=array();
for($i=0;$i<$numero_elementos;$i++){
    $lista[$i]= rand($min,$max);
}
return $lista;
}

//3
$listaA=inicializar_arra(10,1,20);
echo "<pre>";
print_r($listaA);
echo "<pre>";


$media=calcular_media($listaA);
echo"<h1>La media es: $media</h1>";



function inicializar_arra($numero_elementos,$min,$max){
$lista=array();
for($i=0;$i<$numero_elementos;$i++){
    $lista[$i]= rand($min,$max);
}
return $lista;
}

function calcular_media($lista) {
    $suma=0;
    $numero_elementos=count($lista);
    for($i=0;$i < $numero_elementos;$i++){
    $suma= $suma+$lista[$i];
}
$media=$suma/$numero_elementos;
return $media;
}

//4
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

//5
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

//6
$listaA=inicializar_arr(10,1,9);


function inicializar_arr($numero_elementos,$min,$max){
$lista=array();
for($i=0;$i<$numero_elementos;$i++){
    $lista[$i]= rand($min,$max);
    echo "<table border=\"1\">";
        echo"<tr>";
        echo "<td>$i</td>";
        echo "<td> => </td>";
        echo "<td>$lista[$i]</td>";
        echo "</tr>";
}

    
}



?>