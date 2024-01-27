<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");

$nombre="Martin Flores";
$edad="35";
$aPeliculas= "He-man";

?>

<!DOCTYPE html>
<html lang="sp">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <title>Ficha personal</title>
</head>

<body>
     <main class="container">
          <div class="row">
               <div class="col-12 text-center py-5">
                    <h1>Ficha personal</h1>
               </div>
          </div>
          <div class="row">
               <div class="col-12">
                    <table class="table table-hover border">
                         <tr>
                              <th>Fecha</th>
                              <td><?php echo date("d/m/Y"); ?></td>
                         </tr>
                         <tr>
                              <th>Nombre y Apeliido</th>
                              <td><?php echo $nombre; ?></td>
                         </tr>
                         <tr>
                              <th>Edad</th>
                              <td><?php echo $edad; ?></td>
                         </tr>
                         <tr>
                              <th>Peliculas de culto</th>
                              <td>He-man de 1986</td>
                         </tr>
                    </table>
               </div>
          </div>
      </main>
</body>

</html>