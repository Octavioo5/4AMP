<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/CssSitioPersonal.css">
    <title>Inicio</title>
</head>
<body>

<?php 
        $txt_Visitas ="visitas.txt";

        if(!file_exists($txt_Visitas)){
            
            touch($txt_Visitas);
        }

        $contenidoTxt =file_get_contents($txt_Visitas);

            if(empty($contenidoTxt)){
               
                $visitas = 0;

            }else{

                $visitas =intval($contenidoTxt);
            }
            $visitas++;

            file_put_contents($txt_Visitas,$visitas);

            echo $visitas;
?>
    
        <div align="center"><i>Inicio</i></div>

        <div align="center"><h3>
            Bienvenido a este trabajo, me presento soy Sergio Octavio Lopez Sainz,
            y este trabajo trata sobre mi, cosas de mi vida tanto del pasado, presente y futuro,
            espero lo disfrutes.

        </h3></div>

        <div align="center"><img src="img/Tiempo.jpg" alt="" width="250px" height="180px" > </div><br> 
       
        <div align="center">
        <button onclick="location.href='Pasado.php'">Pasado</button>
        <button onclick="location.href='Presente.php'">Presente</button>
        <button onclick="location.href='Futuro.php'">Futuro</button>
        <button onclick="location.href='registro.php'">Registro</button>
        </div>
        
</body>
</html>