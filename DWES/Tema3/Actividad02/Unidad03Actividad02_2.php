<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad02_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //añadimos posibilidades en variables
            $texto1="33600";
            $texto2="24010";
            $texto3="336000";
            $texto4="3360";
            //añadimos el patron para comprobar
            $patron="/^(33)[[:digit:]]{3}$/";
            //comprobamos y mostramos todas las cadenas
            if(preg_match($patron,$texto1)){
                echo("<p>La cadena $texto1 es un codigo postal de Asturias.</p>\n");
            }else{
                echo("<p>La cadena $texto1 NO es un codigo postal de Asturias.</p>\n");
            }
            if(preg_match($patron,$texto2)){
                echo("<p>La cadena $texto2 es un codigo postal de Asturias.</p>\n");
            }else{
                echo("<p>La cadena $texto2 NO es un codigo postal de Asturias.</p>\n");
            }
            if(preg_match($patron,$texto3)){
                echo("<p>La cadena $texto3 es un codigo postal de Asturias.</p>\n");
            }else{
                echo("<p>La cadena $texto3 NO es un codigo postal de Asturias.</p>\n");
            }
            if(preg_match($patron,$texto4)){
                echo("<p>La cadena $texto4 es un codigo postal de Asturias.</p>\n");
            }else{
                echo("<p>La cadena $texto4 NO es un codigo postal de Asturias.</p>\n");
            }
       ?>
    </body>
</html>