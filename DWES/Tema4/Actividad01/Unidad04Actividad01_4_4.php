<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad01_4_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
            <input type="number" name="num1" min=1 max=3>
            <input type="number" name="num2" min=100 max=1000>
            <input type="submit">
        </form>
        <?php
            $orf=$_GET["num1"];
            $orr=$_GET["num2"];
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