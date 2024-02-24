
<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados[] = ["dni" => 33300123, "nombre" => "david garcia", "bruto" => 450000.30];
$aEmpleados[] = ["dni" => 40874456, "nombre" => "ana del valle", "bruto" => 600000];
$aEmpleados[] = ["dni" => 67567565, "nombre" => "andres perez", "bruto" => 780000];
$aEmpleados[] = ["dni" => 75744545, "nombre" => "victoria luz", "bruto" => 560000];



function sueldoneto($sueldoBruto) {
    return $sueldoBruto - 0.17 * $sueldoBruto; };
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
      
</head>
<body>
        <main class="container">
            <div class="row">
                <div class="col-12 py-5 pb-3 text-center">
                    <h1>Tabla de empleados</h1>
                </div>
            </div>
             <div class="row">
                <div class="col-12">
                    <table class="table hover border">
                           <thead>
                                <tr>
                                    <th>dni</th>
                                    <th>nombre</th>
                                    <th>sueldo</th>
                                </tr>
                           </thead>                         
                           <tbody>
                             
                            <?php    foreach($aEmpleados as $aEmpleado) {   ?>
                                <tr> 
                                  <td><?php echo $aEmpleado["dni"]; ?></td>
                                  <td><?php echo strtoupper($aEmpleado["nombre"]); ?></td>
                                  <td><?php echo number_format(sueldoneto($aEmpleado["bruto"]), 2, ",", "."); ?></td>
                                 </tr>
                                
                               <?php  } ?>  
                                                                       
                                                                                                   
                      </tbody>        
                    </table> 
                </div>
             </div>     
             <div class="row">
                <div class="col-12">
                    <?php   echo "cantidad de empleados total " . count($aEmpleados); ?>
                </div>
             </div>          
        
        </main>
</body>
</html>

                 
                                                         
                               
                            





