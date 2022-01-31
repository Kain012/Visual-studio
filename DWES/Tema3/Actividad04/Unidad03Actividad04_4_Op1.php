<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
        $contador[1]=0;$contador[2]=0;$contador[3]=0;$contador[4]=0;$contador[5]=0;$contador[6]=0;$contador[7]=0;$contador[8]=0;$contador[9]=0;$contador[10]=0;
            $min=11;
            echo("<table>");
            for($i1=0;$i1<2;$i1++){
                echo("<tr>");
                for($j1=0;$j1<2;$j1++){
                    $imagenrandom=rand(1,10);
                    echo("<td>");
                    echo("<img src='./img/Act4_4_$imagenrandom.jpg' width=50px height=50px>");
                    echo("</td>");
                    $tabla1[$i1][$j1]=$imagenrandom;
                    if($tabla1[$i1][$j1]==1)$contador[1]=1;
                    if($tabla1[$i1][$j1]==2)$contador[2]=1;
                    if($tabla1[$i1][$j1]==3)$contador[3]=1;
                    if($tabla1[$i1][$j1]==4)$contador[4]=1;
                    if($tabla1[$i1][$j1]==5)$contador[5]=1;
                    if($tabla1[$i1][$j1]==6)$contador[6]=1;
                    if($tabla1[$i1][$j1]==7)$contador[7]=1;
                    if($tabla1[$i1][$j1]==8)$contador[8]=1;
                    if($tabla1[$i1][$j1]==9)$contador[9]=1;
                    if($tabla1[$i1][$j1]==10)$contador[10]=1;
                    if($min>$imagenrandom){
                        $min=$imagenrandom;
                    }
                }
                echo("</tr>");
            }
            echo("</table>");
            echo("<br>");
            echo("<table>");
            for($i2=0;$i2<2;$i2++){
                echo("<tr>");
                for($j2=0;$j2<2;$j2++){
                    $imagenrandom=rand(1,10);
                    echo("<td>");
                    echo("<img src='./img/Act4_4_$imagenrandom.jpg' width=50px height=50px>");
                    echo("</td>");
                    $tabla2[$i2][$j2]=$imagenrandom;
                    if($tabla2[$i2][$j2]==1)$contador[1]=1;
                    if($tabla2[$i2][$j2]==2)$contador[2]=1;
                    if($tabla2[$i2][$j2]==3)$contador[3]=1;
                    if($tabla2[$i2][$j2]==4)$contador[4]=1;
                    if($tabla2[$i2][$j2]==5)$contador[5]=1;
                    if($tabla2[$i2][$j2]==6)$contador[6]=1;
                    if($tabla2[$i2][$j2]==7)$contador[7]=1;
                    if($tabla2[$i2][$j2]==8)$contador[8]=1;
                    if($tabla2[$i2][$j2]==9)$contador[9]=1;
                    if($tabla2[$i2][$j2]==10)$contador[10]=1;
                    if($min>$imagenrandom){
                        $min=$imagenrandom;
                    }
                }
                echo("</tr>");
            }
            echo("</table>");
            echo("<br>");
            /*
                0-sale en la tabla de abajo (3x3).
                1-NO sale en la tabla de abajo(3x3).
                $contador[1]=0;
                $contador[2]=0;
                $contador[3]=0;
                $contador[4]=0;
                $contador[5]=0;
                $contador[6]=0;
                $contador[7]=0;
                $contador[8]=0;
                $contador[9]=0;
                $contador[10]=0; 
            */
            echo("<table>");
            $num=1;
            $tope=3;
            for($i2=0;$i2<3;$i2++){
                echo("<tr>");
                for($j2=0;$tope!=0;$j2++){
                    if($num!=$min){
                        if($num<11){
                            if($num+$contador[$num]!=$num+1){
                            echo("<td>");
                            echo("<img src='./img/Act4_4_".$num.".jpg' width=50px height=50px>");
                            echo("</td>");
                            $tope--;
                            }
                        }
                        else{
                            $tope--;
                        }
                    }
                    $num++;
                }
                echo("</tr>");
                $tope=3;
            }
            echo("</table>");
       ?>
    </body>
</html>