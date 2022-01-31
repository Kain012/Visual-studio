<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad03_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        
        <?php
            if($_SESSION["nivel"]=="usuario"){
                echo("<p>Bienvenido usuario</p>
                <a href='/Tema4/Actividad03/alumnado04030131.php'><button type='submit'>Alumnado</button></a>
                <a href='/Tema4/Actividad03/ficheros040331.php'><button type='submit'>Ficheros</button></a>
                <a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a>");
            }elseif($_SESSION["nivel"]=="invitado"){
                echo("<p>Bienvenido invitado</p>
                <a href='/Tema4/Actividad03/alumnado04030131.php'><button type='submit'>Alumnado</button></a>
                <a href='/Tema4/Actividad03/ficheros040331.php'><button type='submit'>Ficheros</button></a>
                <a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a>");
            }else{
                echo("<p>Error de sesion vuelva a conectarse:</p><br>");
                echo("<a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a>");
            }
       ?>
    </body>
</html>