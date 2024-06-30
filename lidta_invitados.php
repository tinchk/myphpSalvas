<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si el archivo existe, se abre y se convierte a un array
//sino array vacio

if (file_exists("invitados.txt")) {
    $archivo = fopen("invitados.txt", "r"); 
    $invitados = fgetcsv($archivo, 0); 
   
} else {
    $invitados = array();
}
      
if ($_POST) {

    $dni = $_POST["txtdni"];
    $codigo = $_POST["txtcodigo"];  
    //si Viene por post el dni,            
   //si se encuentra el dni mostrar el mensaje de Bienvenida
        if(in_array($dni, $invitados)) {
        echo "Bienvenid@ a la fiesta";
    
     } else {
     
     echo "No se encuentra en la lista"; 
     }
    
     if(in_array($codigo, $invitados)) {
        echo "Bienvenid@ a la fiesta";
    
     } else {
     
     echo "No se encuentra en la lista"; 
     }
    
    if($codigo == "verde") {

        echo "Su codigo es" ."". rand(1000, 9999);
    } else {
        echo "Su código no es Vip";
    }
    
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Lista de invitados</h1>
                <p>Complete el siguiente formulario</p>
            </div>
            <form action="" method="POST">
                    <label for="txtdni" class="form-label">Ingrese su Dni</label>
                    <input type="number" name="txtdni" id="txtdni" class="form-control">
                    <button name="btnValida" type="submit" class="btn btn-primary">Validar su Dni</button>
                </div>

                <div class="py3">
                    <label for="txtcodigo" class="form-label">Ingrese su codigo</label>
                    <input type="text" name="txtcodigo" id="txtcodigo" class="form-control">
                    <button name="btnPase" type="submit" class="btn btn-success">Validar su codigo</button>
                </div>
        </div>
        </form>

        </div>




    </main>


</body>

</html>