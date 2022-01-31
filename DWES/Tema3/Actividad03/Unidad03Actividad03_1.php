<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad03_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //creamos la variable total.
            $total=0;
            //creamos los randoms de los dados.
            $opcionRandom1=rand(1,6);
            $opcionRandom2=rand(1,6);
            //creamos el array donde guarda las imagenes.
            $cartas = array(1=>"./img/Act3_1_1.jpg",2=>"./img/Act3_1_2.jpg",3=>"./img/Act3_1_3.jpg",4=>"./img/Act3_1_4.jpg",5=>"./img/Act3_1_5.jpg",6=>"./img/Act3_1_6.jpg");
            //Sumamos el total.
            $total=$opcionRandom1 + $opcionRandom2;
            //mostramos todo por pantalla.
            echo ("<p>Los dados son:</p>");
            echo ("<img src='$cartas[$opcionRandom1]' width=5% height=5%>\n");
            echo ("<img src='$cartas[$opcionRandom2]' width=5% height=5%>\n");
            echo ("<p>El total es: $total</p>");
       ?>
    </body>
</html>