<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>arreglo</title>
</head>
<body>
    <form action "numeros.php" method="post">
    <?php
        $n=3;
        echo "Proporciona los valores:<br>";
        for($i=0; $i<$n ; $i++){
            echo $i;
            echo "<input type='text' name='alumno[]' size='6' >";
            echo "<input type='text' name='num[]' size='1' >";
            echo "<br>";
        }
    ?>
    <input type="submit">
    </form>
    <?php
    if (isset($_POST['alumno'],$_POST['num'])){ 
        $numeros =$_POST['num'];
        $alumnos =$_POST['alumno'];

        $calificaciones = array_combine($alumnos,$numeros);
        ksort($calificaciones);
        print_r($calificaciones); 

        $calf_max = array_search(max($calificaciones), $calificaciones); echo"<br>";
        echo"<i> Mejor alumno </i>:<br>";
        print_r($calf_max); 
        print_r(-$calificaciones[$calf_max]);
       
         
        }
        
        
        
    ?>
    
</body>
</html>