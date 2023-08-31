

<?php
if(isset($_POST['email'])) {
 
    // Información del correo
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = "sirkysanchezdelacruz81@gmail.com";  // Reemplaza con tu dirección de correo
 
    // Asunto del correo
    $titulo = "Nuevo mensaje desde el formulario de contacto";
 
    // Contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";
 
    // Encabezados adicionales
    $encabezados = "From: $nombre <$email>\n";
    $encabezados .= "Reply-To: $email\n";
 
    // Enviar el correo
    mail($para, $titulo, $contenido, $encabezados);
 
    // Redireccionar después de enviar el correo (opcional)
    header("Location: index.html");
}
?>

