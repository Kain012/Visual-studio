<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad05_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            echo("<p>El crupier esta barajando...</p>");
            $par=false;
            while(!$par){
                $veces=rand(4,12);
                if($veces%2==0){
                    $par=true;
                }
            }
            $contadorP1=0;
            $contadorP2=0;
            for($i1=0;$i1<$veces;$i1++){
                $carta=rand(1,13);
                $jugador=rand(1,2);
                if($jugador==1){
                    $CartasP1[$contadorP1]=$carta;
                    $contadorP1++;
                }else{
                    $CartasP2[$contadorP2]=$carta;
                    $contadorP2++;
                }
            }
            echo("<p>Cartas del jugador uno:</p>");
            foreach($CartasP1 as $valor){
                echo("<img src='./img/Act5_4_".$valor.".jpg' width=5% height=5%>");
            }
            echo("<p>Cartas del jugador dos:</p>");
            foreach($CartasP2 as $valor){
                echo("<img src='./img/Act5_4_".$valor.".jpg' width=5% height=5%>");
            }
       ?>
    </body>
</html>