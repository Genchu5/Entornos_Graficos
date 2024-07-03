<?php
    function conexion(){
        $bd = new PDO("mysql:host=localhost;dbname=ej6", "root","");
        return $bd;
    }
?>