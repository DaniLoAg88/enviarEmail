<?php
if(!empty($_REQUEST["nombre"]) && !empty($_REQUEST["email"])){
    // Tras validar los campos....
    $nombre = $_REQUEST["nombre"];
    $destinatario = $_REQUEST["email"];
    $remitente = "dani@dani.cursoceat.es";
    $asunto = "Registro online";
    $mensaje = "Hola $nombre. <br><br>Se ha registrado correctamente en nuestro servicio de banca online. <br>En breve un agente se comunicará para 
    realizar una videoconferencia y confirmar sus datos.
    <br><br>
    ¡Gracias por confiar en nosotros!";

    // PLANTILLA
    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type: text/html; charset=UTF-8\r\n";
    $cabeceras .= "Content-Transfer-Encoding: 8bit\r\n";
    $cabeceras .= "From: $remitente\r\n";
    Try{
        @mail($destinatario, $asunto, $mensaje, $cabeceras);
        echo "Se ha enviado un correo electrónico a $destinatario para confirmar sus datos de registro.";
    }catch (Throwable $e) {
        echo "Se ha producido un error. " . $e->getMessage();
    }
}else{
    header("Location: index.php?mensaje=Los datos son obligatorios");
}