<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas 2 </title>

</head>
    <body>
    <h1>Tablas de multiplicar</h1>
    <h3>Números válidos del 1 al 10.</h3>
        <form action="#" method="post">
        <p>Escribe aquí el número:
            <input type="text" name="num" maxlength="2" size="2" required />
        </p>
            <p>
            <input type="submit" value="Ver tabla de multiplicar." />
            </p>
        </form>
        <?php
            $n=$_POST["num"];
            
            if ($n<1 or $n>10) {
                    echo "No has escrito un número entre el 1 y el 10.";
                } else {
                    echo "<h4>Tabla del $n:</h4>";
                for ($i=1;$i<=10;$i++) {
                    echo "$n x $i = ".$n*$i."<br/>";
                    }
            }
        ?>
    </body>
</html>