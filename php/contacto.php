<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


echo $nombre. " ha dicho:<br/>".$mensaje;

mail('matthgamez@gmail.com', $asunto, $mensaje);
?>