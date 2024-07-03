<!DOCTYPE html>
<html lang="es">
<head>
    <?php 

    if(isset($_POST['boton'])){
        $noticia = $_POST['noticia'];
       setcookie("noticia", $_POST['noticia'], time() + 60 * 60 * 24 * 150);
    } else if (isset($_COOKIE['noticia'])){
        $noticia = $_COOKIE['noticia'];
    } 
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Qué noticia desea ver?</h1>
    <form method="post">
        <input type="radio" value="politica" name="noticia">
        <label for="noticia"> Política</label>

        <input type="radio" value="economica" name="noticia">
        <label for="noticia"> Económica</label>

        <input type="radio" value="deportiva" name="noticia">
        <label for="noticia"> Deporte</label>
        <button type="submit" name="boton">Enviar</button>
    </form>

    <section>
    <br>

    <?php

    if(isset($noticia)){
        if($noticia == "politica"){
        ?>
            <div style="height: 100px;">
            <h3>Perón ha vuelto!!</h3>
            <p>Lo que leiste, volvió el más peronista de todos, el mismisimo Perón.</p>
            </div>
    
        <?php
        } else if ($noticia == "economica"){
            ?>
                <div style="height: 100px;">
                    <h3>El peso argentino mas confiable que el dolar? </h3>
                    <p>El peso argentino paso a ser la moneda mas fiable a nivel mundial.</p>
                </div>
        <?php
        } else {
            ?>
                <div style="height: 100px;">
                    <h3>Argentina gana el partido </h3>
                    <p>Con gol de Lionel Messi Argentina se pociciona en el top de la lista </p>
                </div>
        <?php
        }
    } else {
        ?>
        <div style="height: 100px;">
            <h3>La policia esta comprada ?</h3>
            <p>Un informante incognito obtuvo convercasiones entre representantes de la policia y los altos mandos de la mafia</p>
        </div>

        <div style="height: 100px;">
                    <h3>El peso argentino mas confiable que el dolar?</h3>
                    <p>El peso argentino paso a ser la moneda mas fiable a nivel mundial.</p>
        </div>

        <div style="height: 100px;">
                    <h3>Argentina gana el partido</h3>
                    <p>Con gol de Lionel Messi Argentina se pociciona en el top de la lista  </p>
        </div>

    <?php
    }
    ?>

</section>


    <a href="borrar.php">BORRAR INFORMACION PERSONALIZADA DE BUSQUEDA</a>
</body>
</html>