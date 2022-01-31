<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad03_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
            //creamos los randoms de las fichas.
            $opcionRandom1=rand(0,6);
            //creamos el array donde guarda las imagenes.
            $ficha = array(0=>"./img/Act3_3_0.jpg",1=>"./img/Act3_3_1.jpg",2=>"./img/Act3_3_2.jpg",3=>"./img/Act3_3_3.jpg",4=>"./img/Act3_3_4.jpg",5=>"./img/Act3_3_5.jpg",6=>"./img/Act3_3_6.jpg");
            //mostramos la imagen1 por pantalla.
            echo ("<img src='".$ficha[$opcionRandom1]."' width=5% height=5%>\n");
            //conseguimos la ficha siguiente.
            if($opcionRandom1==6){
                $opcionRandom2=$opcionRandom1-6;
                $opcionRandom3=$opcionRandom2+1;
            }else{
                $opcionRandom2=$opcionRandom1+1;
                $opcionRandom3=$opcionRandom2+1;
            }
            if($opcionRandom3==7){
                $opcionRandom3=0;
            }
            //mostramos todo por pantalla.
            echo ("<img src='".$ficha[$opcionRandom2]."' width=5% height=5%>\n");
            echo ("<p>$opcionRandom1/$opcionRandom2 enlaza con $opcionRandom2/".$opcionRandom3."</p>");
        ?>
        
    </body>
</html>