<?php

$to = "abieljag@email.com";
$titulo = "Mail de Prueba";
$subject = $_POST['txtusuario'];
$correo = $_POST['txtmail'];
$message = $_POST['txtmsj'];

mail($to, $titulo, $subject, $correo $message);

?>
