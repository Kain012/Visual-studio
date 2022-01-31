<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad06_4
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
        //genera un numero random del 2 al 5.
            $opcion=rand(2,5);
            //establece el radio
            $radio=50;
            //establece el limite de la izquierda de la primera columna.
            $limitizq=56;
            //establece el limite de la izquierda de la segunda columna.
            $limitizq2=106;
            //establece el limite superior de la primera columna.
            $limitarr=56;
            //establece el limite superior de la segunda columna.
            $limitarr2=136;
            //genera el cuadro para los circulos.
            echo "<svg height='1500' width='1500'>";
            //bucle que se repite tantas veces como el random para la primera columna.
            for($i=0;$i<$opcion;$i++){
                    //dibuja el circulo pertinente.
                    echo "<circle cx='$limitizq' cy='$limitarr' r='$radio' stroke='darkblue' stroke-width ='5' fill='white' opacity='0.5'/>";
                    //modifica el limite de la izquierda.
                    $limitizq = $limitizq+90;
            }
            //bucle que se repite una vez menos que el random para la segunda columna.
            for($a=1;$a<$opcion;$a++){
                //dibuja el circulo pertinente.
                echo "<circle cx='$limitizq2' cy='$limitarr2' r='$radio' stroke='darkblue' stroke-width ='5' fill='white' opacity='0.5'/>";
                //modifica el limite de la izquierda.
                $limitizq2 = $limitizq2+90;
            }
            echo "</svg>";
        ?>
    </body>
</html>