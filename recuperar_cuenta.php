<?php
require_once 'cdn.html';
require_once 'cnn.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];

    $sql = "SELECT * FROM registro WHERE CorreoElectronico = :correo";
    $stmt = $cnnPDO->prepare($sql);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($registro) {
        $nuevaContrasena = generarContrasenaAleatoria();

        $sql = "UPDATE login SET Contrasena = :contrasena WHERE ID_Registro = :id";
        $stmt = $cnnPDO->prepare($sql);
        $stmt->bindParam(':contrasena', $nuevaContrasena);
        $stmt->bindParam(':id', $registro['ID']);
        $stmt->execute();

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'alo_rm28@outlook.es';
            $mail->Password = '2219Jaal';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('alo_rm28@outlook.es', 'YABtravel');
            $mail->addAddress($correo, $registro['Nombre']);

            $mail->Subject = 'Recuperación de contraseña';

            // Agregar frontend al cuerpo del mensaje
            $mail->isHTML(true);
            $mail->Body = '
                <html>
                <head>
                    <title>Recuperación de contraseña</title>
                    <style>
                        .card {
                            background-color: #f9f9f9;
                            border-radius: 5px;
                            padding: 20px;
                            margin-bottom: 20px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }
                        h1 {
                            color: #333;
                            font-size: 24px;
                            margin-bottom: 10px;
                        }
                        p {
                            color: #666;
                            font-size: 16px;
                            margin-bottom: 5px;
                        }
                        .logo {
                            max-width: 100px;
                            display: block;
                            margin-bottom: 10px;
                        }
                    </style>
                </head>
                <body>
                    <div class="card">
                        <img src="img/log.png" alt="Logo" class="logo">
                        <h1>Recuperación de contraseña</h1>
                        <p>Hola ' . $registro['Nombre'] . ',</p>
                        <p>Tu nueva contraseña es: <strong>' . $nuevaContrasena . '</strong></p>
                        <p>Gracias por utilizar nuestro servicio.</p>
                    </div>
                </body>
                </html>
            ';

            $mail->send();

            header("location:login.php");
        } catch (Exception $e) {
            echo 'Ocurrió un error al enviar el correo: ' . $mail->ErrorInfo;
        }
    } else {
       
        echo 'El correo electrónico no está registrado.';
    }
}

function generarContrasenaAleatoria($longitud = 8) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $contrasena = '';
    for ($i = 0; $i < $longitud; $i++) {
        $index = rand(0, strlen($caracteres) - 1);
        $contrasena .= $caracteres[$index];
    }
    return $contrasena;
}
?>
