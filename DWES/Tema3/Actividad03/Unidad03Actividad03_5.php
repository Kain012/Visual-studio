<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad03Actividad03_5
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <?php
            //generamos el random random de las palabras.
            $or=rand(1,10);
            //generamos el random random de los idiomas.
            $ir=rand(1,4);
            //guardamos los idiomas.
            $idiomas=array(0=>"Español",1=>"Inglés",2=>"Alemán",3=>"Francés",4=>"Italiano");
            //guardamos las palabras en Español.
            $Palabras[$idiomas[0]][1]="Hola";
            $Palabras[$idiomas[0]][2]="Adios";
            $Palabras[$idiomas[0]][3]="Perro";
            $Palabras[$idiomas[0]][4]="Gato";
            $Palabras[$idiomas[0]][5]="Ratón";
            $Palabras[$idiomas[0]][6]="Leon";
            $Palabras[$idiomas[0]][7]="Gorila";
            $Palabras[$idiomas[0]][8]="Girafa";
            $Palabras[$idiomas[0]][9]="Mono";
            $Palabras[$idiomas[0]][10]="Loro";
            //guardamos las palabras en Inglés.
            $Palabras[$idiomas[1]][1]="Hello";
            $Palabras[$idiomas[1]][2]="Bye";
            $Palabras[$idiomas[1]][3]="Dog";
            $Palabras[$idiomas[1]][4]="Cat";
            $Palabras[$idiomas[1]][5]="Mouse";
            $Palabras[$idiomas[1]][6]="Lion";
            $Palabras[$idiomas[1]][7]="Gorilla";
            $Palabras[$idiomas[1]][8]="Giraffe";
            $Palabras[$idiomas[1]][9]="Monkey";
            $Palabras[$idiomas[1]][10]="Parrot";
            //guardamos las palabras en Alemán.
            $Palabras[$idiomas[2]][1]="Hallo";
            $Palabras[$idiomas[2]][2]="Wiedersehen";
            $Palabras[$idiomas[2]][3]="Hund";
            $Palabras[$idiomas[2]][4]="Katze";
            $Palabras[$idiomas[2]][5]="Maus";
            $Palabras[$idiomas[2]][6]="Löwe";
            $Palabras[$idiomas[2]][7]="Gorilla";
            $Palabras[$idiomas[2]][8]="Gorilla";
            $Palabras[$idiomas[2]][9]="Affe";
            $Palabras[$idiomas[2]][10]="Papagei";
            //guardamos las palabras en Francés.
            $Palabras[$idiomas[3]][1]="Salut";
            $Palabras[$idiomas[3]][2]="Adieu";
            $Palabras[$idiomas[3]][3]="Chien";
            $Palabras[$idiomas[3]][4]="Chat";
            $Palabras[$idiomas[3]][5]="Souris";
            $Palabras[$idiomas[3]][6]="Lion";
            $Palabras[$idiomas[3]][7]="Gorille";
            $Palabras[$idiomas[3]][8]="Girafe";
            $Palabras[$idiomas[3]][9]="Singe";
            $Palabras[$idiomas[3]][10]="Perroquet";
            //guardamos las palabras en Italiano.
            $Palabras[$idiomas[4]][1]="Ciao";
            $Palabras[$idiomas[4]][2]="Ciao";
            $Palabras[$idiomas[4]][3]="Cane";
            $Palabras[$idiomas[4]][4]="Gatto";
            $Palabras[$idiomas[4]][5]="Topo";
            $Palabras[$idiomas[4]][6]="Leone";
            $Palabras[$idiomas[4]][7]="Gorilla";
            $Palabras[$idiomas[4]][8]="Giraffa";
            $Palabras[$idiomas[4]][9]="Scimmia";
            $Palabras[$idiomas[4]][10]="Pappagallo";
            //Mostramos todo por pantalla.
            echo("<p>La palabra: ".$Palabras[$idiomas[0]][$or]." en ".$idiomas[$ir]." es ".$Palabras[$idiomas[$ir]][$or].".</p>");
       ?>
    </body>
</html>