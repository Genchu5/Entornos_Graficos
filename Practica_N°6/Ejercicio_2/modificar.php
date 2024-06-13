<?php

$Capitales = mysqli_connect("localhost" ,"root" );
$bd = mysqli_select_db ($Capitales, "capitales");

$contenido = "SELECT * FROM ciudades";
$resultado = mysqli_query($Capitales, $contenido);

if ($resultado){
    while($fila = mysqli_fetch_assoc($resultado)){
        if ($fila['alta'] == 1)
            echo "ID: ".$fila['id']. " Ciudad: ". $fila['ciudad']." Pais: ". $fila['pais']." Habitantes: ". $fila['habitantes']. " Superficie: ". $fila['superficie']. " Tiene metros: ". $fila['tieneMetro']. "<br>";
    }
}else{
    echo "error";
}

?>

<br>
<form action="mod.php" method="POST">
    <label>ingrese una id para modificar</label>
    <input name="id" type="number">
    <br>
    <br>
    <br>
    <br>
    <laberl>recuerde completar todas las celdas</label>
    <label>ingrese la ciudad</label>
    <input name="ciudad" type="text">
    <br>
    <br>
    <label>ingrese el pais</label>
    <input name="pais" type="text">
    <br>
    <br>
    <label>ingrese los habitantes</label>
    <input name="habitantes" type="number">
    <br>
    <br>
    <label>ingrese la superficie</label>
    <input name="superficie" type="number">
    <br>
    <br>
    <label>ingrese si tiene metro </label>
    <input name="tieneMetro" type="number">
    <br>
    <br>
    <input type="submit" value="Enviar">
    </form>

    <input type="submit" value="Enviar">
</form>


<a href="menu.html">volver al menu</a>
