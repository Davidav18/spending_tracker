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
      <form action="config/login.php" method="POST">
        <a href="#">
            <h1>Base de Datos</h1>
        </a>
        <h2 class="h3 mb-3 fw-normal">Porfavor Inicia sesion</h2>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" >
          <label for="floatingInput">Correo Electronico</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password"name="password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar  Sesión</button>
        <a href="recovery.php">¿Olvidaste tu Contraseña?</a>
        <?php
        if (isset($_GET['message'])){

         ?>
        <div class="alert alert-primary" role="alert">
         <?php
         switch ($_GET['message']) {
          case 'ok':
            echo 'por favor, revisa tu correo ';
            break;
          case 'succes_password':
            echo 'Inicia Sesión  con tu nueva contraseña ';
            break;
          
          default:
          echo 'Algo salio mal, intentalo de nuevo ';
            break;
         }
         ?>
        </div>
        <?php
        }
        ?>
    
      </form>
    </main>
    
    
        
      </body>

</html>