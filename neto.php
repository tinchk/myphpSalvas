
<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   
$sueldoBruto= 940000;
 
$cargasSociales= 0.17;


        function sueldoneto($sueldoBruto, $cargasSociales ) {
                    return $sueldoBruto - $cargasSociales * $sueldoBruto; 
                }
                   echo "Mi sueldo neto a cobrar es $" . sueldoneto($sueldoBruto, $cargasSociales)

?>