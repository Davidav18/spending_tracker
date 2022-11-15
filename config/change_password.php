<?php
require_once ('config.php');
$pass = $_POST['new_password'];
$id = $_POST['id'];

$query = "UPDATE usuarios  set password = '$pass'WHERE id= $id";
$result = $conexion->query($query);


    header("location:../index.php?message=succes_password");
?>