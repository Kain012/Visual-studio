<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad02_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $or=rand(0,2021);
            $resultado= $or%4;
            if($resultado==0){
                echo("El año $or es un año bisiesto.");
            }
            else{
                echo("El año $or NO es un año bisiesto.");
            }
       ?>
    </body>
</html>