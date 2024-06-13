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


mysqli_close($Capitales);

?>

<br>
<a href="menu.html">volver al menu</a>





