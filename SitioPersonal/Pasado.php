<?php
    include_once("encabezado.php");
?><br>

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


    <i>Pasado</i>
        
            <br><div align="left"><i>Nacimiento</i></div> <br>
            <p>
            Naci el 05 de Enero del 2006, en Culiacan Sinaloa Mexico,
            me pusieron el nombre de Sergio Octavio Lopez Sainz, Sergio por mi abuelo 
            materno y Octavio por el nombre de mi papa, se dice que hubo una gran fiesta
            despues de nacer, debido a que era el primer hijo de mis padres, y primer nieto de
            mis abuelos tantos paternos como maternos, asi que soy el mayor en mis dos familias. <br>
            </p>
            <br><div align="center"><img src="img/fiesta.jpg" alt="" width="300px" height="230px" ></div> 

            <div align="left"><i>Gustos</i></div><br>
            <p>
            De pequeño me gustaba entrenar con mi papa besibol ya que el me entrenaba, todo 
            para que despues me terminara gustando mas el futbol, jajaja, mi papa reclama hasta 
            la fecha en broma, estuve en varios equipos de futbol desde pequeño, me encantaba 
            jugar futbol, tanto que estuve en torneos donde me esforze muchisimo, tambien me
            gustaba mucho jugar videojuegos desde niño, solia jugar despues de la escuela,
            para desoues salir a jugar con mis amigos al parque o a entrenar futbol, 
            una parte que tambien recuerdo mucho es que me la pasaba viendo dragon ball z 
            todo lo que fuera posible ya que para mi era mi caricatura favorita. <br>
            </p>
           
            <br><div align="center"><img src="img/futbol.jpg" alt="" width="300px" height="230px" > </div>  <br>

            <div align="left"><i>Acontecimiemientos</i></div><br>
            <p>
            Luego nace mi hermano ocymar que nacio 6 años despues que yo, donde la diferencia ya
            era algo, el es mas tranquilo que yo, un niño bastante inteligente, hasta hace 5 años 
            nace mi hermanita Alison, una niña muy inquieta pero bastante alegre y graciosa, 
            ella nacio caundo yo tenia 13 años una diferencia bastante grande, a veces es in poco 
            cansado cuidarla. <br><br>
            </p>
            <p>
            Todo paso normal hasta 2020, donde yo me encontraba en segundo año de secundaria,
            cuando se declaro que el mundo entero esta en estado de pandemia, debido al covid-19
            los primeros meses me sentia en la gloria ya que no iba a la secundaria y me la pasaba
            jugando videojuegos, no era conciente de la situacion que estaba pasando, luego paso 
            un poco de tiempo varios meses, ya estaba cansado de estar en la casa, estaba deseando 
            regresar a la escuela, extrañaba convivir con mis amigos, y estar tomando clases. <br>
            </p>
            <br><div align="center"><img src="img/covid19.jpg" alt="" width="300px" height="230px"></div>  
        

            <div align="center">
            <button onclick="location.href='Futuro.php'">Futuro</button>
            <button onclick="location.href='Inicio.php'">Inicio</button>
            <button onclick="location.href='Presente.php'">Presente</button>
            <button onclick="location.href='registro.php'">Registro</button>
            </div>

<?php
    include_once("pie.php");
?>