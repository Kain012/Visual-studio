<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad01_4_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
            <input type="number" name="año" min=0>
            <input type="submit">
        </form>
        <?php
            $or=$_GET["año"];
            $resultado= $or%4;
            if($resultado==0){
                echo("<p>El año $or es un año bisiesto.</p>");
            }
            else{
                echo("<p>El año $or NO es un año bisiesto.</p>");
            }
       ?>
    </body>
</html>