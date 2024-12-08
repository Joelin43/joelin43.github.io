<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $pais = htmlspecialchars($_POST['paises']);
    $tipo = htmlspecialchars($_POST['Env']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Configuración del correo
    $to = "joelrovira202@gmail.com"; // Cambia al correo donde deseas recibir los mensajes
    $subject = "Nuevo mensaje desde tu portafolio";
    $body = "
        Nombre: $nombre\n
        Correo: $email\n
        País: $pais\n
        Tipo de envío: $tipo\n
        Mensaje:\n
        $mensaje
    ";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "¡Correo enviado correctamente!";
    } else {
        echo "Hubo un error al enviar el correo. Intenta nuevamente.";
    }
}
?>