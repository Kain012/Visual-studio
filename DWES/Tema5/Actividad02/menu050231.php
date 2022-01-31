<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad05Actividad02
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        
        <?php
            if($_SESSION["nivel"]=="1"){
                echo("<p>Bienvenido usuario</p>
                <a href='/Tema5/Actividad02/abm050231.php'><button type='submit'>Alta, baja y modificación de datos</button></a>
                <a href='/Tema5/Actividad02/aleatorio050231.php'><button type='submit'>Selección aleatoria ponderada</button></a>
                <a href='/Tema5/Actividad02/logout050231.php'><button type='submit'>Logout</button></a>");
            }elseif($_SESSION["nivel"]=="2"){
                echo("<p>Bienvenido invitado</p>
                <a href='/Tema5/Actividad02/abm050231.php'><button type='submit'>Alta, baja y modificación de datos</button></a>
                <a href='/Tema5/Actividad02/aleatorio050231.php'><button type='submit'>Selección aleatoria ponderada</button></a>
                <a href='/Tema5/Actividad02/logout050231.php'><button type='submit'>Logout</button></a>");
            }else{
                echo("<p>Error de sesion vuelva a conectarse:</p><br>");
                echo("<a href='/Tema5/Actividad02/logout050231.php'><button type='submit'>Logout</button></a>");
            }
       ?>
    </body>
</html>