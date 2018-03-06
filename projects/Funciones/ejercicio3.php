<?php
$listaA=inicializar_array(10,1,20);
echo "<pre>";
print_r($listaA);
echo "<pre>";




$media=calcular_media($listaA);
echo"<h1>La media es: $media</h1>";



function inicializar_array($numero_elementos,$min,$max){
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



?>