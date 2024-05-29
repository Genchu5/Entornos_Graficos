<?php
session_start();

// Comprobar si la variable de sesión 'visitas' está establecida
if (isset($_SESSION['visitas'])) {
    // Incrementar el contador de visitas
    $_SESSION['visitas']++;
} else {
    // Inicializar el contador de visitas
    $_SESSION['visitas'] = 1;   
}

if (isset($_POST['entrada'])) {
    $_SESSION["email"] = $_POST["email"];
    //"verifico contraseña en BD"
}

if (isset($_POST['cerrar'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']); // Redirigir para actualizar la página
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
</head>
<body>
    <?php if (isset($_SESSION["email"])): ?>
        <h3>Sesión iniciada como <?= ($_SESSION["email"]) ?></h3> 
        <form action="" method="POST">
            <input type="submit" value="Cerrar sesión" name="cerrar">
        </form>
        <h3>Has visitado <?= $_SESSION['visitas'] ?> páginas durante esta sesión.</h3>
        <br>
        <a href="pagina1.php">Link a página 1</a>
        <br><br>
        <a href="pagina2.php">Link a página 2</a>
        <br><br>
        <a href="pagina3.php">Link a página 3</a>
    <?php else: ?>
        <h1>Inicie Sesión</h1>
        <form action="" method="POST">
            <div>
                <input type="email" placeholder="Email" name="email" required>
            </div>    
            <div>
                <input type="password" placeholder="Contraseña" name="contraseña" required>
            </div>
            <br>
            <input class="btn mt-4 a_link" type="submit" value="Iniciar sesión" name="entrada">
        </form>
    <?php endif; ?>
</body>
</html>
