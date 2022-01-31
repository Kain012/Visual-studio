<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad04Actividad02_1
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            if(isset($_GET["enviado"])){
                $user=$_GET["user"];
                $pass=$_GET["pass"];
                if($user=="saul" && $pass=="3131"){
                    echo"Acceso conseguido";
                }else{
                    echo"<p>Acceso denegado</p>";
                    echo"<form>
                    <input type='text' name='user' value=$user>
                    <input type='text' name='pass' value=''>
                    <input type='submit' name='enviado'></form>";
                }
            }else{
                echo"<form>
                <input type='text' name='user' value=''>
                <input type='text' name='pass' value=''>
                <input type='submit' name='enviado'></form>";
            }
       ?>
    </body>
</html>