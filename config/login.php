<?php
require_once ('config.php');
$email= $_POST['email'];
$password= $_POST['password'];

$query = "SELECT * FROM  usuarios WHERE correo = '$email'AND password = '$password'AND status = 1 ";
$result = $conexion->query($query);

if($result->num_rows > 0){
  session_start();
  $_SESSION['user'] = $email;
    header("location:menu.php");
    }else{
    header("location:../index.php");
    }
    ?>