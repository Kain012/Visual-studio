<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad05_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $veces=rand(1,10);
            $i1=200;
            $a1=20;
            $i2=20;
            $a2=156;
            $i3=320;//220
            $i4=380;//230
            $a4=156;
            echo("<svg height='1000' width='1000'>");
            for($i=0;$i<$veces;$i++){
                echo("<polygon points='$i1,$a1 $i2,$a2 80,396 $i3,396 $i4,$a4' style='fill:grey;stroke:blue;stroke-width:5;'/>");
                $i1=$i1-5;
                $a1=$a1+23;
                $i2=$i2+4;
                $a2=$a2+15;
                $i3=$i3-11;
                $i4=$i4-15;
                $a4=$a4+15;
            }
            echo("</svg>");
       ?>
    </body>
</html>