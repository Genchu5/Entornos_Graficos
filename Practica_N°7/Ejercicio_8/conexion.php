<?php
    function conexion(){
        $bd = new PDO("mysql:host=localhost;dbname=ej8", "root","");
        return $bd;
    }
?>