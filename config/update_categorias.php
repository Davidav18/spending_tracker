<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$id = $_POST['id'];


$query = "UPDATE gastos_categorias set nombre = '$nombre' WHERE id= '$id'";
$conexion->query($query);

header("Location:gast_cat.php");

?>