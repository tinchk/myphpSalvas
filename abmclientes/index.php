<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo, 
if (file_exists("archivo.txt")) {

    //Luego leerlo y almacenarlo en un jsonClientes
    $jsonClientes = file_get_contents("archivo.txt");

    //Después convertir el jsonClientes en un array aClientes
    $aClientes = json_decode($jsonClientes, true);
}

       //Y si en caso de No existir archivo, inicializar el aClientes como array vacío  
     //(para que el foreach al recorrer no devuelva error)

else {

    $aClientes = array();
}

if ($_POST) {

    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];
    
    if (isset($_GET["editar"]) && $_GET["editar"] >= 0) {

   $pos = $_GET["editar"]; 

    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $nombreAleatorio = date("Ymdhmsi") . rand(1000, 2000); //202210202002371010
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $extension = strtolower(pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION));
        if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
            $nombreImagen = "$nombreAleatorio.$extension";
            move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen");
            }
            //Eliminar la imagen anterior
            if (file_exists("imagenes/" . $aClientes[$pos]["imagen"])) {
                unlink("imagenes/" . $aClientes[$pos]["imagen"]);
            
            }
        } 
        
        else {
            //Si no se sube ninuna imagen, recuperamos el nombre de la imagen actual
            $nombreImagen = $aClientes[$pos]["imagen"];
             }      
        //Edito uno existente
        $aClientes[$pos] = ["dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nombreImagen,
                      ];
        } else {
            
            if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi") . rand(1000, 2000); //202210202002371010
                $archivo_tmp = $_FILES["archivo"]["tmp_name"];
                $extension = strtolower(pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION));
                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    $nombreImagen = "$nombreAleatorio.$extension";
                    move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen");
                }
            }
    
            //Inserto uno nuevo
            $aClientes[] = ["dni" => $dni,
                "nombre" => $nombre,
                "telefono" => $telefono,
                "correo" => $correo,
                "imagen" => $nombreImagen,
                         ];
        
        //Convertir el array $aClientes a json $strJson
        $strJson = json_encode($aClientes);
         }
        //Almacenar $strJson en archivo.txt
        file_put_contents("archivo.txt", $strJson);
    }
    
    if (isset($_GET["eliminar"]) && $_GET["eliminar"] >= 0) {
        //iguale el pos, elimine, converti, almacene y redireccione
    
        $pos = $_GET["eliminar"];
    
        //elimina la posicion marcada
        unset($aClientes[$pos]);
    
        //Convertir el array de clientes en json
        $strJson = json_encode($aClientes);
    
        //Almacenar el json en el archivo.txt
        file_put_contents("archivo.txt", $strJson);
        //redirecciono a la pantalla principal
        header("Location: index.php");
    }
    
      
     
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abm Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="container">

        <div class="row">
            <div class="col-12 text-center py-3">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">

                    <label for="txtNombre">Nombre</label>
                    <input type="name" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$pos]["nombre"]) ? $aClientes[$pos]["nombre"] : ""; ?>">

                    <label for="txtDni">Dni</label>
                    <input type="number" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$pos]["dni"]) ? $aClientes[$pos]["dni"] : ""; ?>">

                    <label for="txtTelefono">Telefono</label>
                    <input type="number" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$pos]["telefono"]) ? $aClientes[$pos]["telefono"] : ""; ?>">

                    <label for="txtCorreo">Correo</label>
                    <input type="mail" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$pos]["correo"]) ? $aClientes[$pos]["correo"] : ""; ?>">

                    <label for="">Archivo</label>
                    <input type="file" name="imagen" id="imagen" accept=".jpg, .jpeg, .pgn">
                    <small>Archivos admitidos: .jpg, .jpeg, .png</small>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="index.php" class="btn btn-danger">Nuevo</a>
                </form>

            </div>

            <div class="col-6">
                <table class="table table-hover border">

                    <head>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Dni</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </head>

                    <body>
                        <?php // * Modifico el Foreach p/ aplicar los (Botones interactivos)/Acciones de editar y eliminar 
                        // * Cambio la forma de la sintaxis del Foreach para que se adapte a lo que preciso hacer.
                        // Usando la sintaxis de clave => valor 
                        // * foreach($aClientes as $cliente) / va a pasar a ser foreach($aClientes as $clave => $valor) 
                        ?>

                        <?php foreach ($aClientes as $pos => $cliente) { ?>
                            <tr>
                                <td><?php  ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td><?php echo $cliente["imagen"]; ?></td>
                                <td>
                                    <a href="index.php?pos=<?php echo $pos ?>&accion=editar"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="index.php?pos=<?php echo $pos ?>&accion=eliminar"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>

                        <?php }; ?>
                    </body>
                </table>
            </div>
        </div>
    </main>
</body>
</html>