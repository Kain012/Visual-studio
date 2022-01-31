<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad03_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        
        <?php
            $arrayAlumno =[["saul","1ºDaw"],["pablo","1ºDaw"],["mario","2ºDaw"],["tomas","2ºDaw"]];
            if($_SESSION["nivel"]=="invitado"){
                $arrayAlumno =[["saul","1ºDaw"],["pablo","1ºDaw"],["mario","2ºDaw"],["tomas","2ºDaw"]];
                echo "<table border='1px'>";
                foreach($arrayAlumno as $elemento){
                    echo("<tr>");
                    echo("<td>$elemento[0]</td>");
                    echo("<td>$elemento[1]</td>");
                    echo("</tr>");
                }
                echo "</table>";
            }
            if($_SESSION["nivel"]=="usuario"){
                agregar($arrayAlumno);
            }
            function escribir_Tabla($array){
                if(!isset($_SESSION["alumnado"])){
                    $_SESSION["alumnado"]=$array;
                }
                $arrayUsado=$_SESSION["alumnado"];
                echo "<table border='1px'>";
                foreach($arrayUsado as $elemento){
                    echo("<tr>");
                    echo("<td>$elemento[0]</td>");
                    echo("<td>$elemento[1]</td>");
                    echo("</tr>");
                }
                echo "</table>";
            }
            function agregar($arrayAlumno){
                echo(
                    "<form action='".$_SERVER['PHP_SELF']."'>
                    Curso: <input type='text' name='curso' value=''>
                    Nombre: <input type='text' name='nombre' value=''>
                    <input type='submit' action='agregar()'>
                    </form>"
                );
                if($_REQUEST['nombre']=="" && $_REQUEST['curso']==""){
                    echo("No ha intoducido el nombre");
                }elseif($_REQUEST['nombre']=="" && $_REQUEST['curso']!==""){
                    echo("No se ha añadido el campo obligatorio: Nombre.<br>");
                    echo("<br><a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a><br>");
                }elseif($_REQUEST['nombre']!="" && $_REQUEST['curso']==""){
                    $contador=0;
                $final=0;
                foreach($_SESSION["alumnado"] as $elemento){
                    if(in_array($_REQUEST['nombre'],$elemento)){
                        $final=$contador;
                    }
                    $contador++;
                    
                }
                echo($final);
                echo($_SESSION["alumnado"][$final]);
                unset($_SESSION["alumnado"][$final]);
                sort($_SESSION["alumnado"]);
                }elseif($_REQUEST['nombre']!="" && $_REQUEST['curso']!=""){
                    $nuevoUsuario=[$_REQUEST['nombre'],$_REQUEST['curso']];
                    array_push($_SESSION["alumnado"],$nuevoUsuario);
                }
                escribir_Tabla($arrayAlumno);
            }
            echo("<br><a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a><br>");
        ?>
    </body>
    </html>