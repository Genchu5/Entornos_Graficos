<?php
include_once "conexion.php";

if (!isset($_COOKIE['carrito'])){
    echo "<h1>Tu carro está vacío</h1>";
}else{
    $total = 0;
    $carro = $_COOKIE['carrito'];
    $carro = explode(',',$carro);
    foreach($carro as $producto){
        $bd = conexion();
        $producto = explode(' ',$producto);
        $bd = $bd->query("SELECT * FROM carrito WHERE producto = '$producto[0]'");
        $bd = $bd->fetch(PDO::FETCH_ASSOC);
        echo "Producto: " . $producto[0]."  ";
        echo "Cantidad: " . $producto[1]."  ";
        echo "Precio: " . $bd['precio']."  ";
        $total += $producto[1]*$bd['precio'];
        echo "<br>";
    }
    echo "Total: " . $total;
    echo "<br>";
    }
?>

<html>
    <body>
    <a href="Ejercicio7.html">Volver al inicio</a>
    </body>
    </html>