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
            $dsn = 'mysql:dbname=dbname;host=db';
            $usuario = 'alumnado';
            $clave = 'alumnado';
            try {
                $bd = new PDO($dsn, $usuario, $clave);
                echo "Conexión a la base de datos con éxito.<br>";
                if($_SESSION['primera']){
                    $sql = 'DROP TABLE dbname_dbo_Act2;';
                    $bd->query($sql);
    
                    $sql = 'DROP TABLE dbname_dbo_abm;';
                    $bd->query($sql);
                }

                $sql = "CREATE TABLE dbname_dbo_Act2 (
                    pk_Id INT PRIMARY KEY,
                    tipo VARCHAR (255) NOT NULL,
                    patronCorreo VARCHAR (255) NOT NULL,
                    patronPass VARCHAR (255) NOT NULL,
                    nivel INT NOT NULL
                    );";
                $bd->query($sql);

                $sql = "INSERT INTO dbname_dbo_Act2 (
                    pk_Id,
                    tipo,
                    patronCorreo,
                    patronPass,
                    nivel
                )
                VALUES
                    (
                        1,
                        'educastur',
                        '/^[a-zA-Z0-9]{4,}@educastur{1}\.[a-zA-Z]{2,4}$/',
                        '/^[A-Z]{1,}[a-z]{3,}[0-9]{4,}$/',
                        1
                    ),
                    (
                        2,
                        'gmail',
                        '/^[a-zA-Z0-9]{4,}@gmail{1}\.[a-zA-Z]{2,4}$/',
                        '/^[A-Z]{1,}[a-z]{3,}[0-9]{4,}$/',
                        2
                    );";
                $bd->query($sql);

                $sql = 'CREATE TABLE dbname_dbo_abm (
                    pk_Id INT PRIMARY KEY AUTO_INCREMENT,
                    nombre VARCHAR (255) NOT NULL,
                    numero INTEGER NOT NULL
                    );';
                $bd->query($sql);

                $sql = "INSERT INTO dbname_dbo_abm (
                    pk_Id,
                    nombre,
                    numero
                )
                VALUES
                    (
                        1,
                        'Alberto',
                        100
                    ),
                    (
                        2,
                        'Begoña',
                        100
                    ),
                    (
                        3,
                        'Carlos',
                        100
                    ),
                    (
                        4,
                        'Diana',
                        100
                    ),
                    (
                        5,
                        'Eustaquio',
                        100
                    ),
                    (
                        6,
                        'Federico',
                        100
                    ),
                    (
                        7,
                        'Rosa',
                        100
                    ),
                    (
                        8,
                        'Veneciano',
                        100
                    );";
                $bd->query($sql);

                $bd = null;
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
            $_SESSION['primera']=true;
       ?>
    </body>
</html>