<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla de multiplicar</title>
</head>
<body>

    <?PHP
    $n=5;
        echo "<h1> tabla del $n:</h1>";
          for ($i=1; $i<=10; $i++){
            echo "$n x $i = ".$n*$i."<br/>";
        }
    ?>

</body>
</html>