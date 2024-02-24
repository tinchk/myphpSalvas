

<?php 
      ini_set('diplay_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
   $base= 35;
   $altura= 40;
   
   
      function arearectangulo($base , $altura) {
              return $base * $altura;
      }      
                      
         echo "El area del rectangulo es" . arearectangulo($base , $altura);                      
                      
?>



