<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad05Actividad01_02
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

                $sql = 'SELECT * from dbname_dbo_Alumnos';
                $resultado=$bd->query($sql);
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
            if($_SESSION["nivel"]=="2"){
                echo "<table border='1px'>";
                foreach ($resultado as $elemento => $valor) {
                    echo("<tr>");
                    echo("<td>".$valor['curso']."</td>");
                    echo("<td>".$valor['nombre']."</td>");
                    echo("</tr>");
                }
                echo "</table>";
            }
            if($_SESSION["nivel"]=="1"){
                agregar($resultado);
            }
            function escribir_Tabla($resultado){
                    $dsn = 'mysql:dbname=dbname;host=db';
                    $usuario = 'alumnado';
                    $clave = 'alumnado';
                    try {
                        $bd = new PDO($dsn, $usuario, $clave);

                        $sql = 'SELECT * from dbname_dbo_Alumnos';
                        $resultado=$bd->query($sql);
                    } catch (PDOException $e) {
                        echo 'Falló la conexión: '.$e->getMessage();
                    }
                    echo "<br><table border='1px'>";
                    foreach ($resultado as $elemento => $valor) {
                        echo("<tr>");
                        echo("<td>".$valor['curso']."</td>");
                        echo("<td>".$valor['nombre']."</td>");
                        echo("</tr>");
                    }
                    echo "</table>";
                }
            function agregar($array2){
                echo(
                    "<form action='".$_SERVER['PHP_SELF']."'>
                    Curso: <input type='text' name='curso' value=''>
                    Nombre: <input type='text' name='nombre' value=''>
                    <input type='submit' action='agregar()'>
                    </form>"
                );
                if($_REQUEST['nombre'] || $_REQUEST['curso']){

                    if($_REQUEST['nombre']=="" && $_REQUEST['curso']==""){
                        echo "<p>DEBE INTRODUCIR UN NOMBRE.</p>";
                    }elseif($_REQUEST['nombre']=="" && $_REQUEST['curso']!==""){
                        echo "<p>DEBE INTRODUCIR UN NOMBRE.</p>";
                    }elseif($_REQUEST['nombre']!="" && $_REQUEST['curso']==""){
                        $dsn = 'mysql:dbname=dbname;host=db';
                        $usuario = 'alumnado';
                        $clave = 'alumnado';
                        try {
                            $bd = new PDO($dsn, $usuario, $clave);
                            
                            $sql = "DELETE FROM dbname_dbo_Alumnos WHERE nombre='".$_REQUEST['nombre']."';";
                            $bd->query($sql);
                            echo "<p>Delete realizado con éxito.</p>";
                        } catch (PDOException $e) {
                            echo 'Falló la conexión: '.$e->getMessage();
                        }
                    }elseif($_REQUEST['nombre']!="" && $_REQUEST['curso']!=""){
                        $dsn = 'mysql:dbname=dbname;host=db';
                        $usuario = 'alumnado';
                        $clave = 'alumnado';
                        try {
                            $bd = new PDO($dsn, $usuario, $clave);
                            $sql = "INSERT INTO dbname_dbo_Alumnos (curso, nombre)
                            VALUES ('".$_REQUEST['curso']."','".$_REQUEST['nombre']."');";
                            $bd->query($sql);
                            echo "<p>Insert realizado con exito.</p>";
                        } catch (PDOException $e) {
                            echo 'Falló la conexión: '.$e->getMessage();
                        }
                    }
                }
                escribir_Tabla($array2);
            }
            echo("<br><a href='/Tema5/Actividad01/logout05010131.php'><button type='submit'>Logout</button></a><br>");
        ?>
    </body>
    </html>