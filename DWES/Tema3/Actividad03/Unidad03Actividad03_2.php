<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad03_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
        //creamos las variables para guardar la mayor carta y la menor.
        $mayor=0;
        $menor=14;
        //creamos el array donde guarda las imagenes.
        $imagenes = array(1=>"./img/Act3_2_1.jpg",2=>"./img/Act3_2_2.jpg",3=>"./img/Act3_2_3.jpg",4=>"./img/Act3_2_4.jpg",5=>"./img/Act3_2_5.jpg",6=>"./img/Act3_2_6.jpg",7=>"./img/Act3_2_7.jpg",8=>"./img/Act3_2_8.jpg",9=>"./img/Act3_2_9.jpg",10=>"./img/Act3_2_10.jpg",11=>"./img/Act3_2_11.jpg",12=>"./img/Act3_2_12.jpg",13=>"./img/Act3_2_13.jpg");
            //crea un bucle que se ejecuta todas las veces necesarias para realizar todas las tiradas de cartas.
            for($i=0;$i<5;$i++){
                //genera los numeros random y los muestra.
                $opcionRandom=rand(1,13);
                echo ("<img src='".$imagenes[$opcionRandom]."' width=5% height=5%>\n");
                //guarda la minima carta.
                if ($opcionRandom<$menor){
                    $menor=$opcionRandom;
                }
                //guarda la maxima carta.
                if ($opcionRandom>$mayor){
                    $mayor=$opcionRandom;
                }
            }
            //creamos el array donde guarda los nombres de las cartas.
            $carta = array(1=>"AS",2=>"DOS",3=>"TRES",4=>"CUATRO",5=>"CINCO",6=>"SEIS",7=>"SIETE",8=>"OCHO",9=>"NUEVE",10=>"DIEZ",11=>"JOKER",12=>"REINA",13=>"REY");
            //mostramos todo por pantalla.
            echo("<p>La carta mas alta es:</p>");
            echo("<p>El ".$carta[$mayor]." de corazones</p>");
            echo("<p>La carta mas baja es:</p>");
            echo("<p>El ".$carta[$menor]." de corazones</p>");
        ?>
        
    </body>
</html>