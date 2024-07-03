<?php
    function conexion(){
        $bd = new PDO("mysql:host=localhost;dbname=ej7", "root","");
        return $bd;
    }
?>