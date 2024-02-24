
<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maximo($aCifras) 
{
 
  foreach ($aCifras as $aCifra) {
          $aCifra > count($aCifras);
            $maximo = $aCifra;
     }
    return $maximo;
   } 


$aNotas = [9, 6, 7, 8, 2, 4,];
$aSueldos = [800, 500, 200, 100, 400];


echo maximo($aSueldos);





?>