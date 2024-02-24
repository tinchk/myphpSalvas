<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {

  $usuario = $_POST["txtUsuario"];
  $contrasenia = $_POST["txtContrasenia"];

  if ($usuario == "bernardo" && $contrasenia == "2333") {
    header("Location: acceso_confirmado.php");
  } else {
    $mensaje = "Debe ingresar Usuario y Contraseña";
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <main class="container">
    <div class="row">
      <div class="col-12 pt-5 text-center">
        <h1>Formulario</h1>
      </div>
      <div class="row">
        <div class="col-12">
          <form method="POST" action="">
            <div class="py-3">
              <div class="alert alert-warning" role="alert"><?php if (isset($mensaje)) {
                                                              echo $mensaje;
                                                            } ?></div>
              <label for="txtUsuario" class="form-label">Usuario</label>
              <input type="user" name="txtUsuario" class="form-control" id="txtUsuario">
            </div>

            <div class="py-3">
              <label for="txtContrasenia" class="form-label">Contraseña</label>
              <input type="password" name="txtContrasenia" class="form-control" id="txtContraseña">
            </div>

            <div class="py-3">
              <button type="submit" name="btnEnviar" class="btn btn-primary">ENVIAR</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </main>
</body>

</html>