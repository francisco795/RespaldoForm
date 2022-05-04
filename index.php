<?php

$errores = "";
$enviado ="";


if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Por favor, ingresa tu nombre <br />';
    }

    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .='Ingresa un correo válido<br />';
        }
    }else{
        $errores .= 'Por favor, ingresa tu correo<br />';
    }

    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else{
        $errores .= 'Ingresa un mensaje<br />';
    }

    if(!$errores){
        $send_to = 'tucorreo@tuserver.com';
        $asunto = 'Envio de documentos';
        $mensaje_preparado = "DE: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: ". $mensaje;

        mail($send_to, $asunto, $mensaje_preparado);
    }
}

require 'index.view.php';

?>