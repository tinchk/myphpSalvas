<?php

ini_set('diplay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo, 
if(file_exists("archivo.txt")) {
    
    //Luego leerlo y almacenarlo en un jsonClientes
    $jsonClientes = file_get_contents("archivo.txt");

    //Después convertir el jsonClientes en un array aClientes
    $aClientes = json_decode($jsonClientes, true); 

}

//Y si en caso de No existir archivo, inicializar el aClientes como array vacío (para que el foreach al recorrer no devuelva error)
else {

    $aClientes = array();
}

if ($_POST) {

    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];
    $imagen = "";

    if ($pos == 0) {
        //Actualizo el Cliente
        $aClientes[$pos] = [
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nombreImagen,
        ];
    } else {
        $nombreAleatorio = date("Ymdhmsi") . rand(1000, 2000);
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
        if ($extension == "png" || $extension == "jpeg" || $extension == "jpg") {
            $nombreImagen = "$nombreAleatorio.$extension";
            move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen");
        }

        //Inserto la imagen  
        $aClientes[] = [
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nombreImagen,
        ];
    }


    //Convertir a json el array $aClientes  
    $jsonClientes = json_encode($aClientes);

    //Almacenar ahora el json string en Archivo.txt
    file_put_contents("archivo.txt", $jsonClientes);
 
}
  







$pos = isset($_GET["pos"]) && $_GET["pos"] >= 0 ? $_GET["pos"] : "";
 
if (isset($_GET["accion"]) && $_GET["accion"] == "eliminar") {
    unset($aClientes["pos"]);
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
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$pos]["nombre"]) ? $aClientes[$pos]["nombre"] : ""; ?>">

                    <label for="txtDni">Dni</label>
                    <input type="number" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$pos]["dni"]) ? $aClientes[$pos]["dni"] : ""; ?>">

                    <label for="txtTelefono">Telefono</label>
                    <input type="number" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$pos]["telefono"]) ? $aClientes[$pos]["telefono"] : ""; ?>">

                    <label for="txtCorreo">Correo</label>
                    <input type="mail" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$pos]["correo"]) ? $aClientes[$pos]["correo"] : ""; ?>">

                    <label for="imagen">Adjuntar archivo</label>
                    <input type="file" name="imagen" id="imagen" accept=".jpg, .jpeg, .pgn">
                    <small>Archivos admitidos: .jpg, .jpeg, .png</small>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button a href="index.php" class="btn btn-danger">Nuevo</a></button>

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
                        <?php  // * Modifico el Foreach p/ aplicar los (Botones interactivos)/Acciones de editar y eliminar 
                        // * Cambio la forma de la sintaxis del Foreach para que se adapte a lo que preciso hacer.
                        // Usando la sintaxis de clave => valor 
                        ?>

                        <?php // foreach($aClientes as $cliente) / va a pasar a ser foreach($aClientes as $clave => $valor)
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