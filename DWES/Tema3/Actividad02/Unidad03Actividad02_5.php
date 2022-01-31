<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad02_5
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //añadimos posibilidades en variables
            $texto1="holaQueTalEstas";
            $texto2="holaQueTal";
            $texto3="hola";
            $texto4="h";
            $texto5="HolaQueTalEstas";
            $texto6="hQueTalEstas";
            $texto7="holaQueTalEstasTu";
            //añadimos el patron para comprobar
            $patron="/^[a-z][a-z0-9]{1,}([A-Z]{1}[a-z0-9]{1,}){0,3}$/";
            //comprobamos y mostramos todas las cadenas
            if(preg_match($patron,$texto1)){
                echo("<p>La cadena $texto1 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto1 NO es un CamelCase valido.</p>\n");
            }
            if(preg_match($patron,$texto2)){
                echo("<p>La cadena $texto2 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto2 NO es un CamelCase valido.</p>\n");
            }
            if(preg_match($patron,$texto3)){
                echo("<p>La cadena $texto3 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto3 NO es un CamelCase valido.</p>\n");
            }
            if(preg_match($patron,$texto4)){
                echo("<p>La cadena $texto4 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto4 NO es un CamelCase valido.</p>\n");
            }
            if(preg_match($patron,$texto5)){
                echo("<p>La cadena $texto5 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto5 NO es un CamelCase valido.</p>\n");
            }
            if(preg_match($patron,$texto6)){
                echo("<p>La cadena $texto6 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto6 NO es un CamelCase valido.</p>\n");
            }
            if(preg_match($patron,$texto7)){
                echo("<p>La cadena $texto7 es un CamelCase valido.</p>\n");
            }else{
                echo("<p>La cadena $texto7 NO es un CamelCase valido.</p>\n");
            }
       ?>
    </body>
</html>