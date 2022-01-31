<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad02_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $cadena="cadena";
            $patron="patron";
            $cadena=$_GET["cadena"];
            $patron=$_GET["patron"];
            echo"<form>
                <input type='text' name='cadena' value=$cadena>
                <input type='text' name='patron' value=$patron>
                <input type='submit'></form>";
            if(preg_match($patron,$cadena)){
                echo"<p>La cadena: $cadena tiene un patron de: $patron</p>";
            }else{
                echo"<p>La cadena: $cadena NO tiene un patron de: $patron</p>";
            }
       ?>
    </body>
</html>