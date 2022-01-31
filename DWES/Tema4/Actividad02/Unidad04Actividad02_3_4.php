<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad02_3_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
                <input type='number' name='num1' min=1 max=99999999>
                <input type='submit'>
        </form>
        <?php
            $or=$_GET["num1"];
            $ormil=floor($or/1000000);
            $oruni=floor(($or-($ormil*1000000))/1000);
            $ormili=floor(($or-($ormil*1000000)-($oruni*1000)));
            echo("$or milimetros son: $ormil kilometros, $oruni metros, $ormili milimetros.");
        ?>
    </body>
</html>