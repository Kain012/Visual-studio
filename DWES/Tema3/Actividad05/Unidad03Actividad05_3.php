<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad05_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            echo("<p>Jugador uno comience a tirar.</p>");
            $tiradasP1=rand(1,3);   
            for($i1=0;$i1<$tiradasP1;$i1++){
                $dadoP1=rand(1,6);   
                $numerosP1[$i1]=$dadoP1;
                echo("<img src='./img/Act5_3_".$numerosP1[$i1].".jpg' width=5% height=5%>");
            }
            rsort($numerosP1);   
            echo("<p>Jugador uno a acabado sus tiradas.</p><br><p>Jugador dos comience a tirar.</p>");
            $tiradasP2=rand(1,2);
            for($i2=0;$i2<$tiradasP2;$i2++){
                $dadoP2=rand(1,6);
                $numerosP2[$i2]=$dadoP2;
                echo("<img src='./img/Act5_3_".$numerosP2[$i2].".jpg' width=5% height=5%>");
            }   
            rsort($numerosP2);
            echo("<p>Jugador dos a acabado sus tiradas.</p>");   
            $unidadesP1=0;
            $unidadesP2=0;
            echo("<br><p>Empiezan las comprobaciones.</p>");
            $min=4;
            if(count($numerosP1)>count($numerosP2)){
                $min=count($numerosP2);
            }else{
                $min=count($numerosP1);
            }
            for($i3=0;$i3<$min;$i3++){
                echo("<p>Dado del jugador 1:</p>");
                echo("<img src='./img/Act5_3_".$numerosP1[$i3].".jpg' width=5% height=5%>");
                echo("<p>Dado del jugador 2:</p>");
                echo("<img src='./img/Act5_3_".$numerosP2[$i3].".jpg' width=5% height=5%>");
                if ($numerosP1[$i3]>$numerosP2[$i3]){
                    echo("<p>El Jugador 2 pierde una unidad.</p>");
                    $unidadesP2++;
                }else{
                    echo("<p>El Jugador 1 pierde una unidad.</p>");
                    $unidadesP1++;
                }
                echo("<br><p>RESULTADOS:</p>");
            }
            echo("<p>El jugador 1 ha perdido: $unidadesP1</p>");
            echo("<p>El jugador 2 ha perdido: $unidadesP2</p>");
            if($unidadesP1<$unidadesP2){
                echo("<p>EL JUGADOR UNO GANA.</p>");
            }else{
                echo("<p>EL JUGADOR DOS GANA.</p>");                
            }
            ?>
    </body>
</html>