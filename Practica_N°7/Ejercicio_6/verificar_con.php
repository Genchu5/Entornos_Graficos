<?php
session_start();
if (isset($_SESSION['nombre'])){
    echo '<h1>Bienvenido '.$_SESSION['nombre'].'</h1>';
} else { echo '<h1>No tienes permisos.</h1>';
}
?>