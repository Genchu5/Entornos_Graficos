<?php 

    if(isset($_POST['boton'])){
        $usuario = $_POST['nombre'];
        setcookie("nombre", $_POST['nombre'], time() + (60 * 60 * 24 * 90));
        echo "Bienvenido ".$usuario;
    } else if(isset($_COOKIE['nombre'])){
        $usuario = $_COOKIE['nombre'];
        echo "Bienvenido ".$usuario;
    }

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form method="post">
        <label for="nombre">Ingrese usuario</label>
        <input type="text" name="nombre" required min=5>
        <button type="submit" name="boton">Enviar</button>
    </form>
</body>
</html>

