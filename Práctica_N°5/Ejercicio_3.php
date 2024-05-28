<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <style>
        .contenedor{
            display:inline-block;
        }
        .form-styles{
            display:inline-block;
            width:100%;
            height:200px;
            justify-content:left;
            align:top;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    
    <form  method="POST" action="">
        <h2>Datos tuyos</h2>
        <div class="form-group">
        <input type="text"  placeholder="Nombre tuyo" name="nombre1" required="">
        </div>	
        <h2>Datos de amigo a recomendar</h2>
        <div class="form-group">
        <input type="text"  placeholder="Nombre amigo" name="nombre2" required="">
        </div>	

        <div >
        <input type="email"  placeholder="Email amigo" name="email" required="">
        </div>

        <div class="contenedor" >
        <textarea class="form-styles" rows="5" cols="50"placeholder="Escribe una recomendación" name="mensaje" required="" value="Te recomiendo esta pagina porque "></textarea>
        </div>
        <div>
        <input  type="submit" value="Enviar recomendación" name="entrada">
        </div>

    </form>
    <p>El ejemplo va a estar hecho para que se ingrese el nombre del usuario actual, pero eso no deberia ser necesario y se insertaria directamente con la sesion del usuario en cuestion</p>
</body>
</html>
<?php
    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['entrada'])) {
        $nombre1 = ($_POST['nombre1']);
        $nombre2 = ($_POST['nombre2']);
        
        $email = ($_POST['email']);
        $mensaje = ($_POST['mensaje']);
        

        

        //Cuerpo del mail
        
        $body ='
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificación de email</title>
        <style>
            body, html {
                margin: 0;
                padding: 0;
                height: 100%;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-color: whitesmoke;
            }

            h5{
                font-size: 20px;
                font-weight: lighter;
                margin-bottom: 100px;
            }
            
        </style>
        </head>
        <body>
        
            <h3>Hola, ' . $nombre2 . '!</h3>
            <h5>Tu amigo, ' . $nombre1 . ', te recomienda usar la página de shoppingDB</h5>
            <br>
            <h5> ' . $mensaje . ' </h5>

        </body>
        </html>
        ';

        $asunto = "Mensaje enviado por formulario de contacto";
        $mail = new PHPMailer(true);

        try {
        // Configuración del servidor SMTP

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'shopping.db.2024@gmail.com'; // Tu correo de Gmail
        $mail->Password = 'hrzt dymf xxnh dmne'; // Tu contraseña de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // Puerto SMTP para TLS

        // Configuración del correo
        $mail->isHTML(true);
        $mail->setFrom('shoppingDB@gmail.com','ShoppingDB');
        $mail->addAddress("$email", "$nombre1");
        $mail->Subject = "$asunto";
        $mail->Body = $body;

        // Enviar el correo
        $enviado = ($mail->send());
        if (!$enviado) {
                echo 'Error al enviar el correo.';
        }
        } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
    }
    ?>


