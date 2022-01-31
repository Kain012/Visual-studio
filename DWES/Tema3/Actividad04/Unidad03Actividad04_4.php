<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $posicion=0;
            echo("<table border=1>");
            for($i1=0;$i1<2;$i1++){
                echo("<tr>");
                for($j1=0;$j1<2;$j1++){
                    $posicion++;
                    $imagenrandom=rand(1,10);
                    echo("<td><img src='./img/Act4_4_$imagenrandom.jpg' width=50px height=50px></td>");
                    $tabla1[$posicion]=$imagenrandom;
                }
                echo("</tr>");
            }
            echo("</table><br><table  border=1>");
            $posicion=0;
            for($i2=0;$i2<2;$i2++){
                echo("<tr>");
                for($j2=0;$j2<2;$j2++){
                    $imagenrandom=rand(1,10);
                    echo("<td><img src='./img/Act4_4_$imagenrandom.jpg' width=50px height=50px></td>");
                    $tabla2[$posicion]=$imagenrandom;
                    $posicion++;
                }
                echo("</tr>");
            }
            echo("</table><br><table  border=1>");
            $tablaf=array_merge($tabla1,$tabla2);
            $tablaf=array_unique($tablaf);
            sort($tablaf);
            $posicion=0;
            echo("<tr>");
            foreach($tablaf as $valor){
                if($posicion%3==0){
                    echo("</tr><tr>");
                }
                echo("<td><img src='./img/Act4_4_$valor.jpg' width=50px height=50px></td>");
                $posicion++;
            }
            echo("</tr>");
            echo("</table>");
       ?>
    </body>
</html>