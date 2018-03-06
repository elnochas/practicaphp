<?php

include('config.php');
$email = "usuario@usuario.es";
$password = md5("usuario");

$result = mysqli_query($mysqli, "SELECT * FROM usuario");

while($res = mysqli_fetch_array($result)) {

echo "<h2>Id:".$res['id']."</h2>";
echo "<h2>Email:".$res['email']."</h2>";
echo "<h2>Password:".$res['password']."</h2>";
echo "<h2>Nombre:".$res['nombre']."</h2>";

}

mysqli_close($mysqli);

?>

