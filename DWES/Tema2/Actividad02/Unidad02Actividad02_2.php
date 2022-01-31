<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad02_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $or=rand(0,11);
            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            $Dmes = array(31,28,31,30,31,30,31,31,30,31,30,31);
            echo("Para el número: ".($or+1).". El mes es: ".$meses[$or].". Con: ".$Dmes[$or]." dias.");
       ?>
    </body>
</html>