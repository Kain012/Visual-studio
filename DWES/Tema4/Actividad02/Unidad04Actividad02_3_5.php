<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad02_3_5
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
                <input type='number' name='num1' min=1 max=999999>
                <input type='submit'></form>
        <?php
            $or=$_GET["num1"];
            $orcm=floor($or/100000);
            $ordm=floor(($or-($orcm*100000))/10000);
            $orum=floor(($or-($orcm*100000)-($ordm*10000))/1000);
            $orc=floor(($or-($orcm*100000)-($ordm*10000)-($orum*1000))/100);
            $ord=floor(($or-($orcm*100000)-($ordm*10000)-($orum*1000)-($orc*100))/10);
            $oru=floor($or-($orcm*100000)-($ordm*10000)-($orum*1000)-($orc*100)-($ord*10));
            echo("$or es igual a $orcm centenas de millar, mas $ordm decenas de millar, mas $orum unidades de millar, mas $orc centenas, mas $ord decenas, mas $oru unidades.");
        ?>
    </body>
</html>