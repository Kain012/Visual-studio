<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad03_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //creamos el random.
            $or=rand(1,5);
            //guardamos los datos del Leon.
            $animales["Leon"]["Nombre"]="Panthera leo";
            $animales["Leon"]["Imagen"]="<img src='./img/Act3_4_leon.jpg' width=25% heigth=25%>";
            $animales["Leon"]["Wiki"]="<a href='https://es.wikipedia.org/wiki/Panthera_leo'>".$animales["Leon"]["Nombre"]."</a>";
            //guardamos los datos del Gorila.
            $animales["Gorila"]["Nombre"]="Gorilla";
            $animales["Gorila"]["Imagen"]="<img src='./img/Act3_4_gorila.jpg' width=25% heigth=25%>";
            $animales["Gorila"]["Wiki"]="<a href='https://es.wikipedia.org/wiki/Gorilla'>".$animales["Gorila"]["Nombre"]."</a>";
            //guardamos los datos del Mono.
            $animales["Mono"]["Nombre"]="Mono";
            $animales["Mono"]["Imagen"]="<img src='./img/Act3_4_mono.jpg' width=25% heigth=25%>";
            $animales["Mono"]["Wiki"]="<a href='https://es.wikipedia.org/wiki/Mono'>".$animales["Mono"]["Nombre"]."</a>";
            //guardamos los datos de la Girafa.
            $animales["Girafa"]["Nombre"]="Giraffa camelopardalis";
            $animales["Girafa"]["Imagen"]="<img src='./img/Act3_4_girafa.jpg' width=25% heigth=25%>";
            $animales["Girafa"]["Wiki"]="<a href='https://es.wikipedia.org/wiki/Giraffa_camelopardalis'>".$animales["Girafa"]["Nombre"]."</a>";
            //guardamos los datos del Koala.
            $animales["Koala"]["Nombre"]="Phascolarctos cinereus";
            $animales["Koala"]["Imagen"]="<img src='./img/Act3_4_koala.jpg' width=25% heigth=25%>";
            $animales["Koala"]["Wiki"]="<a href='https://es.wikipedia.org/wiki/Phascolarctos_cinereus'>".$animales["Koala"]["Nombre"]."</a>";
            //mostramos todo por pantalla.
            switch($or){
            case 1:
                echo("El animal ".$animales["Leon"]["Nombre"].".<br>");
                echo($animales["Leon"]["Imagen"].".<br>");
                echo("Mas información ".$animales["Leon"]["Wiki"].".<br>");
                break;
            case 2:
                echo("El animal ".$animales["Gorila"]["Nombre"].".<br>");
                echo($animales["Gorila"]["Imagen"].".<br>");
                echo("Mas información ".$animales["Gorila"]["Wiki"].".<br>");
                break;
            case 3:
                echo("El animal ".$animales["Mono"]["Nombre"].".<br>");
                echo($animales["Mono"]["Imagen"].".<br>");
                echo("Mas información ".$animales["Mono"]["Wiki"].".<br>");
                break;
            case 4:
                echo("El animal ".$animales["Girafa"]["Nombre"].".<br>");
                echo($animales["Girafa"]["Imagen"].".<br>");
                echo("Mas información ".$animales["Girafa"]["Wiki"].".<br>");
                break;
            case 5:
                echo("El animal ".$animales["Koala"]["Nombre"].".<br>");
                echo($animales["Koala"]["Imagen"].".<br>");
                echo("Mas información ".$animales["Koala"]["Wiki"].".<br>");
                break;
            default:
                break;
            }
       ?>
    </body>
</html>