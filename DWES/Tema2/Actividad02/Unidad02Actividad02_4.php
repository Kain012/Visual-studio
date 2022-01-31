<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad02_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            $orf=rand(1,3);
            $orr=rand(100,1000);
            if ($orf==1){
                echo("<img src='./img/circunferencia.png' width='".$orr."px' heigth='".$orr."px'/>");
            }elseif ($orf==2){
                echo("<img src='./img/triangulo.png' width='".$orr."px' heigth='".$orr."px'/>");
            }elseif($orf==3){
                echo("<img src='./img/cuadrado.png' width='".$orr."px' heigth='".$orr."px'/>");
            }
       ?>
    </body>
</html>