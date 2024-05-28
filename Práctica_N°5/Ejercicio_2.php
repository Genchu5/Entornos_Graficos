<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <style>
        .form-styles{
            padding-right:40px;
            padding-bottom:100px;
            
        }
    </style>
</head>
<body>
    <form  method="POST" action="">

        <div class="form-group">
        <input type="text"  placeholder="Nombre" name="nombre" required="">
        </div>	

        <div >
        <input type="text"  placeholder="Apellido" name="apellido" required="">
        </div>

        <div >
        <input type="email"  placeholder="Email" name="email" required="">
        </div>

        <div >
        <input type="text" class="form-styles" placeholder="Escribe un mensaje" name="mensaje" required="">
        </div>

        <input  type="submit" value="Enviar email" name="entrada">


    </form>
    <p>El ejemplo va a estar hecho para que se envie al mail que se le ingrese, normalmente le deberia llegar al dueño de la pagina del formulario. Esta hecho asi, asi se verifica el envio del mail</p>
</body>
</html>
<?php
    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['entrada'])) {
        $nombre = ($_POST['nombre']);
        $apellido = ($_POST['apellido']);
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
        
            <h5>Hola, mi nombre es ' . $nombre . ' ' . $apellido . ' , y la consulta que me gustaria hacerles es:</h5>
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
        $mail->addAddress("$email", "$nombre $apellido");
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


