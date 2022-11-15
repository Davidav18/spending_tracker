<?php
require_once ('config.php');
$id = $_GET['id'];
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);

$query2 = "SELECT * FROM usuarios WHERE id = $id";
$result2 =$conexion->query($query2);
$record = $result2->fetch_assoc();
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
                <h1>usuarios <a href="usuarios.php" class="btn btn-dark" >regresar</a> </h1>
            </div>
        </div>
        <form action="update_usuarios.php" method="POST">
    <div class="row mt-5">       
        <div class="col-6">
            <label for="correo"class="form-label">correo</label>
            <input type="text" class="form-control"name="correo" id="correo" value="<?php  echo $record['correo'] ?>">
        </div>
        <div class="col-12 mb-3">
            <label for="contraseña"class="form-label">password</label>
            <input type="text" class="form-control"name="contraseña" id="contraseña"value="<?php  echo $record['password'] ?>">
        </div>
        <div class="col-12 mb-3">
            <label for="telefono"class="form-label">telefono</label>
            <input type="text" class="form-control"name="telefono" id="telefono"value="<?php  echo $record['telefono'] ?>">
        </div>
        <div class="col-12 mb-3">
            <label for="nombre"class="form-label">nombre</label>
            <input type="text" class="form-control"name="nombre" id="nombre"value="<?php  echo $record['nombre'] ?>">
        </div>
        <div class="col-12 mb-3">
            <label for="status"class="form-label">status</label>
            <input type="text" class="form-control"name="nombre" id="status"value="<?php  echo $record['status'] ?>">
        </div>
        <div class="col-12">
            <input type="hidden" name="id" value="<?php  echo $id;?>">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
    </form>
</div>

</body>
</html>