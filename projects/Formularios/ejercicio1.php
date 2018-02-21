<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio07</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="name">Introduce texto</label>
        <input type="text" name="mensaje">
        <button type="submit">Enviar mensaje</button>
    </div>
    </form>



<?php
if (!empty($_GET["mensaje"])) {
echo "Nombre: ".$_GET["mensaje"];

}



?>
</body>
</html>