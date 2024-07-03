<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 7</title>
</head>
<body>
    <form method="POST" action="cargaCarro.php">
        <div>
        <label for="producto">Ingrese un producto(teclado/camara/monitor): </label>
        <input type="text" name="producto">
        </div>
        <div>
        <label for="cant">Ingrese la cantidad: </label>
        <input type="number" name="cant">
        </div>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <a href="verCarro.php">Ver tu carrito</a>
</body>
</html>