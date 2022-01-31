<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad03_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $total=0;
            $opcionRandom1=rand(1,6);
            $opcionRandom2=rand(1,6);
            $total=$opcionRandom1 + $opcionRandom2;
            echo ("<p>Los dados son:</p>");
            echo ("<img src=./img/Act3_1_".$opcionRandom1.".jpg width=5% height=5%>\n");
            echo ("<img src=./img/Act3_1_".$opcionRandom2.".jpg width=5% height=5%>\n");
            echo ("<p>El total es: $total</p>");
       ?>
    </body>
</html>