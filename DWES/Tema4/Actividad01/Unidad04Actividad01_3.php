<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad01_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
            <input type="number" name="num1">
            <input type="number" name="num2">
            <input type="submit">
        </form>
        <?php
            $num1=0;
            $num2=1;
            $num1=$_GET["num1"];
            $num2=$_GET["num2"];
            $suma=$num1+$num2;
            $resta=$num1-$num2;
            $multiplicacion=$num1*$num2;
            $division=$num1/$num2;
            echo("<p>Los operandos son $num1 y $num2.</p><br>");
            echo("<p>La suma es: $suma.</p>");
            echo("<p>La resta es: $resta.</p>");
            echo("<p>La multiplicación es: $multiplicacion.</p>");
            echo("<p>La división es: $division.</p>");
       ?>
    </body>
</html>