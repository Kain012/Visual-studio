<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad01_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $or=rand(1,99999999);
            $ormil=floor($or/1000000);
            $oruni=floor(($or-($ormil*1000000))/1000);
            $ormili=floor(($or-($ormil*1000000)-($oruni*1000)));
            echo("$or milimetros son: $ormil kilometros, $oruni metros, $ormili milimetros.")
       ?>
    </body>
</html>