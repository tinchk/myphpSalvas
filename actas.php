<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($aValores)
{
    $suma = 0;
    foreach ($aValores as $aValor) {
        $suma = $suma + $aValor;
    }
    return  $suma / count($aValores);
}

$aAlumno[] = array("nombre" => "Ana Valle", "nota1" => 7, "nota2" => 8);
$aAlumno[] = array("nombre" => "Bernabe Paz", "nota1" => 5, "nota2" => 7);
$aAlumno[] = array("nombre" => "Sebastian Aguirre", "nota1" => 6, "nota2" => 9);
$aAlumno[] = array("nombre" => "Monica Ledezma", "nota1" => 8, "nota2" => 9);

$contador = 0;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover dark border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                        </tr>
                    </thead>

                    <tbody>
                          
                        <?php while ($contador < 4) { ?>
                        <?php $aNotasAlumno = [$aAlumno[$contador]["nota1"], $aAlumno[$contador]["nota2"]]; ?>

                            <tr>
                                <td><?php echo $aAlumno[$contador]["nombre"]; ?></td>
                                <td><?php echo $aAlumno[$contador]["nota1"]; ?></td>
                                <td><?php echo $aAlumno[$contador]["nota2"]; ?></td>
                                <td><?php echo promediar($aNotasAlumno); ?></td>
                            </tr>

                        <?php
                            $contador++;
                        }  ?>

                    </tbody>
               </table>
            </div>
        </div>
</main>
</body>
</html>