<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad02_3_2
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
                <p>Numero1</p>
                <input type='number' name='num1' min=1 max=10>
                <p>Numero2</p>
                <input type='number' name='num2' min=1 max=10>
                <p>Operador.</p>
                <p>0 +</p>
                <p>1 -</p>
                <p>2 *</p>
                <p>3 /</p>
                <p>4 %</p>
                <input type='number' name='ope' min=0 max=4>
                <input type='submit'></form>
        <?php
            $or1=$_GET["num1"];
            $or2=$_GET["num2"];
            for($i0=1;$i0<=$or1;$i0++){
                $horizontal[$i0]=$i0;
            }
            for($i1=1;$i1<=$or2;$i1++){
                $vertical[$i1]=$i1;
            }
            $op=$_GET["ope"];
            $ops=array("+","-","*","/","%");
            echo("<table border=solid 5px black>");
                echo("<tr>");
                    echo("<td>".$ops[$op]."</td>");
                    for($i2=1;$i2<=$or1;$i2++){
                        echo("<td>".$horizontal[$i2]."</td>");
                    }
                    echo("<tr>");
                    for($i3=1;$i3<=$or2;$i3++){
                        echo("<tr>");
                        echo("<td>".$vertical[$i3]."</td>");
                        for($i2=1;$i2<=$or1;$i2++){
                            echo("<td>".operacion($horizontal[$i2], $ops[$op], $vertical[$i3])."</td>");
                        }
                        echo("</tr>");
                    }
                echo("</tr>");
            echo("</table>");
            function operacion($n1,$op,$n2){
                $resultado=$n1.$op.$n2;
                eval("\$resultado2=$resultado;");
                return floor($resultado2);
            }
       ?>
    </body>
</html>