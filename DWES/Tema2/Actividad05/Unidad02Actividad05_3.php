<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad05_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>

        <?php
            $total=0;
            $jugador = true;
            //genera un numero random para decicir que jugador empieza.
            $decideRandom = random_int(0,1);
            //asigna el numero a un jugador y lo muestra.
            if($decideRandom == 0){
                $jugador=true;
                echo "<p>Jugador uno decide.</p>";
            }else{
                $jugador=false;
                echo "<p>Jugador dos decide.</p>";
            }
            //generea un numero random para decidir que palo escojer.
            $opcion = true;
            //asigna el numero a unn tipo y lo muestra.
            $paresNones = random_int(0,1);
            if($paresNones == 0){
                $opcion=true;
                echo "<p>El jugador quiere PARES.</p>";
            }else{
                $opcion=false;
                echo "<p>El jugador quiere NONES.</p>";
            }

            //crea un bucle que se ejecuta todas las veces necesarias para realizar todas las tiradas de cartas.
            for($i=0;$i<2;$i++){
                //generea los numeros random.
                $opcionRandom=random_int(1,5);
                //si es la primera tirada nos muestra esto antes de la mano.
                if($i == 0){
                    echo"<p>El jugador uno a sacado:</p>";
                }
                //si es la cuarta tirada nos uestra esto antes de la mano.
                if($i == 1){
                    echo"<p>El jugador dos a sacado:</p>";
                }
                //muestra la imagen correspondiente
                echo "<img src= ./img/Act5_3_".$opcionRandom.".jpg width=5% height=5%>\n";
                //hace la suma de los totales
                $total += $opcionRandom;

                //si la tirada es la tercera (fin del jugadoor uno) nos muestra el total.
                if($i == 2){
                    echo"<br>";
                    echo "<p>El jugador uno tiene un total de: $total.</p>";
                    $totaluno=$total;
                }
                //si la tirada es la segunda (fin del juego) nos muestra el total.
                if($i == 5){
                    echo"<br>";
                    echo "<p>El jugador dos tiene un total de: $total.</p>";
                }
            }
            //hace las comproabaciones de quien a ganado y lo muestra.
            if($jugador && $paresNones){
                if($total % 2 != 0){
                    echo "<p>Jugador uno gana.</p>";
                }else{
                    echo "<p>Jugador dos gana.</p>";   
                }
            }elseif($jugador && !$paresNones){
                if($total % 2 == 0){
                    echo "<p>Jugador dos gana.</p>";
                }else{
                    echo "<p>Jugador uno gana.</p>";
                }
            }elseif(!$jugador && $paresNones){
                if($total % 2 != 0){
                    echo "<p>Jugador dos gana.</p>";
                }else{
                    echo "<p>Jugador uno gana.</p>";
                }
            }elseif(!$jugador && !$paresNones){
                if($total % 2 == 0){
                    echo "<p>Jugador uno gana.</p>";
                }else{
                    echo "<p>Jugador dos gana.</p>";
                }
            }
            
        ?>
        
    </body>
</html>