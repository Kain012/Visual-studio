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
            if($_SESSION["nivel"]=="invitado"){
                mostrar_tabla();
            }elseif($_SESSION["nivel"]=="usuario"){
            
                mostrar_tabla();
                
                echo("<form method='POST' action='ficheros040331.php' enctype='multipart/form-data'>
                <div>
                <p>Archivo a subir:</p>
                <input type='file' name='uploadedFile' />
                </div>
                <input type='submit' name='uploadBtn' value='Upload' />
                </form>");
                if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
                    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
                        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
                        $fileName = $_FILES['uploadedFile']['name'];
                        $fileSize = $_FILES['uploadedFile']['size'];
                        $fileType = $_FILES['uploadedFile']['type'];
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));
                        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
                        if (in_array($fileExtension, $allowedfileExtensions)) {
                            $uploadFileDir = '/var/www/html/Tema4/Actividad03/ficheros_subidos/';
                            $dest_path = $uploadFileDir . $newFileName;
                            
                            if(move_uploaded_file($fileTmpPath, $dest_path))
                            {
                                $message ='Archivo correctamente subido.';
                            }
                            else
                            {
                                $message = 'Hubo algún error al mover el archivo al directorio.';
                            }
                            
                        }else{
                            $message = 'Extension no permitida. Use :<br>jpg, gif, png, zip, txt, xls, doc';
                        }
                        echo("$message");
                }
            }
            }else{
                echo("<p>Error de sesion vuelva a conectarse:</p><br>");
                echo("<a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a>");
            }
        
            echo("<br><a href='/Tema4/Actividad03/logout040331.php'><button type='submit'>Logout</button></a>");
            
            function mostrar_tabla(){
                $directorio="/var/www/html/Tema4/Actividad03/ficheros_subidos";
                $array = scandir($directorio);
                echo"<table border='black 1px solid'>";
                $tamaño=count($array);
                for($i=2;$i<$tamaño;$i++){
                    echo"<tr>";
                    echo"<td>";
                    echo"<p>".($i-1).":</p>";
                    echo"</td>";
                    echo"<td>";
                    echo"<a href=/Tema4/Actividad03/ficheros_subidos/$array[$i]>$array[$i]</a>";
                    echo"</td>";
                    echo"</tr>";
                }
                echo"</table>";
            }
        ?>
    </body>
</html>