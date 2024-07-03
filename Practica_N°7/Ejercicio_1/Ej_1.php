
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php 

    if(isset($_POST['colorBoton'])){
        $estilo = $_POST['colores'];
        setcookie("colores", $_POST['colores'], time() + (60 * 60 * 24 * 90));
    } else if(isset($_COOKIE['colores'])){
        $estilo = $_COOKIE['colores'];
    } else {
        $estilo = "";
    
    }

    echo '<link rel="stylesheet" href="style'.$estilo.'.css" type="text/css">';

?>
    

<?php 
    


?>
</head>
<body>
    <section class="color">
        <form method="post" class="colorFormu">
            <label for="colores">Colores</label>
            <select name="colores">
                <option value="" selected>por defecto</option>
                <option value="negro">Negro</option>
            </select>
            <button type="submit" value="enviado" name="colorBoton">Enviar</button>
        </form>
    </section>
</body>
</html>