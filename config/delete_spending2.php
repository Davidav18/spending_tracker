<?php
require_once('config.php');
$id = $_GET['id'];

$query = "DELETE FROM gastos_categorias WHERE id = '$id'";
$conexion->query($query);

header("Location:gast_cat.php");

?>