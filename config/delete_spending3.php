<?php
require_once('config.php');
$id = $_GET['id'];

$query = "DELETE FROM usuarios WHERE id = '$id'";
$conexion->query($query);

header("Location:usuarios.php");

?>