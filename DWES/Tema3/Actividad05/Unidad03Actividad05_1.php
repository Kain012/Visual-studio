<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad05_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $veces=rand(1,10);
            $i1=400;
            $a1=120;
            $i2=800;
            echo("<svg height='1000' width='1000'>");
            for($i=0;$i<$veces;$i++){
                echo("<polygon points='$i1,$a1 $i2,800 0,800' style='fill:grey;stroke:blue;stroke-width:5' />");
                $i1=$i1-29;
                $a1=$a1+50;
                $i2=$i2-60;
            }
            echo("</svg>");
       ?>
    </body>
</html>