<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor</title>
</head>
<body>

       <h1>Conversor de moneda </h1> 
        <form action="#" method="POST">
            <label for="N1">Tipo de cambio </label>
            <input type="num" name="n">
            <br><br>
            <input type="submit" name="enviar" value="Ver tabla de conversion">
            <br><br>
        </form>

        <?php
            $n=$_POST["n"];
            echo "dolares pesos";
            if ($n<1 or $n>100) {
                } else {
                for ($i=1;$i<=10;$i++) {
                    
                    echo "<table border=1>";
                        echo "<tr>";
                            echo"<td> $i </td>";
                            echo"<td> </td>";
                            echo "<td>" .$n*$i. "</td>";
                        echo "</tr>";
                    echo "</table>";
                    }
            }

            


            ?>


       


   
</body>
</html>