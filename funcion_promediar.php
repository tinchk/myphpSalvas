<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 
// funcion que obteng el promedio de de un array, ya sea $aNotas, u otro: es un $aValor //

function promediar($aValores) {
  $suma = 0;
  foreach($aValores as $aValor) {                     
        $suma = $suma + $aValor;
   }      
      return  $suma / count($aValores);  
   
    }       

 $aNotas = [6, 4];
 echo "El promedio del grupo es " . promediar($aNotas);   
  


    

?>

