<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function emprintar($variable) {

    if (is_array($variable)) {
        foreach ($variable as $content) {
         $content = fopen("datos.txt", "a+");
           fwrite($content, "datos.txt");
           echo $content;
        }
    } else {
        file_put_contents("datos.txt", $variable);
        echo $variable;
    }

          
}
$persona = array();
$persona = [$nombre = "Enrique" , $vehiculo = 123 , $sitio = "boulevard"];
$anecdota = "yo los conozco, canción de el León Giecco";

emprintar($persona);



?>