<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad04_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //refresca la pagina todo el tiempo.
            header("Refresh: 1; URL='Unidad02Actividad04_1.php'");
            //creamos el contenedor para el reloj.
            echo("<svg witdh ='300' height='300'>");
            //guarda las horas, minutos y segundos.
            $hora=date('h');
            $minuto=date('i');
            $segundo=date('s');
            //calculamos el lugar de las agujas.
            $rh=($hora)*30;
            $rm=($minuto)*6;
            $rs=($segundo)*6;
            //mostramos el reloj.
            echo("<circle cx='150' cy='150' r='145' stroke='blue' stroke-width='4' fill='white' />");
            echo("<line x1='150' y1='150' x2='150' y2='70' stroke='black' stroke-width='5' transform='rotate($rh, 150,150)' />");
            echo("<line x1='150' y1='150' x2='150' y2='50' stroke='red' stroke-width='4' transform='rotate($rm, 150,150)' />");
            echo("<line x1='150' y1='150' x2='150' y2='30' stroke='green' stroke-width='3' transform='rotate($rs, 150,150)' />");
            ?>
    </body>
</html>