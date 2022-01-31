<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_5
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $tiradas=rand(5,10);
            for($i=0;$i<$tiradas;$i++){
                $dadorand=rand(1,6);
                $matriz[$i]=$dadorand;
                echo("<img src='./img/Act4_5_".$matriz[$i].".jpg' width=5% height=5%>");
            }
            echo("<br>");
            rsort($matriz);
            for($j=0;$j<$tiradas;$j++){
                echo("<img src='./img/Act4_5_".$matriz[$j].".jpg' width=5% height=5%>");
            }
       ?>
    </body>
</html>