<?php
ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = $_POST["txtNombre"];
$dni = $_POST["txtDni"];
$edad = $_POST["txtEdad"];
$telefono = $_POST["txtTel"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5 text-center">
                <h1>Resultado del formulario</h1>
            </div>
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>DNI</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (isset($_POST)) {  ?>
                            <tr>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $dni ?></td>
                                <td><?php echo $edad ?></td>
                                <td><?php echo $telefono ?></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>



</body>

</html>