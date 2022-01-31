<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad05Actividad02
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        
        <?php               
            $dsn = 'mysql:dbname=dbname;host=db';
            $usuario = 'alumnado';
            $clave = 'alumnado';
            try {
                $bd = new PDO($dsn, $usuario, $clave);

                $sql = 'SELECT * from dbname_dbo_abm';
                $resultado=$bd->query($sql);
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
            $total=0;
            echo "<br><table border='1px'>";
            foreach ($resultado as $elemento => $valor) {
                echo("<tr>");
                echo("<td>".$valor['nombre']."</td>");
                echo("<td>".$valor['numero']."</td>");
                echo("</tr>");
                $total+=$valor['numero'];
            }
            echo "</table>";
            $ale=rand(1,$total);
            $num=1;
            $dsn = 'mysql:dbname=dbname;host=db';
            $usuario = 'alumnado';
            $clave = 'alumnado';
            try {
                $bd = new PDO($dsn, $usuario, $clave);

                $sql = 'SELECT * from dbname_dbo_abm';
                $resultado=$bd->query($sql);
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
            foreach ($resultado as $elemento => $valor) {
                if($ale>$num && $ale<($num+$valor['numero'])){
                    $num+=$valor['numero'];
                    $valor['numero']= ($valor['numero']/10);
                    $sql = "UPDATE dbname_dbo_abm
                                SET numero='".$valor['numero']."'
                                WHERE 'nombre' = '".$valor['nombre']."';";
                    $bd->query($sql);
                    echo("<p>".$valor['nombre']."</p>");
                    echo "<br><table border='1px'>";
                    echo("<tr>");
                    echo("<td>".$valor['nombre']."</td>");
                    echo("<td>".$valor['numero']."</td>");
                    echo("</tr>");
                    echo "</table>";
                }else{
                    $num+=$valor['numero'];
                }
            }
        ?>
    </body>
</html>