<?php
require_once 'validate_session.php'
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<meta charset="UTF-8">
<TItle>Menu de navegación con listas</TItle>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

    <?php include 'session_paragraph.php'; ?>
    <ul class="menu">
        <li ><a href="index.php">GASTOS</a> </li>     
        <li ><a href="gast_cat.php">GASTOS_CATEGORIAS</a> </li>
        <li ><a href="usuarios.php">USUARIOS</a> </li>
    </ul>
   
</body>
</html>