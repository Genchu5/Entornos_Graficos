<?php 

    if (isset($_COOKIE['cont'])){ 
        $sesion = $_COOKIE['cont'];
        $sesion++;
        setcookie("cont", $sesion, time() + 60 * 60 * 24 * 90);
        echo 'Has ingresado a la página '.$sesion.' veces.';

    }else{

        echo "Bienvenido usuario";
        setcookie("cont", 1, time() + 60 * 60 * 24 * 90);
        
    }

?>