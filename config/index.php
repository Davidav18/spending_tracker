<?php
require_once ('config.php');
$query = "SELECT g.id, g.descripcion, g.cantidad, c.nombre as categoria, g.fecha FROM gastos g LEFT JOIN gastos_categorias c on g.categoria = c.id";
$result = $conexion->query($query);
require_once 'validate_session.php'

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
                <h1>gastos <a href="form-insert.php" class="btn btn-primary" >Añadir</a> <a href="menu.php" class="btn btn-primary" >Regresar</a> </h1>
            </div>
        </div>
     <div class="row mt-5">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>descripcion</th>
                        <th>cantidad</th>
                        <th>categoria</th>
                        <th>fecha de registro</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $result-> fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['cantidad']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td>
                            <a href="form-update.php ?id=<?php echo $row['id']; ?>"class="btn btn-warning">editar</a>
                            <a href="delete_spending.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">Eliminar</a>
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