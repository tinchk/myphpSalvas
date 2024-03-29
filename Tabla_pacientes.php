<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPaciente[] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Ana Acuña",
    "Edad" => 45,
    "Peso" => 81.5
);  //posicion=1

$aPaciente[] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Gonzalo Bustamante",
    "Edad" => 66,
    "Peso" => 79
);  //posicion=2

$aPaciente[] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Juan Irraola",
    "Edad" => 28,
    "Peso" => 79
);  //posicion=3


$aPaciente[] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Beatriz Ocampo",
    "Edad" => 50,
    "Peso" => 79
);  //posicion=4


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Tabla de pacientes</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">

                        <head>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre y Apellido</th>
                                <th>Edad</th>
                                <th>Peso</th>
                            </tr>
                        </head>

                        <body>

                            <?php foreach ($aPaciente as $aPacientes) { ?>

                                <tr>
                                    <td><?php echo $aPacientes["Dni"]; ?></td>
                                    <td><?php echo $aPacientes["Nombre y Apellido"]; ?></td>
                                    <td><?php echo $aPacientes["Edad"]; ?></td>
                                    <td><?php echo $aPacientes["Peso"]; ?></td>
                                </tr>

                            <?php } ?>

                        </body>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>