<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad02_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //añadimos posibilidades en variables
            $texto1="https://dominio.org";
            $texto2="http://server.coms";
            $texto3="https://dominio.organ";
            $texto4="htts://dominio.org";
            $texto5="https:/a/dominio.org";
            $texto6="https://Dominio.org";
            //añadimos el patron para comprobar
            $patron="/^(http|https)\:\/\/[a-z][a-z0-9]+[a-z]\.([a-z]){2,4}$/";
            //comprobamos y mostramos todas las cadenas
            if(preg_match($patron,$texto1)){
                echo("<p>La cadena $texto1 es un dominio valido.</p>\n");
            }else{
                echo("<p>La cadena $texto1 NO es un dominio valido.</p>\n");
            }
            if(preg_match($patron,$texto2)){
                echo("<p>La cadena $texto2 es un dominio valido.</p>\n");
            }else{
                echo("<p>La cadena $texto2 NO es un dominio valido.</p>\n");
            }
            if(preg_match($patron,$texto3)){
                echo("<p>La cadena $texto3 es un dominio valido.</p>\n");
            }else{
                echo("<p>La cadena $texto3 NO es un dominio valido.</p>\n");
            }
            if(preg_match($patron,$texto4)){
                echo("<p>La cadena $texto4 es un dominio valido.</p>\n");
            }else{
                echo("<p>La cadena $texto4 NO es un dominio valido.</p>\n");
            }
            if(preg_match($patron,$texto5)){
                echo("<p>La cadena $texto5 es un dominio valido.</p>\n");
            }else{
                echo("<p>La cadena $texto5 NO es un dominio valido.</p>\n");
            }
            if(preg_match($patron,$texto6)){
                echo("<p>La cadena $texto6 es un dominio valido.</p>\n");
            }else{
                echo("<p>La cadena $texto6 NO es un dominio valido.</p>\n");
            }
       ?>
    </body>
</html>