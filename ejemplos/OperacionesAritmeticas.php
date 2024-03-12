<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones aritmeticas</title>
</head>
<body>
    <fieldset>
        <legend> Operaciones Aritmeticas </legend>
        <form action="#" method="POST">
            <label for="N1">Primer numero</label>
            <input type="number" name="n1" required>
            <br><br>
            <label for="N2"> Segundo Numero </label>
            <input type="number" name="n2" required>
            <br><br>
            <label for="operaciones">Operaciones Aritmeticas</label>
            <select name="operaciones" id="opr">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <br>
            <input type="submit" name="enviar" value="Calcular">

        </form>
    </fieldset>
    <h1>Resultados</h1> 
    <?php 
    
   
    if(isset($_POST["enviar"])){

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $opc=$_POST["operaciones"];

        switch($opc){

            case'sumar':
                    $resultado = $n1 + $n2;
                    echo "La suma de".$n1. "+" .$n2. "=" .$resultado;
                    break;

            case'restar':
                    $resultado= $n1 - $n2;
                    echo "La resta de".$n1. "-" .$n2. "=" .$resultado;
                    break;

            case'multiplicar':
                    $resultado= $n1 * $n2;
                    echo "La multiplicacion de".$n1. "*" .$n2. "=" .$resultado;
                    break;

            case'dividir':
                    $resultado= $n1 / $n2;
                    echo "La division de".$n1. "/" .$n2. "=" .$resultado;
                    break;

                    default:
                      echo "Error...";
                        break;
        }
    }

    ?>

</body>
</html>