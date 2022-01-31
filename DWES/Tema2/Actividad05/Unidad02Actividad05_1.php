<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad05_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
        $totaluno=0;
        $totaldos=0;
        $totaltres=0;
        $totalcuatro=0;
            for($i=0;$i<8;$i++){
                //genera los numeros random
                $opcionRandom=random_int(1,6);
                //si es la primera tirada nos muestra esto antes de las cartas y resetea el total
                if($i == 0){
                    echo"<p>El jugador uno a sacado:</p>";
                    $total=0;
                }
                //si es la tercera tirada nos muestra esto antes de las cartas y resetea el total
                if($i == 2){
                    echo"<p>El jugador dos a sacado:</p>";
                    $total=0;
                }
                //si es la quinta tirada nos muestra esto antes de las cartas y resetea el total
                if($i == 4){
                    echo"<p>El jugador tres a sacado:</p>";
                    $total=0;
                }
                //si es la septima tirada nos muestra esto antes de las cartas y resetea el total
                if($i == 6){
                    echo"<p>El jugador cuatro a sacado:</p>";
                    $total=0;
                }
                //muestra la imagen correspondiente
                echo "<img src=./img/Act5_1_".$opcionRandom.".jpg width=5% height=5%>\n";
                //hace la suma y guarda el total 
                $total += $opcionRandom;
                //si la tirada es la segunda (fin del jugador uno) nos muestra el total y lo guarda.
                if($i == 1){
                    echo"<br>";
                    echo "<p>El jugador uno tiene un total de: $total</p>";
                    $totaluno=$total;
                }
                //si la tirada es la cuarta (fin del jugador dos) nos muestra el total y lo guarda.
                if($i == 3){
                    echo"<br>";
                    echo "<p>El jugador dos tiene un total de: $total</p>";
                    $totaldos=$total;
                }
                if($i == 5){
                    echo"<br>";
                    echo "<p>El jugador tres tiene un total de: $total</p>";
                    $totaltres=$total;
                }
                if($i == 7){
                    echo"<br>";
                    echo "<p>El jugador cuatro tiene un total de: $total</p>";
                    $totalcuatro=$total;
                }
            }
            //hace las comprobaciones de quien a ganado y lo muestra
            if ($totaluno>$totaldos && $totaluno>$totaltres && $totaluno>$totalcuatro){
                echo "Jugador uno a ganado.";
            }elseif ($totaldos>$totaluno && $totaldos>$totaltres && $totaldos>$totalcuatro){
                echo "Jugador dos a ganado.";
            }elseif ($totaltres>$totaluno && $totaltres>$totaldos && $totaltres>$totalcuatro){
                echo "Jugador tres a ganado.";
            }elseif ($totalcuatro>$totaluno && $totalcuatro>$totaldos && $totalcuatro>$totaltres){
                echo "Jugador cuatro a ganado.";
            }
            else{
                echo "Hay un empate.";
            }
        ?>
        
    </body>
</html>