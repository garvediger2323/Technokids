<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "gabovalverde318@gmail.com"; // Cambia a tu correo
    $subject = "Nuevo mensaje de contacto de " . $name;
    $body = "Nombre: $name\nCorreo Electrónico: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>