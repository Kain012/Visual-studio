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
            if($_SESSION["nivel"]=="2"){
                escribir_Tabla($resultado);
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

                        $sql = 'SELECT * from dbname_dbo_abm';
                        $resultado=$bd->query($sql);
                    } catch (PDOException $e) {
                        echo 'Falló la conexión: '.$e->getMessage();
                    }
                    echo "<br><table border='1px'>";
                    foreach ($resultado as $elemento => $valor) {
                        echo("<tr>");
                        echo("<td>".$valor['nombre']."</td>");
                        echo("<td>".$valor['numero']."</td>");
                        echo("</tr>");
                    }
                    echo "</table>";
                }
            function agregar($array2){
                echo(
                    "<form action='".$_SERVER['PHP_SELF']."'>
                    Nombre: <input type='text' name='nombre' value=''>
                    Numero: <input type='text' name='numero' value=''>
                    <input type='submit' action='agregar()'>
                    </form>"
                );
                if($_REQUEST['nombre'] || $_REQUEST['numero']){
                    $nombre= strip_tags($_REQUEST['nombre']);
                    $numero= strip_tags($_REQUEST['numero']);
                    
                    if($nombre=="" && $numero==""){
                        echo "<p>DEBE INTRODUCIR UN NOMBRE.</p>";
                    }elseif($nombre=="" && $numero!==""){
                        echo "<p>DEBE INTRODUCIR UN NOMBRE.</p>";
                    }elseif($nombre!="" && $numero==""){
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
                        echo "<br><table border='1px'>";
                        foreach ($resultado as $elemento => $valor) {
                            $array[] = $valor;
                        }
                        if(in_array($nombre,$array)){
                            $dsn = 'mysql:dbname=dbname;host=db';
                            $usuario = 'alumnado';
                            $clave = 'alumnado';
                            try {
                                $bd = new PDO($dsn, $usuario, $clave);
                                $sql = "DELETE FROM dbname_dbo_abm WHERE 'nombre' = '".$nombre."';";
                                $bd->query($sql);
                                echo "<p>Insert realizado con exito.</p>";
                            } catch (PDOException $e) {
                                echo 'Falló la conexión: '.$e->getMessage();
                            }
                        }else{
                            $dsn = 'mysql:dbname=dbname;host=db';
                            $usuario = 'alumnado';
                            $clave = 'alumnado';
                            try {
                                $bd = new PDO($dsn, $usuario, $clave);
                                
                                $sql = "INSERT INTO dbname_dbo_abm (nombre, numero)
                                VALUES ('".$nombre."','100');";
                                $bd->query($sql);
                                echo "<p>Insert realizado con éxito.</p>";
                            } catch (PDOException $e) {
                                echo 'Falló la conexión: '.$e->getMessage();
                            }
                        }
                    }elseif($nombre!="" && $numero!=""){
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
                        echo "<br><table border='1px'>";
                        foreach ($resultado as $elemento => $valor) {
                            $array[] = $valor;
                        }
                        
                        if(in_array($nombre,$array)){
                            $dsn = 'mysql:dbname=dbname;host=db';
                            $usuario = 'alumnado';
                            $clave = 'alumnado';
                            try {
                                $bd = new PDO($dsn, $usuario, $clave);
                                $sql = "UPDATE dbname_dbo_abm
                                SET numero='".$numero."'
                                WHERE 'nombre' = '".$nombre."';";
                                $bd->query($sql);
                                echo "<p>Insert realizado con exito.</p>";
                            } catch (PDOException $e) {
                                echo 'Falló la conexión: '.$e->getMessage();
                            }
                        }else{
                            $dsn = 'mysql:dbname=dbname;host=db';
                            $usuario = 'alumnado';
                            $clave = 'alumnado';
                            try {
                                $bd = new PDO($dsn, $usuario, $clave);
                                
                                $sql = "INSERT INTO dbname_dbo_abm (nombre, numero)
                                VALUES ('".$nombre."','".$numero."');";
                                $bd->query($sql);
                                echo "<p>Insert realizado con éxito.</p>";
                            } catch (PDOException $e) {
                                echo 'Falló la conexión: '.$e->getMessage();
                            }
                        }
                    }
                }
                escribir_Tabla($array2);
            }
            echo("<br><a href='/Tema5/Actividad02/logout050231.php'><button type='submit'>Logout</button></a><br>");
        ?>
    </body>
    </html>