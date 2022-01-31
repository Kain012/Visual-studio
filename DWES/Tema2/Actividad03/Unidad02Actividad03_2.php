<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad03_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
        $mayor=0;
        $menor=15;
            //crea un bucle que se ejecuta todas las veces necesarias para realizar todas las tiradas de cartas
            for($i=0;$i<5;$i++){
                //genera los numeros random
                $opcionRandom=rand(1,13);
                echo ("<img src=./img/Act3_2_".$opcionRandom.".jpg width=5% height=5%>\n");
                //guarda la minima carta
                if ($opcionRandom<$menor){
                    $menor=$opcionRandom;
                }
                //guarda la maxima carta
                if ($opcionRandom>$mayor){
                    $mayor=$opcionRandom;
                }
            }
            $carta = array("AS","DOS","TRES","CUATRO","CINCO","SEIS","SIETE","OCHO","NUEVE","DIEZ","JOKER","REINA","REY");
            echo("<p>La carta mas alta es:</p>");
            echo("<p>El ".$carta[$mayor-1]." de corazones</p>");
            echo("<p>La carta mas baja es:</p>");
            echo("<p>El ".$carta[$menor-1]." de corazones</p>");
        ?>
        
    </body>
</html>