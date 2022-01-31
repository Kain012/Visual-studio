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
        <form>
            Correo: <input type='email' name='correo'>
            Contraseña: <input type='password' name='pass'>
            <input type='submit'>
        </form>
        <?php
        echo '<p>Correos: saulas73@educastur.es (admin) // saulalsafp@gmail.com</p>';
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
            $dsn = 'mysql:dbname=dbname;host=db';
            $usuario = 'alumnado';
            $clave = 'alumnado';
            try {
                $bd = new PDO($dsn, $usuario, $clave);
    
                $sql = "SELECT * FROM dbname_dbo_Act1_Ej1 WHERE usuario='$email' AND contraseña='$pass'";
                $resultado=$bd->query($sql);
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
            $array['nivel']='0';
            foreach ($resultado as $elemento => $valor) {
                $array=$valor;
                
            }
            if($array['nivel']=="0"){
                echo"<p>Introduzca su correo.</p>";
            }elseif($array['nivel']=="1"){

                $_SESSION["nivel"]=$array['nivel'];
                $_SESSION["usuario"]=$array['usuario'];
                $_SESSION["contraseña"]=$array['contraseña'];

                echo"<p>Acceso conseguido</p>";
                echo"<a href='/Tema5/Actividad01/principal05010131.php'><button type='submit'>ACCEDER</button></a>";
            
            }elseif($array['nivel']=="2"){

                $_SESSION["nivel"]=$array['nivel'];
                $_SESSION["usuario"]=$array['usuario'];
                $_SESSION["contraseña"]=$array['contraseña'];

                echo"<p>Acceso conseguido</p>";
                echo"<a href='/Tema5/Actividad01/principal05010131.php'><button type='submit'>ACCEDER</button></a>";
            
            }else{
                echo"Error en el campo : Correo/Contraseña.";
            }
        ?>
    </body>
</html>