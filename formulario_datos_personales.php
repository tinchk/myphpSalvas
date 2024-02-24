<?php
ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST) {
              $nombre=$_POST["txtNombre"];
              $dni=$_POST["txtDni"];
              $edad=$_POST["txtEdad"];
              $telefono=$_POST["txtTel"];
            }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario datos personales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-4">
                <h1>Formulario de Datos personales</h1>
            </div>
            <div class="row">
                <div class="col-8">
                    <form method="POST" action="resultado_formulario.php">

                        <label for="txtNombre">Nombre</label>
                        <input type="name" name="txtNombre" id="txtNombre" class="form-control">

                        <label for="txtDni">DNI</label>
                        <input type="data" name="txtDni" id="txtDni" placeholder="11222333" class="form-control">

                        <label for="txtEdad">Edad</label>
                        <input type="number" name="txtEdad" id="txtEdad" class="form-control">

                        <label for="txtTel">Telefono</label>
                        <input type="tel" name="txtTel" id="txtTel" placeholder="11 22223333" class="form-control">

                        <div class="pt-3 text-end">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>

                </div>
            </div>



        </div>
    </main>



</body>

</html>