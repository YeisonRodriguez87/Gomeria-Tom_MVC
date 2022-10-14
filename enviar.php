<?php
$input_nombre = $_POST['nombre'];
$input_apellido = $_POST['apellido'];
$input_correo = $_POST['correo'];
$input_mensaje = $_POST['mensaje'];


$cuerpo_mail = "Nombre: " . $input_nombre . "\r\n" .
    "Apellido: " . $input_apellido . "\r\n" .
    "Correo Electrónico: " . $input_correo . "\r\n" .
    "Mensaje: " . $input_mensaje;
    

mail("rodriguezyj.rodriguez@gmail.com", "Mensaje enviado desde Gomería Tom", $cuerpo_mail);

header("Location: contacto.php?e=ok");
?>
