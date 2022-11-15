<?php
require_once ('config.php');
$id = $_GET['id'];
$query = "SELECT * FROM gastos_categorias";
$result = $conexion->query($query);

$query2 = "SELECT * FROM gastos_categorias WHERE id = $id";
$result2 =$conexion->query($query2);
$record = $result2->fetch_assoc();


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
        <form action="update_categorias.php" method="POST">
                <h1>gastos_categorias <a href="gast_cat.php" class="btn btn-dark" >reresar</a> </h1>
            </div>
        </div>
    <div class="row mt-5">       
        <div class="col-6">
            <label for="cantidad"class="form-label">nombre</label>
            <input type="text" class="form-control"name="nombre" id="nombre" value=<?php echo $record['nombre'] ?>>
<input type="hidden"name="id" value="<?php echo $id; ?>">
            <button type="subnit" class="btn btn-success">Guardar</button>
        </div>
    </div>
    </form>
</div>

</body>
</html>