<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $imagenaborrar=rand(1,6);
            $conteo=0;
            echo("<table>");
            for($i=0;$i<5;$i++){
                echo("<tr>");
                for($j=0;$j<5;$j++){
                    $imagenrandom=rand(1,10);
                    echo("<td>");
                    echo("<img src='./img/Act4_2_$imagenrandom.jpg' width=50px height=50px>");
                    echo("</td>");
                    $tabla[$i][$j]=$imagenrandom;
                    if($tabla[$i][$j]==$imagenaborrar){
                        $conteo++;
                    }
                }
                echo("</tr>");
            }
            echo("</table>");
            $max=$conteo;
            $conteo=0;
            echo("<p>La imagen a borrar es: <img src='./img/Act4_2_$imagenaborrar.jpg' width=3% height=3%></p>");
            echo("<table>");
            for($i2=0;$i2<5;$i2++){
                echo("<tr>");
                for($j2=0;$j2<5;$j2++){
                    echo("<td>");
                    if($tabla[$i2][$j2]!=$imagenaborrar){
                        echo("<img src='./img/Act4_2_".$tabla[$i2][$j2].".jpg' width=50px height=50px>");
                    }
                    elseif($conteo==0||$conteo==$max-1){
                        echo("");
                        unset($tabla[$i2][$j2]);
                        $conteo++;
                    }else{
                        echo("<img src='./img/Act4_2_".$tabla[$i2][$j2].".jpg' width=50px height=50px>");
                        $conteo++;
                    }
                    echo("</td>");
                }
                echo("</tr>");
            }
            echo("</table>");
       ?>
    </body>
</html>