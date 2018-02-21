<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio08</title>
</head>
<body>
<form  method="post">
    <div>
        <label for="name">Introduce texto</label>
        <input type="text" name="mensaje">
        <button type="submit">Enviar mensaje</button>
    </div>
    </form>



<?php
if (!empty($_POST["mensaje"])) {
echo "Nombre: ".$_POST["mensaje"];

}



?>
</body>
</html>