<?php
require_once('config.php');
$correo = $_POST ['correo'];
$contraseña = $_POST ['contraseña'];
$telefono = $_POST ['telefono'];
$nombre =  $_POST ['nombre'];
$status =  $_POST ['status'];



$query = "INSERT INTO usuarios (correo, password, telefono, nombre, status) VALUES ('$correo','$contraseña','$telefono','$nombre','$status')";
$conexion->query($query);

header("location:usuarios.php")
?>