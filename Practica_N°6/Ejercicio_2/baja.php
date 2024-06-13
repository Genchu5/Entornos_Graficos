<?php

$Capitales = mysqli_connect("localhost" ,"root" );
$bd = mysqli_select_db ($Capitales, "capitales");

$id = $_POST['id'];

$contenido = "UPDATE ciudades SET alta=0 WHERE id = $id";

$resultado = mysqli_query($Capitales, $contenido);


if ($resultado) {
    echo "Se dio de baja correctamente";
}else{
    echo "Ocurrio un error";
}

mysqli_close($Capitales);

?>

<br>
<a href="menu.html">volver al menu</a>