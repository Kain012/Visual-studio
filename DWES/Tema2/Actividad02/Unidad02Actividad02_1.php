<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad02_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
        $or=rand(1,20);
        $factorial = 1; 
        for ($i = 1; $i <= $or; $i++){ 
          $factorial = $factorial * $i; 
        }
        echo("El factorial de $or es $factorial");
       ?>
    </body>
</html>