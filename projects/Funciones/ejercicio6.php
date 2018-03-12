<?php
$listaA=inicializar_array(10,1,9);


function inicializar_array($numero_elementos,$min,$max){
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