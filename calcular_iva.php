<?php
ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$iva = 21;

if($_POST) {
    $iva = $_POST["lstIva"]; 
    $precioSinIva = $_POST["txtPrecioSinIva"];
    $precioConIva = $_POST["txtPrecioConIva"];
    
    if($precioSinIva > 0) {
        $precioConIva = $precioSinIva * ($iva / 100+1);
    } if($precioConIva > 0) {
        $precioSinIva = $precioConIva / ($iva / 100+1);
    } 
}
 
 $ivaCantidad = $precioConIva - $precioSinIva;               

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del IVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-3 pb-4">
                <h1>Calculadora IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 t-3">
                   <form method="POST" action="">
            
                <label for="lstIva" class="form-label">IVA</label>
                <select name="lstIva" id="lstIva" class="form-control">
                    <option value="21">21%</option>
                    <option value="19">19%</option>
                    <option value="10.5">10.5%</option>
                    <option value="27">27%</option>
                </select>
                <div class="pt-3">
                    <label for="importe" class="form-label">$ Precio sin IVA</label>
                    <input type="number" name="txtPrecioSinIva" id="txtPrecioSinIva" class="form-control">
                </div>
                <div class="pt-3">
                    <label for="importe" class="form-label">$ Precio con IVA</label>
                    <input type="number" name="txtPrecioConIva" id="txtPrecioConIva" class="form-control">
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-primary">CALCULAR</button>
                </div>
            </div>
           </form> 
                <div class="col-6">
                <table class="table table-hover border">
                            
                        <tbody>
                            <tr>
                            <th>IVA</th> 
                            <td><?php echo $iva ?></td>    
                            </tr>
                            <tr>
                            <th>Precio sin IVA</th> 
                            <td><?php echo number_format($precioSinIva, 2); ?>
                            </tr>
                            <tr>
                            <th>Precio con IVA</th> 
                            <td><?php echo number_format($precioConIva, 2); ?>
                            </tr>
                            <tr>
                            <th>Cantidad IVA</th> 
                            <td><?php echo number_format($ivaCantidad, 2); ?></td>    
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </main>



</body>

</html>