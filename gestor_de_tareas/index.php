<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (file_exists("archivo.txt")) {

   $strjson = file_get_contents("archivo.txt");  
   $aTareas = json_decode($strjson, true);

} else {

    $aTareas = array();
}

$id = isset($_GET["id"]) && $_GET["id"] >= 0 ? $_GET["id"] : "";

if ($_POST) {
    
    // defino lss valores para el post del formulario (lo que se va a enviar) 

     $prioridad = $_POST["lstprioridad"];
     $usuario = $_POST["lstusuario"];
     $estado = $_POST["lstestado"];
     $descripcion = $_POST["txtdescripcion"];
     $titulo = $_POST["txttitulo"];
   
    //Si viene una nueva tarea o si se Actualizan los datos
     
    if ($id >= 0) {
        
        $aTareas[$id] = [ $fecha => $id [date("dd/mm/yy")],
                          $prioridad => "lstprioridad",
                          $usuario => "lstusuario",   
                          $estado => "lstestado",
                          $titulo => "txttitulo",
                                    ];
    
       };
              
         json_encode($strjson,$Tareas);


 }; 



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5 text-center">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        
        <form action="" method="post">
            <div class="row">
                <div class="col-4">
                    <label for="lstprioridad">Prioridad</label>
                    <select name="lstprioridad" id="lstprioridad" class="form-control">
                        <option value="1">Alta</option>
                        <option value="2">Media</option>
                        <option value="3">Baja</option>
                    </select>
                </div>

                <div class="col-4">
                    <label for="lstusuario">Usuario</label>
                    <select name="lstusuario" id="lstusuario" class="form-control">
                        <option value="1">Ana</option>
                        <option value="2">Bernabe</option>
                        <option value="3">Daniela</option>
                    </select>
                </div>

                <div class="col-4">
                    <label for="lstestado">Estado</label>
                    <select name="lstestado" id="lstestado" class="form-control">
                        <option value="2">Asignado</option>
                        <option value="3">En proceso</option>
                        <option value="4">Terminado</option>
                    </select>
                </div>
            
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="txttitulo">Titulo</label>
                    <input type="text" name="txttitulo" id="txttitulo" class="form-control">
                </div>
            </div>

          <div class="row">
            <div class="col-12">
                <label for="txtdescripcion" class="form-label">Descripcion</label>
                <input type="text" name="txtdescripcion" id="txtdescripcion" class="form-control">
            </div>


            <div class="pt-3 text-center">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
                <button type="" class="btn btn-secondary">CANCELAR</button>
            </div>
           
           </div>
        </form>

        <div class="row">
            <div class="col-12">
                <table class="table-hover border">

                    <head>
                        <tr>
                            <th>ID</th>
                            <th>Fecha de insercion</th>
                            <th>Titulo</th>
                            <th>prioridad</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                        </tr>
                    </head>

                    <body>
                            <?php // Aplico el foreach para mostrar los valores del recuadro ?>
                          
                    <?php foreach($aTareas as $tarea) { ?>
                    
                <tr>                                                    
                    <td><?php echo $tarea["txttitulo"]; ?></td>
                    <td><?php echo $tarea["lstprioridad"]; ?></td>
                    <td><?php echo $tarea["lstusuario"]; ?></td>
                    <td><?php echo $tarea["lstestado"]; ?></td>    
                </tr> 
                    
                    <?php }; ?>
                      
                </body>

                </table>
            </div>
        </div>

    </main>
</body>

</html>