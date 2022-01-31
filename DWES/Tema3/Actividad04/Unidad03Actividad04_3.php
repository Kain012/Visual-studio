<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $veces=rand(5,10);
            for($i=0;$i<$veces;$i++){
                $numerorandom=rand(1,13);
                $linea[$i]=$numerorandom;
                echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
            }
            echo("<br>");
            $posicion=0;
            foreach($linea as $valor){
                $posicion++;
                if(!in_array($valor,$lineafinal)){
                    $lineafinal[$posicion]=$valor;
                }
            }
            $cantidad=count($lineafinal);
            for($j=0;$j<$cantidad;$j++){
                echo("<img src='./img/Act4_3_".$lineafinal[$j].".jpg' width=5% height=5%>");
            }
       ?>
    </body>
</html>