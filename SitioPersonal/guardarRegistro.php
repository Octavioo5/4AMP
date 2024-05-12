<?php
    include ("Conexion.php");
    $getmysql= new mysqlconex();
    $getconex=$getmysql->conex();


    if (isset($_POST["enviar"])) {
    
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];
        $mensaje=$_POST["mensaje"];

        $query="INSERT INTO datos(nombre, telefono, correo, mensaje) VALUES (?,?,?,?)";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"ssss",$nombre,$telefono,$correo,$mensaje);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);

        if ($afectado==1) {
          echo"<script> alert ('El contacto [$nombre] se agrego correctamente'); location.href='registro.php'; </script>";
        }else {
            echo"<script> alert ('El contacto [$nombre] no se agrego correctamente'); location.href='registro.php'; </script>";
        }


        mysqli_close($sentencia);
        mysqli_close($getconex);
    }
    
       








/*
        $nombre=$_POST["txtnombre"];
        $telefono=$_POST["txtTelefono"];
        $correo=$_POST["txtCorreo"];
        $comentario=$_POST["txtComentario"];

        $insertarDatos= "INSERT INTO datos (nombre, telefono, correo, comentario) VALUES"."('$nombre','$telefono','$correo','$comentario')";
        $ejecutarInsertar= mysqli_query($enlace,$insertarDatos);
        //mysql_close($enlace);  

        if($enlace->query($insertarDatos) === TRUE){
            header("Location: registro.php");
            $enlace->close();
            exit;
        }else{
            echo "<h2>Ocurrió un erro</h2> <p>Error: " .$insertarDatos. "<br>" .$enlace->error. "</p>";
            echo "<h3><a href='registro.php'>Regresar a Registro</a></h3>";
        }
*/
       
   

?>