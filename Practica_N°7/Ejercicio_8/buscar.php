<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Busqueda</title>
    <style>
        body {
            width: 70%; 
            margin: auto; 
            margin-top: 10%;
            text-align: left; 
            background-color: whitesmoke; 
            font-size: 1.2em;
        }
    </style>
</head>
</html>
<?php 
include_once "conexion.php";
    $cancion = $_POST['cancion'];
    $bd = conexion();
    $bd = $bd->query("SELECT * FROM buscador WHERE cancion = '$cancion'");
    if($bd->rowCount() > 0){
        echo '<h3>Resultado de búsqueda: </h3>';
        while ($cancion =  $bd->fetch(PDO::FETCH_ASSOC)){
            echo 'Titulo : '.$cancion['cancion'];
            echo '<br>';
            echo 'Autor : '.$cancion['autor'];
            echo '<br>';
            echo 'Año: '.$cancion['salida'];
            echo '<br>';
        }
    }else{
        echo '<h3>Canción no encontrada</h3>';
    }
?>

<a href="Ejercicio8.html">Volver al buscador</a> 