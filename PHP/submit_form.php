<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Configurar el correo electrónico
$destinatario = 'nayeli28oliva@gmail.com'; // Cambia esto al correo al que deseas enviar los datos
$asunto = 'Nuevo mensaje de contacto desde el formulario';
$cuerpoMensaje = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\nMensaje: $mensaje";

// Enviar el correo electrónico
mail($destinatario, $asunto, $cuerpoMensaje);

// Redireccionar de vuelta a la página del formulario o a una página de confirmación
header('Location: index.html'); // Cambia esto a la URL adecuada
exit();
?>