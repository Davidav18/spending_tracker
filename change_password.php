<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="styles/style.css">
</head>

<body class="text-center">
    
    <main class="form-signin w-100 m-auto">
      <form action="config/change_password.php" method="POST">
        <a href="#">
            <h1>Base de Datos</h1>
        </a>
        <h2 class="h3 mb-3 fw-normal">Recupera tu Contraseña</h2>
    
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput"  name="new_password" >
          <input type="hidden" name="id" value="<?php  echo $_GET['id'];?>" >

          <label for="floatingInput">nueva contraseña</label>
        <div class="checkbox mb-3">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Recuperar contraseña</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
      </form>
    </main>
    
    
        
      </body>

</html>