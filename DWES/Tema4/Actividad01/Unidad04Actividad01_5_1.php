<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad01_5_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
            <p>cantidad</p>
            <input type="number" name="cant" min=1 max=10>
            <p>radio</p>
            <input type="number" name="radio" min=50 max=750>
            <input type="submit">
        </form>
        <?php
            //genera un numero random del 1 al 10.
            $opcion=$_GET["cant"];
            //establece el radio para poder modificarlo luego.
            $radio=$_GET["radio"];
            //genera el cuadro para los circulos.
            echo "<svg height='1500' width='1500'>";
            $espacio=$radio;
            //bucle que se repite tantas veces como el random.
            for($i=0 ;$i<$opcion;$i++){
                //dibuja el circulo pertinente.
                echo "<circle cx='".($espacio+6)."' cy='".($espacio+6)."' r='$radio' stroke='darkblue' stroke-width ='5' fill='white'/>";
                //cambia el radio para reducirlo en cada uso.
                $radio=$radio-10;
            }
            echo "</svg>";
       ?>
    </body>
</html>