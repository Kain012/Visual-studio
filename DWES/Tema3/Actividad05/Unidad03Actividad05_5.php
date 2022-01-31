<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad05_5
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $cartasP1[100]=1;
            $cartasP2[100]=1;
            echo("<p>El crupier esta barajando...</p>");
            $impar=false;
            while(!$impar){
                $veces=rand(3,13);
                if($veces%2!=0){
                    $impar=true;
                }
            }
            $contadorP1=0;
            $contadorP2=0;
            for($i1=0;$i1<$veces;$i1++){
                $carta=rand(1,13);
                $jugador=rand(1,2);
                if($jugador==1){
                    $cartasP1[$contadorP1]=$carta;
                    $contadorP1++;
                }else{
                    $cartasP2[$contadorP2]=$carta;
                    $contadorP2++;
                }
            }
            if(count($cartasP1)>=1){
                echo("<p>Cartas del jugador uno:</p>");
                foreach($cartasP1 as $valor){
                    echo("<img src='./img/Act5_5_".$valor.".jpg' width=5% height=5%>");
                }
            }else{
                echo("<p>Mano del jugador uno sin cartas.</p>");
            }
            if(count($cartasP2)>=1){
                echo("<p>Cartas del jugador dos:</p>");
                foreach($cartasP2 as $valor){
                    echo("<img src='./img/Act5_5_".$valor.".jpg' width=5% height=5%>");
                }
            }else{
                echo("<p>Mano del jugador uno sin cartas.</p>");
            }
            echo("<p>El crupier esta quitando las cartas impares...</p>");
            if(count($cartasP2)>=1){
                foreach($cartasP1 as $indice => $valor){
                    if($valor%2!=0){
                        unset($cartasP1[$indice]);
                    }
                }
            }else{}
            if(count($cartasP2)>=1){
                foreach($cartasP2 as $indice => $valor){
                    if($valor%2!=0){
                        unset($cartasP2[$indice]);
                    }
                }
            }else{}
            $actual=0;
            $repetida=false;
            if(count($cartasP1)>=1){
                echo("<p>Cartas del jugador uno sin impares:</p>");
                foreach($cartasP1 as $valor){
                    echo("<img src='./img/Act5_5_".$valor.".jpg' width=5% height=5%>");
                    if($actual==$valor&&!$repetida){
                        $repetida=true;
                    }else{}
                    $actual=$valor;
                }
            }else{
                echo("<p>Mano del jugador uno sin cartas.</p>");
            }
            $actual=0;
            if(count($cartasP2)>=1){
                echo("<p>Cartas del jugador dos sin impares:</p>");
                foreach($cartasP2 as $valor){
                    echo("<img src='./img/Act5_5_".$valor.".jpg' width=5% height=5%>");
                    if($actual==$valor&&!$repetida){
                        $repetida=true;
                    }else{}
                    $actual=$valor;
                }
            }else{
                echo("<p>Mano del jugador dos sin cartas.</p>");
            }
            if($repetida){
                echo("<p>HAY DOS CARTAS IGUALES CONSECUTIVAS.</p>");
            }
            ?>
    </body>
    </html>