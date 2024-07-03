<?php
    session_start();
if (isset($_SESSION['usuario'])){
    echo "USUARIO: " . $_SESSION['usuario'];
    echo "<br>";
    echo "CONTRASEÑA: " . $_SESSION['psw'];
}
?>