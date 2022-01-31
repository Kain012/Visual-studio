<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad02_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //añadimos posibilidades en variables
            $texto1="saul31_alsafp@gmail.com";
            $texto2="saul31_alsafp@gmail.org";
            $texto3="Saul31_alsafp@gmail.com";
            $texto4="saul31_alsafp@@gmail.com";
            $texto5="saul31_alsafp@Gmail.com";
            $texto6="saul31_alsafp@1gmail.com";
            $texto7="saul31_alsafp@gmail.es";
            //añadimos el patron para comprobar
            $patron="/^([a-z]([a-z0-9_]+))(@){1}([a-z]([a-z0-9_]+))((.com)$|(.org)$)/";
            //comprobamos y mostramos todas las cadenas
            if(preg_match($patron,$texto1)){
                echo("<p>La cadena $texto1 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto1 NO es un correo valido.</p>\n");
            }
            if(preg_match($patron,$texto2)){
                echo("<p>La cadena $texto2 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto2 NO es un correo valido.</p>\n");
            }
            if(preg_match($patron,$texto3)){
                echo("<p>La cadena $texto3 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto3 NO es un correo valido.</p>\n");
            }
            if(preg_match($patron,$texto4)){
                echo("<p>La cadena $texto4 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto4 NO es un correo valido.</p>\n");
            }
            if(preg_match($patron,$texto5)){
                echo("<p>La cadena $texto5 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto5 NO es un correo valido.</p>\n");
            }
            if(preg_match($patron,$texto6)){
                echo("<p>La cadena $texto6 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto6 NO es un correo valido.</p>\n");
            }
            if(preg_match($patron,$texto7)){
                echo("<p>La cadena $texto7 es un correo valido.</p>\n");
            }else{
                echo("<p>La cadena $texto7 NO es un correo valido.</p>\n");
            }
       ?>
    </body>
</html>