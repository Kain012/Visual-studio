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
        <form>
            Correo: <input type='email' name='correo'>
            Contraseña: <input type='password' name='pass'>
            <input type='submit'>
        </form>
        <?php
            if(isset($_GET["correo"])){
                $email=strip_tags($_GET["correo"]);
            }else{
                $email="";
            }
            if(isset($_GET["pass"])){
                $pass=strip_tags($_GET["pass"]);
            }else{
                $pass="";
            }
            $array['nivel']='0';
            $patronG="/gmail/";
            $patronE="/educastur/";
            if(preg_match($patronE,$email)){
                $tipo="educastur";
            }elseif(preg_match($patronG,$email)){
                $tipo="gmail";
            }else{
                $tipo="";
            }
            $dsn = 'mysql:dbname=dbname;host=db';
            $usuario = 'alumnado';
            $clave = 'alumnado';
            try {
                $bd = new PDO($dsn, $usuario, $clave);
    
                $sql = "SELECT * FROM dbname_dbo_Act2 WHERE tipo='$tipo'";
                $resultado=$bd->query($sql);
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
            foreach ($resultado as $elemento => $valor) {
                $array=$valor;
            }
            print_r($array);
            if($array['nivel']=="0"){
                echo"<p>Introduzca su correo.</p>";
            }elseif($array['nivel']=="1"){
                if(preg_match($array['patronCorreo'],$email) && preg_match($array['patronPass'],$pass)){
                    $_SESSION["nivel"]=$array['nivel'];
                    echo"<p>Acceso conseguido</p>";
                    echo"<a href='/Tema5/Actividad02/menu050231.php'><button type='submit'>ACCEDER</button></a>";
                }else{
                    echo "No coincide con el patron.";
                }
            }elseif($array['nivel']=="2"){
                if(preg_match($array['patronCorreo'],$email) && preg_match($array['patronPass'],$pass)){
                    $_SESSION["nivel"]=$array['nivel'];
                    echo"<p>Acceso conseguido</p>";
                    echo"<a href='/Tema5/Actividad02/menu050231.php'><button type='submit'>ACCEDER</button></a>";
                }else{
                    echo "No coincide con el patron.";
                }
            }else{
                echo"Error en el campo : Correo/Contraseña.";
            }
        ?>
    </body>
</html>