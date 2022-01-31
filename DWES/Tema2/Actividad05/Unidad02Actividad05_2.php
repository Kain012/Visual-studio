<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad05_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
        $totaluno=0;
        $totaldos=0;
            //crea un bucle que se ejecuta todas las veces necesarias para realizar todas las tiradas de cartas
            for($i=0;$i<6;$i++){
                //genera los numeros random
                $opcionRandom=random_int(1,13);
                //si es la primera tirada nos muestra esto antes de las cartas y resetea el total
                if($i == 0){
                    echo"<p>El jugador uno a sacado:</p>";
                    $total=0;
                }
                //si es la cuarta tirada nos muestra esto antes de las cartas y resetea el total
                if($i == 3){
                    echo"<p>El jugador dos a sacado:</p>";
                    $total=0;
                }
                //muestra la imagen correspondiente
                echo "<img src= ./img/Act5_2_".$opcionRandom.".jpg width=5% height=5%>\n";
                //cambia las figuras por un diez para la suma
                if($opcionRandom>10){
                    $opcionRandom=10;
                }
                //hace la suma de los totales
                $total += $opcionRandom;

                //si la tirada es la tercera (fin del jugador uno) nos muestra el total y lo guarda.
                if($i == 2){
                    echo"<br>";
                    echo "<p>El jugador uno tiene un total de: $total.</p>";
                    $totaluno=$total;
                }
                //si la tirada es la sexta (fin del jugador dos) nos muestra el total y lo guarda.
                if($i == 5){
                    echo"<br>";
                    echo "<p>El jugador dos tiene un total de: $total.</p>";
                    $totaldos=$total;
                }
            }
            //hace las comprobaciones de quien a ganado y lo muestra
            if($totaluno>21 && $totaldos>21){
                echo "Ningun jugador gana.";
            }elseif($totaluno > 21){
                echo "Jugador dos gana.";
            }elseif($totaldos>21){
                echo "Jugador uno gana.";
            }elseif($totaluno == $totaldos){
                echo "Jugador uno gana.";
            }elseif($totaluno>$totaldos ){
                echo "Jugador uno gana.";
            }else{
                echo "Jugador dos gana.";
            }
        ?>
        
    </body>
</html>