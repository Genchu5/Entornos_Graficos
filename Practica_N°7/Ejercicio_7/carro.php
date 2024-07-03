<html>
    <head>
    <meta charset="UTF-8">
    </head>
</html>
<?php
include "conexion.php";
$bd = conexion();
$cantidad = $_POST['cant'];
$producto = $_POST['producto'];
$bd = $bd->query("SELECT * FROM carrito WHERE producto = '$producto'");

if ($bd->rowCount() > 0){
    if (!isset($_COOKIE['carrito'])){
        $bd = $bd->fetch(PDO::FETCH_ASSOC);
        $carro= $producto;
        $carro= $carro.' '.$cantidad;
        setcookie("carrito", $carro, time() + (60 * 60 * 24 * 90));
    }else{
        $carro = $_COOKIE['carrito'];
        $carro= $carro .','. $producto;
        $carro= $carro.' '.$cantidad;
        setcookie("carrito", $carro, time() + (60 * 60 * 24 * 90));
    }
}
header("location: Ej_7.php");
?>