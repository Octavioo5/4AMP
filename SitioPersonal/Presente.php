<?php
 include_once("encabezado.php");
?>

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


        <i> Presente</i>

      <p> Actualmente
          cuento con 18 años de edad, curso tercer año de preparatoria 
          aprendiendo sobre programacion, proximo a ir a la universidad. <br>
          Ahora estoy mas enfocado en lo que quiero en la vida, plantenadome
          a donde me dirigo, plantenadome como quiero ser dentro de unos años,
          preparandome lo maximo para poder ser cada dia mejor, dia con dia 
          me esfuerzo al maximo aunque algunos dias pueden ser dificiles no desisto.
      </p>
      <img src="img/Presente.jpg" alt="" width="180px" height="240px"> <br><br>
     
      <i>Como me percibo</i>
        <p>
          Como me veo a mi mismo, bueno en esta etapa de mi vida 
          puedo decir con certeza que soy alguien
          disciplinado, perseverante, enfocado, me centro mucho en mis objetivos y 
          en llevar a cabo acciones para lograr mis metas, me considero
          autodidacta suelo aprender de todo y todos, 
          suelo ser bastante sociable
          tengo una buena facilidad de palabra lo que me lleva a crear buenas interacciones
          con diferentes personas con lo cual gracias a eso tengo buenos conocidos.
          </p>

          <img src="img/reflexion.jpg" width="180px" height="240px" alt=""><br><br>
        

      <i> Gustos </i>
      <p>
        ¿Que me gusta?, buena pregunta, lo que mas disfruto hacer en el dia,
        sin duda alguna seria ir a entrenar al gimnasio, lo tomo como el espacio
        donde puedo desestresarme, hablo con amigos, hago ejercicios,
        tambien disfruto mucho el compartir tiempo con 
        mi familia y mis amigos hablar con ellos, convivir con ellos, jugar con ellos; 
        el leer tambien me agrada mucho suelo leer cosas sobre desarrollo personal, 
        estoicismo, de vez en cuando un poco de literatura.
      </p>
        <img src="img/Ejercicios.jpg" alt="" width="200px" height="130px" >
        <img src="img/Lectura.jpg" alt="" width="200px" height="130px" >
        <br>
        <div align="center">
        <button onclick="location.href='Pasado.php'">Pasado</button>
        <button onclick="location.href='Futuro.php'">Futuro</button>
        <button onclick="location.href='Inicio.php'">Inicio</button>
        <button onclick="location.href='registro.php'">Registro</button>
        </div>

<?php
    include_once("pie.php");
?>
