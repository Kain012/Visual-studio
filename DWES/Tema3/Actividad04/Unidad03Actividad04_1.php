<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad04_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $tiradasrand=rand(1,10);
            $texto="<img src='./img/Act4_1_";
            for($i=1;$i<=$tiradasrand;$i++){
                $numerodado=rand(1,6);
                $mtiradas[$i]=$numerodado;
                echo("<p>La tirada $i es: <img src='./img/Act4_1_".$mtiradas[$i].".jpg' width=3% height=3%></p>");
            }
            $dadoindependiente=rand(1,6);
            echo("<p>El dado independiente es: <img src='./img/Act4_1_".$dadoindependiente.".jpg' width=3% height=3%></p>");
            $posicion=0;
            foreach($mtiradas as $valor){
                $posicion++;
                if($valor != $dadoindependiente){
                    echo("<p>La tirada $posicion es: <img src='./img/Act4_1_".$valor.".jpg' width=3% height=3%></p>");
                }
           }
       ?>
    </body>
</html>