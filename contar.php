<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function contar($aArray)
{   
   $elemento = 0;
    foreach($aArray as $item) {
     $item = $elemento++;
   }
   return $item;
   }
            


$aProductos[] = [
    "nombre" => "TV Smart 55 Ultra HD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 20,
    "precio" => 58000
];

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

$aPaciente[0] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Ana Acuña",
    "Edad" => 45,
    "Peso" => 81.5
);  //posicion=1

$aPaciente[1] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Gonzalo Bustamante",
    "Edad" => 66,
    "Peso" => 79
);  //posicion=2

$aPaciente[2] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Juan Irraola",
    "Edad" => 28,
    "Peso" => 79
);  //posicion=3


$aPaciente[3] = array(
    "Dni" => 33765012,
    "Nombre y Apellido" => "Beatriz Ocampo",
    "Edad" => 50,
    "Peso" => 79
);  //posicion=4

$aNotas[] = [9, 8, 9.50, 4, 7, 8];




echo contar($aProductos);
echo contar($aPaciente);
echo contar($aNotas);



?>