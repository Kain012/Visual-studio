<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad04_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //refresca la pagina todo el tiempo.
            header("Refresh: 1; URL='Unidad02Actividad04_1.php'");
            //guarda las horas, minutos y segundos.
            $hora=date('h');
            $minuto=date('i');
            $segundo=date('s');
            //divide todos los numeros para guardarlos cada uno en una variable distinta.
            $horaU=$hora%10;
            $horaD=($hora-$horaU)/10;
            $minutoU=$minuto%10;
            $minutoD=($minuto-$minutoU)/10;
            $segundoU=($segundo%10);
            $segundoD=($segundo-$segundoU)/10;
            //muestra el reloj
            echo("<img src='./img/$horaD.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/$horaU.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/puntos.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/$minutoD.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/$minutoU.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/puntos.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/$segundoD.jpg' height='25%' width='12.5%'>");
            echo("<img src='./img/$segundoU.jpg' height='25%' width='12.5%'>");
       ?>
    </body>
</html>