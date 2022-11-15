<?php
require_once('config.php');
$query = "SELECT * FROM gastos_categorias";
$result = $conexion->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container=fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>gastos_categorias <a href="form-insert2.php" class="btn btn-primary" >Añadir</a>   <a href="menu.php" class="btn btn-primary" >Regresar</a> </h1>
            </div>
        </div>
     <div class="row mt-5">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $result-> fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td>
                            <a href="prueba.php?id=<?php echo $row['id']; ?>"class="btn btn-warning">editar</a>
                            <a href="delete_spending2.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>  
                     <?php } ?>
                </tbody>
            </table>
        </div>
     </div>
    </div>
</body>
</html>