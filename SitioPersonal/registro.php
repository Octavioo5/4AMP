<?php
 include_once("encabezado.php");
 
?>
<head>
    <script src="jquery-2.1.4.js"></script>
    <script src="miscript.js"></script>
</head>    
                 Nombre:
                 <input type="text" name="nombre" id="nombre"  />
                 <br><br>            

                  Telefono:  
                  <input type= "text" name="telefono" id="telefono"    />
                  <br><br>
            
                 Correo: 
                 <input type="text" name="correo" id="correo" />
                 <br><br>
                       
                 Mensaje: 
                 <input type="text" name="mensaje"  id="mensaje"  />
                 <br>
                      
                      <input type="button" name="enviar" id="Enviar" value="enviar">
                      <br><br>
         
      
      <br>
    
      <div align="center">
            <button onclick="location.href='Futuro.php'">Futuro</button>
            <button onclick="location.href='Inicio.php'">Inicio</button>
            <button onclick="location.href='Presente.php'">Presente</button>
            </div>
<?php
    include_once("pie.php");

        //codigo perteneciente a registro 
        // <form  action="guardarRegistro.php"  method="POST"> 
        //</form>

?>


