<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad01_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $or=rand(1,10);
            echo("<table border=solid 5px black>");
                echo("<tr>");
                    echo("<td> $or </td>");
                    echo("<td>+</td>");
                    echo("<td>-</td>");
                    echo("<td>*</td>");
                    echo("<td>/</td>");
                    echo("<td>%</td>");
                echo("</tr>");
                for($i=1;$i<=10;$i++){
                    $V1=$i;
                    echo("<tr>");
                        echo("<td> $V1 </td>");
                        echo("<td>".($or + $V1)."</td>");
                        echo("<td>".($or - $V1)."</td>");
                        echo("<td>".($or * $V1)."</td>");
                        echo("<td>".floor($or / $V1)."</td>");
                        echo("<td>".($or % $V1)."</td>");
                    echo("</tr>");
                }
            echo("</table>");
       ?>
    </body>
</html>