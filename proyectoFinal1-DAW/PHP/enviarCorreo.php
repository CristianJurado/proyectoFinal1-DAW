<?php
$name = $_POST['nombre'];
$mail = $_POST['email'];
$message = $_POST['mensaje'];

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());


$para = 'cristianjurado14.cj@alumnos.alborfp.com';
$asunto = 'Mensaje de...';

mail($para, $asunto, $message);

header("Location:../HTML/index.html");
?>
