<?php
require_once('config.php');
$nombre = $_POST['nombre'];



$query = "INSERT INTO gastos_categorias (nombre) VALUES ('$nombre')";
$conexion->query($query);

header("Location:gast_cat.php");

?>