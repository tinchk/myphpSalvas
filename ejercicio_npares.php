<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numeros=0;
   
while ($numeros < 100) {
    $numeros++;
    echo $numeros . "<br>";
}
       
  
       
 for ($numeros=0; $numeros <= 100; $numeros+=2) { 
               echo $numeros . "<br>";
           if ($numeros==60) {
               break;
               
        }
    }          
   
   ?>   