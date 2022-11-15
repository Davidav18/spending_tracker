<?php
require_once('config.php');
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria']; 
$descripcion = $_POST['descripcion'];
$id = $_POST['id'];

$query = "UPDATE gastos set cantidad = '$cantidad', categoria = '$categoria', descripcion = '$descripcion'WHERE id = '$id' ";
$conexion->query($query);

header("Location: index.php");

?>