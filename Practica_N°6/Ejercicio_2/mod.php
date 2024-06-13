
<?php

$Capitales = mysqli_connect("localhost" ,"root" );
$bd = mysqli_select_db ($Capitales, "capitales");


$contenido = "SELECT * FROM ciudades";
$resultado = mysqli_query($Capitales, $contenido);

$id = $_POST['id'];
$bandera = 0;

if ($resultado){
    while($fila = mysqli_fetch_assoc($resultado) ){
        if ($fila['id'] == $id){
            $bandera = 1;
            echo $bandera;
        }
    }
}else{
    echo "error";
}

if ($bandera == 1) {
    

    $ciuda = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = $_POST['tieneMetro'];

    $contenido = "UPDATE ciudades SET ciudad='$ciuda', pais='$pais', habitantes='$habitantes', superficie='$superficie', tieneMetro='$tieneMetro' WHERE id = $id";

    $resultado = mysqli_query($Capitales, $contenido);

    if($resultado) {
        echo "datos subidos correctamente";
    }else{
        echo"error";
    }
}
mysqli_close($Capitales);

?>

<br>
<a href="menu.html">volver al menu</a>

?>