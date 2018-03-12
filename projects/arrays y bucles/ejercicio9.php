<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio9</title>
</head>
<body>
<?php


$alumnos=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
echo "<h2>ORDEN POR CLAVE</h2>";
ksort($alumnos);
foreach ($alumnos as $clave => $valor) {
    echo "<h2>La capital de $clave es: $valor</h2>";
}

?>
</body>
</html>