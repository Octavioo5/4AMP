<?php
// se valida una contraseña para este programa pueda ser ejecutado
$token = '';
if (isset($_GET['token'])) {
    $token = $_GET['token'];
}
if ($token == '' || $token != '123456789') {
    $datos['error'] = 'peticion incorrecta';
    echo json_encode($datos);
    return;
}
// conectarse a la bd
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'registro';

// realiza la conexion con la base de datos
$conn = new mysqli($servername, $username, $password, $db);

// extraer datos desde el mensaje de envio

$nombre = $_GET['nombre'];
$telefono = $_GET['telefono'];
$correo = $_GET['correo'];
$mensaje = $_GET['mensaje'];

// construir la instruccion de sql
$sql = "INSERT INTO datos (nombre,telefono,correo,mensaje)
            VALUES ('$nombre','$telefono','$correo','$mensaje')";

// ejecutar la insercion a la base de datos
$result = $conn->query($sql);

// recuperar el resultado de la ejecucion
$datos = [];

// agrega un mensaje al resultado
if ($result === true) {
    $datos['success'] = 'true';
} else {
    $datos['success'] = 'false';
}
//cierra la conexion con la base de datos
$conn->close();
// regresa la informacion con los resultados, en este caso true o false
echo json_encode($datos);

?>
