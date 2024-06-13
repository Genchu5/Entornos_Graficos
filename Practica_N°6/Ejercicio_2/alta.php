
<?php

$Capitales = mysqli_connect("localhost" ,"root" );
$bd = mysqli_select_db ($Capitales, "capitales");

$ciuda = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tieneMetro'];

$contenido = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro, alta) VALUES ('$ciuda ', '$pais', '$habitantes', '$superficie', '$tieneMetro', 1 )";

$resultado = mysqli_query($Capitales, $contenido);

if($resultado) {
    echo "datos subidos correctamente";
}else{
    echo"error";
}

mysqli_close($Capitales);

?>

<br>
<a href="menu.html">volver al menu</a>


