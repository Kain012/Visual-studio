<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad04_3
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

            $ah=$hora*30;
            $am=$minuto*6;
            $as=$segundo*6;

            $rh=(pi()/180)*(90-($ah));
            $xh=150+(cos($rh)*55);
            $yh=150-(sin($rh)*55);

            $rm=(pi()/180)*(90-($am));
            $xm=150+(cos($rm)*75);
            $ym=150-(sin($rm)*75);
            
            $rs=(pi()/180)*(90-($as));
            $xs=150+(cos($rs)*95);
            $ys=150-(sin($rs)*95);
            //calculamos el lugar de las agujas.
            $rh=($hora)*30;
            $rm=($minuto)*6;
            $rs=($segundo)*6;
            //mostramos el reloj.
            echo("<circle cx='150' cy='150' r='145' stroke='blue' stroke-width='4' fill='white' />");
            echo("<line x1='150' y1='150' x2='$xh' y2='$yh' stroke='black' stroke-width='5' />");
            echo("<line x1='150' y1='150' x2='$xm' y2='$ym' stroke='red' stroke-width='4' />");
            echo("<line x1='150' y1='150' x2='$xs' y2='$ys' stroke='green' stroke-width='3' />");
            echo("<br><h1>".date('h:i:s')."</h1>");
            echo("$rh   $xh   $yh");
            ?>
    </body>
</html>