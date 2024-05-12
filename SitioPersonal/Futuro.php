
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

    <i>Futuro</i><br><br>

        <i>Yo en unos años</i><br>

    <p>
        Como me veo en un tiempo cercano es: estudiando la carrera, esforzandome por
        ser la mejor version de mi, teniendo mas claro que camino estare siguiendo,
        me encontraria trabajando de acuerdo con mi carrera, estaria disfrutando la etapa
        que estaria pasando, aprendiendo de todo, conociendo a mucha gente nueva
        con la cual aprenderia mucho y me divirtiria mucho. <br><br> 
        </p>

        <div align="center"><img src="img/Universidad.jpg" alt="" width="300px" height="240px" > </div>  <br>

        <i>Como me imagino</i><br><br>

        <p>
        Tendre una mejor mentalidad, siendo mas maduro, inteligente, logrando una mejor
        condicion fisica, con una economia mas estable, estando mas cerca de encontrar el
        equilibrio que tanto he estado buscado en mi vida, logrando una mejor relacion con 
        mi familia y amigos. <br><br>
        </p>
        <div align="center"><img src="img/Trabajando.jpg" alt="" width="300px" height="230px" > </div>  <br>
        <p>
        Ya logrando varias metas que tuve en el pasado, pero con metas nuevas que son
        mas complicadas de lograr que las que tenia antes, pero yo no me dare por vencido
        hasta lograr lo que me haya propuesto, siguiendo esforzandome al maximo para 
        lograr mis objetivos.
        </p>

    </p>
        <div align="center">
        <button onclick="location.href='Pasado.php'">Pasado</button>
        <button onclick="location.href='Presente.php'">Presente</button>
        <button onclick="location.href='Inicio.php'">Inicio</button>
        <button onclick="location.href='registro.php'">Registro</button>
        </div>
        
<?php
    include_once("pie.php");
?>