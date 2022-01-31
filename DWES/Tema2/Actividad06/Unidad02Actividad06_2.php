<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad02Actividad06_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
        //genera un numero random del 1 al 10.
            $opcion=rand(1,10);
            //establece el limite de la izquierda para poder modificarlo luego.
            $limitizq=56;
            //genera el cuadro para los circulos.
            echo "<svg height='1500' width='1500'>";
            //bucle que se repite tantas veces como el random.
            for($i=0 ;$i<$opcion;$i++){
                //dibuja el circulo pertinente.
                echo "<circle cx='$limitder' cy='56' r='50' stroke='darkblue' stroke-width ='5' fill='white'/>";
                //cambia el limite de la izquierda aumentadolo el diametro del circulo para colocarlo al final del anterior.
                $limitizq=$limitizq+100;
            }
            echo "</svg>";
        ?>
    </body>
</html>