<?php

include_once 'encabezado.php';
?>

<?php

    $nombre="";
    if (!empty($_POST["txtnombre"]))    {
        $nombre = $_POST["txtnombre"];
    }

    $telefono="";
    if (!empty($_POST["txtTelefono"])) {
        $telefono = $_POST["txtTelefono"];
    }

    $correo="";
    if(!empty($_POST["txtCorreo"]))  {
        $correo = $_POST["txtCorreo"];
    }
    $comentario="";
    if(!empty($_POST["txtComentario"]))  {
        $comentario = $_POST["txtComentario"];
    }
    $contenido="Nombre: $nombre \n" .
               "Telefono : $telefono \n".
               "Correo : $correo";
               "Correo : $comentario";
 
    $archivo = fopen("datos.txt", "w");
    fwrite($archivo, "$contenido");
    fclose($archivo);

  
?>
<h1>recibido</h1>

<?php
include_once 'pie.php';
?>
