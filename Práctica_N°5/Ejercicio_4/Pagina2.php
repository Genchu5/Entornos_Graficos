<?php
session_start();
$_SESSION['visitas']++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <h1>Esta es la página N°2</h1>
    <p>Has visitado <?= $_SESSION['visitas'] ?> páginas durante esta sesión.</p>
    <a href="pagina1.php">Link a página 1</a>
    <br><br>
    <a href="pagina3.php">Link a página 3</a>
    <br><br>
    <a href="Pagina_principal.php">Link a página principal</a>
</body>
</html>