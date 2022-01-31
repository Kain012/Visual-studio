<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_3
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $veces=rand(5,10);
            for($i=0;$i<$veces;$i++){
                $numerorandom=rand(1,13);
                $linea[$i]=$numerorandom;
                echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
            }
            echo("<br>");
            $contador1=0;$contador2=0;$contador3=0;$contador4=0;$contador5=0;$contador6=0;$contador7=0;$contador8=0;$contador9=0;$contador10=0;$contador11=0;$contador12=0;$contador13=0;
            for($i=0;$i<$veces;$i++){
                switch($linea[$i]){
                    case 1:
                        if($contador1==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador1++;
                        break;
                    case 2:
                        if($contador2==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador2++;
                        break;
                    case 3:
                        if($contador3==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador3++;
                    break;
                    case 4:
                        if($contador4==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador4++;
                    break;
                    case 5:
                        if($contador5==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador5++;
                    break;
                    case 6:
                        if($contador6==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador6++;
                    break;
                    case 7:
                        if($contador7==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador7++;
                    break;
                    case 8:
                        if($contador8==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador8++;
                    break;
                    case 9:
                        if($contador9==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador9++;
                    break;
                    case 10:
                        if($contador10==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador10++;
                    break;
                    case 11:
                        if($contador11==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador11++;
                    break;
                    case 12:
                        if($contador12==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador12++;
                    break;
                    case 13:
                        if($contador13==0){
                            echo("<img src='./img/Act4_3_".$linea[$i].".jpg' width=5% height=5%>");
                        }else{
                            $linea[$i]="";
                            echo("");
                        }
                        $contador13++;
                    break;
                }
            }
       ?>
    </body>
</html>