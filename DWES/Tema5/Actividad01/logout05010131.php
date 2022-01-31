<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
          Unidad05Actividad01_02
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        
        <?php
            $_SESSION = array();
            session_destroy();
            echo("<p>Log out correcto</p>");
            echo("<a href='/Tema5/Actividad01/login05010131.php'><button type='submit'>VOLVER AL LOGIN</button></a>");
       ?>
    </body>
</html>