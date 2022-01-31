<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad02_3_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
                <input type='number' name='num1' min=1 max=1000>
                <input type='number' name='num2' min=1 max=1000>
                <input type='submit'></form>
        <?php
            $or1=$_GET["num1"];
            $or2=$_GET["num2"];
            echo("<p>El primer numero es: $or1</p>");
            echo("<p>El segundo numero es: $or2</p>");
            if($or1%$or2==0){
                echo("<p>El primer numero es multiplo del segundo numero.</p>");
            }
            if($or2%$or1==0){
                echo("<p>El segundo numero es multiplo del primer numero.</p>");
            }if($or1%$or2!=0 and $or2%$or1!=0){
                echo("<p>Ningun numero es multiplo.</p>");
            }
       ?>
    </body>
</html>