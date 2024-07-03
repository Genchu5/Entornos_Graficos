<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 8</title>
    <style>
        #buscador {
            width: 50%; 
            margin: auto; 
            margin-top: 10%;
            text-align: left; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 10px; 
            background-color: #f9f9f9; 
            font-size: 1.2em;

        }
    </style>
</head>
<body>
    <section id="buscador">
        <form action="buscador.php" method="post">
            <div>
            <label for="cancion">Ingresa la canción a buscar</label>
            <input type="text" name="cancion" placeholder="Ej: Lunita de Tucuman">
            </div>
            <button type="submit" name="buscar">Buscar</button>
        </form>
    </section>
</body>
</html>