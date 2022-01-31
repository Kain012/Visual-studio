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
        <form>
            Correo: <input type='email' name='correo'>
            Contraseña: <input type='password' name='pass'>
            <input type='submit'>
        </form>
        <?php
        if(isset($_GET["correo"])){
            $email=$_GET["correo"];
        }else{
            $email="";
        }
        if(isset($_GET["pass"])){
            $pass=$_GET["pass"];
        }else{
            $pass="";
        }
            $patron="/^([a-z]([a-z0-9_]+))(@)((educastur)|(gmail))((.es)$|(.com)$)/";
            $patron2="/^([a-z]([a-z0-9_]+))(@)((gmail))((.es)$|(.com)$)/";
            if(preg_match($patron, $email))
            {
                if($email=="saulas73@educastur.es"&&$pass=="3131"){
                    $_SESSION["nivel"]="usuario";
                    echo"<p>Acceso conseguido</p>";
                    echo"<a href='/Tema4/Actividad03/principal040331.php'><button type='submit'>ACCEDER</button></a>";
                }elseif(preg_match($patron2, $email)&&$pass=="3131"){
                    $_SESSION["nivel"]="invitado";
                    echo"<p>Acceso conseguido</p>";
                    echo"<a href='/Tema4/Actividad03/principal040331.php'><button type='submit'>ACCEDER</button></a>";
                }else{
                    echo"Error en el campo : Correo/Contraseña.";
                }
            }else{
                echo"Añada el campo Correo.";
            }
       ?>
    </body>
</html>