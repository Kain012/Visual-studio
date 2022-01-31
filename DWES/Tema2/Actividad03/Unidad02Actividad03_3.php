<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad03_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
            $opcionRandom1=random_int(0,6);
            echo ("<img src=./img/Act3_3_".$opcionRandom1.".jpg width=5% height=5%>\n");
            if($opcionRandom1==6){
                $opcionRandom2=$opcionRandom1-6;
            }else{
                $opcionRandom2=$opcionRandom1+1;
            }
            echo ("<img src=./img/Act3_3_".$opcionRandom2.".jpg width=5% height=5%>\n");
            echo ("<p>$opcionRandom1/$opcionRandom2 enlaza con $opcionRandom2/".($opcionRandom2+1)."</p>");
        ?>
        
    </body>
</html>