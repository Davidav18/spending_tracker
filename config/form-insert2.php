<?php
require_once ('config.php');
$query = "SELECT * FROM gastos_categorias";
$result = $conexion->query($query);
require_once 'validate_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
<div class="container=fluid">
        <div class="row mt-5">
            <div class="col">
        <form action="insert_categorias.php" method="POST">
                <h1>gastos_categorias <a href="gast_cat.php" class="btn btn-dark" >regresar</a> </h1>
            </div>
        </div>
    <div class="row mt-5">       
        <div class="col-6">
            <label for="nombre"class="form-label">nombre</label>
            <input type="text" class="form-control"name="nombre" id="nombre">

            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
    </form>
</div>

</body>
</html>