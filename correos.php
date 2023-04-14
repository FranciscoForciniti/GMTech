<?php
    $destinatario = 'franciscoforcii@gmail.com';
    // esto es al correo que resive el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "enviado desde la pagina de contacto de GMTech";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo"<script>alert('Correo enviado exitosamente')</script>";
    echo"<script>setTimeout(\"location.href='./index.html'\", 1000)</script>";
?>