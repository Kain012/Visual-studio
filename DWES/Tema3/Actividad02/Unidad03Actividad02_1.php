<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad02_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //añadimos posibilidades en variables
            $texto1="1234E6789";
            $texto2="ABCD5FGHI";
            $texto3="123E6789";
            $texto4="1234E789";
            $texto5="01234E6789";
            $texto6="1234E678910";
            //añadimos el patron para comprobar
            $patron="/^[[:digit:]]{4}([A-Z])[[:digit:]]{4}$/";
            //comprobamos y mostramos todas las cadenas
            if(preg_match($patron,$texto1)){
                echo("<p>La cadena $texto1 son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }else{
                echo("<p>La cadena $texto1 NO son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }
            if(preg_match($patron,$texto2)){
                echo("<p>La cadena $texto2 son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }else{
                echo("<p>La cadena $texto2 NO son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }
            if(preg_match($patron,$texto3)){
                echo("<p>La cadena $texto3 son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }else{
                echo("<p>La cadena $texto3 NO son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }
            if(preg_match($patron,$texto4)){
                echo("<p>La cadena $texto4 son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }else{
                echo("<p>La cadena $texto4 NO son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }
            if(preg_match($patron,$texto5)){
                echo("<p>La cadena $texto5 son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }else{
                echo("<p>La cadena $texto5 NO son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }
            if(preg_match($patron,$texto6)){
                echo("<p>La cadena $texto6 son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }else{
                echo("<p>La cadena $texto6 NO son 9 caracteres con 4 digitos una mayuscula y 4 digitos.</p>\n");
            }
       ?>
    </body>
</html>