<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad05Actividad01_1
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
                
                $sql = 'DROP TABLE dbname_dbo_Act1_Ej1;';
                $bd->query($sql);

                $sql = 'DROP TABLE dbname_dbo_Alumnos;';
                $bd->query($sql);

                $sql = "CREATE TABLE dbname_dbo_Act1_Ej1 (
                    pk_Id INT PRIMARY KEY,
                    usuario VARCHAR (255) NOT NULL,
                    contraseña VARCHAR (255) NOT NULL,
                    nivel INT NOT NULL
                    );";
                $bd->query($sql);

                $sql = "INSERT INTO dbname_dbo_Act1_Ej1 (
                    pk_Id,
                    usuario,
                    contraseña,
                    nivel
                )
                VALUES
                    (
                        1,
                        'saulas73@educastur.es',
                        3131,
                        1
                    ),
                    (
                        2,
                        'saulalsafp@gmail.com',
                        3131,
                        2
                    );";
                $bd->query($sql);

                $sql = 'CREATE TABLE dbname_dbo_Alumnos (
                    pk_Id INT PRIMARY KEY AUTO_INCREMENT,
                    nombre VARCHAR (255) NOT NULL,
                    curso VARCHAR (255) NOT NULL
                    );';
                $bd->query($sql);

                $sql = "INSERT INTO dbname_dbo_Alumnos (
                    pk_Id,
                    nombre,
                    curso
                )
                VALUES
                    (
                        1,
                        'Saul',
                        '1ºDaw'
                    ),
                    (
                        2,
                        'Pablo',
                        '1ºDaw'
                    ),
                    (
                        3,
                        'Tomas',
                        '2ºDaw'
                    ),
                    (
                        4,
                        'Mario',
                        '2ºDaw'
                    ),
                    (
                        5,
                        'Borja',
                        '2ºDaw'
                    );";
                $bd->query($sql);

                $bd = null;
            } catch (PDOException $e) {
                echo 'Falló la conexión: '.$e->getMessage();
            }
       ?>
    </body>
</html>