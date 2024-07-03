<?php include "conexion.php";
    $email = $_POST['email'];
    $bd = conexion();
    $bd = $bd->query("SELECT * FROM alumnos WHERE alumno_mail = '$email'");
    if ($bd->rowCount() > 0){
        $bd = $bd->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['nombre']=$bd['alumno_nombre'];
        header("location: Ej_6.php");
    }
?>