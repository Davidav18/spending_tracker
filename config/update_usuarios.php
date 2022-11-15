<?php
require_once('config.php');
$correo = $_POST ['correo'];
$contraseña = $_POST ['contraseña'];
$telefono = $_POST ['telefono'];
$nombre =  $_POST ['nombre'];
$id =  $_POST ['id'];




$query = "UPDATE usuarios SET correo = '$correo', password = '$contraseña', telefono = '$telefono', nombre = '$nombre'WHERE id = '$id'";
$conexion->query($query);

header("location:usuarios.php")
?>