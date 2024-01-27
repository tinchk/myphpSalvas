<?php
ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "TV Smart 55 Ultra HD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 20,
    "precio" => 58000
);

$aProductos[] = array(
    "nombre" => "Samsung Galaxi A30 blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxi A30",
    "stock" => 5,
    "precio" => 22000
);

$aProductos[] = array(
    "nombre" => "Aire acodicionado 2900 frigorias f/c",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 0,
    "precio" => 45000
);
    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                           <?php // otra forma de harlo con el operador While ?>
                    
                           <?php $contador = 0; ?>
                               <?php while ($contador < 3) { ?>
                                        
                           <tr>    
                            <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                            <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                            <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                            <td><?php echo $aProductos[$contador]["stock"] > 10 ? "Hay Stock" : ($aProductos[$contador]["stock"] <= 10 && $aProductos[$contador]["stock"] > 0 ? "Hay poco stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                            <td><button type="button" class="btn btn-primary">COMPRA</button></td>
                        </tr>
                                 <?php 
                                 $contador++; 
                                               } ?> 

                      </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>