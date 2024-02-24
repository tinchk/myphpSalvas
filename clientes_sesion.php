<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aClientes = array();

session_start();

if(isset($_SESSION["listadoClientes"])) {
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}

if($_POST) {
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

  $aClientes[] = ["nombre" => $nombre, 
                 "dni" => $dni,
                 "telefono" => $telefono,
                 "edad" => $edad]; 

  $_SESSION["listadoClientes"] = $aClientes;

   } else { 
      session_destroy($aClientes);  
   }

   print_r($_POST)

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion de clientes.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Clientes sesion</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <form method="POST" action="">

                        <div class="pt-3">
                            <label for="">Nombre</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                        </div>

                        <div class="pt-3">
                            <label for="">DNI</label>
                            <input type="number" name="txtDni" id="txtDni" class="form-control">
                        </div>

                        <div class="pt-3">
                            <label for="">Telefono</label>
                            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                        </div>

                        <div class="pt-3">
                            <label for="">Edad</label>
                            <input type="number" name="txtEdad" id="txtEdad" class="form-control">
                        </div>

                        <div class="pt-3">
                            <button type="submit" name="btn-enviar" class="btn btn-primary">Enviar</button>
                            <button type="submit" name="btn-eliminar" class="btn btn-danger">Eliminar</button>
                        </div>
                   </form>
                </div>
              <div class="col-6">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach($aClientes as $aCliente) {  ?>
                                             
                            <td><?php echo $aCliente["nombre"]; ?></td>
                            <td><?php echo $aCliente["dni"]; ?></td>
                            <td><?php echo $aCliente["telefono"]; ?></td>
                            <td><?php echo $aCliente["edad"]; ?></td>
                                                 
                            <?php   }  ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>