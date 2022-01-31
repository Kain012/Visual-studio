<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Ajedrez de Saúl
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
        <style>
            table{
                width:80%;
                height:100%;
                text-align:center;
            }
            table tr .impar{
                background-color:#6E2C00;
                color:white;
            }   
         </style>
    </head>

    <body>
        <form>
            <p>Fila de la pieza de inicio de movimiento:<input type="char" name="F" min="A" max="H"></p>
            <p>Columna de la pieza de inicio de movimiento:<input type="number" name="C" min=1 max=8></p>
            <button> Enviar </button>
        </form>
        <br>
        <br>
        <?php
            if($_GET["F"]&&$_GET["C"]){
                $F=$_GET["F"];
                $C=$_GET["C"];
            }else{
                $F="I";
                $C=0;
            }
            $ronda=0;
            $tamaño=75;
            $puede=false;
            $letras=[0=>"A",1=>"B",2=>"C",3=>"D",4=>"E",5=>"F",6=>"G",7=>"H"];
            if($ronda==0){
                for($i=0;$i<8;$i++){$piezas[$letras[1]][$i]="peonN";$piezas[$letras[6]][$i]="peonB";}
                $piezas[$letras[0]][0]="torreNI";$piezas[$letras[0]][1]="caballoNI";$piezas[$letras[0]][2]="alfilNI";$piezas[$letras[0]][3]="reinaN";$piezas[$letras[0]][4]="reyN";$piezas[$letras[0]][5]="alfilND";$piezas[$letras[0]][6]="caballoND";$piezas[$letras[0]][7]="torreND";$piezas[$letras[7]][0]="torreBI";$piezas[$letras[7]][1]="caballoBI";$piezas[$letras[7]][2]="alfilBI";$piezas[$letras[7]][3]="reinaB";$piezas[$letras[7]][4]="reyB";$piezas[$letras[7]][5]="alfilBD";$piezas[$letras[7]][6]="caballoBD";$piezas[$letras[7]][7]="torreBD";
            }else{
                if(isset($piezas[$F][$C])){

                }
            }
            echo("<div width=".$tamaño."px height=".$tamaño."px backgroud-color=green>");
            echo("<table border=1>");
            echo("<tr>");
            for($i=0;$i<=8;$i++){
                if($i==0){
                    echo("<td>Ronda: $ronda</td>");
                }else{
                    echo("<td>$letras[$i]</td>");
                }
            }
            echo("</tr>");
            for($fila=0;$fila<8;$fila++){
                echo("<tr width=".$tamaño."px height=".$tamaño."px>");
                echo("<td width=".$tamaño."px height=".$tamaño."px>".$letras[$fila]."</td>");
                
                for($columna=0;$columna<8;$columna++){
                    if(($fila+$columna)%2==0){
                        echo("<td class=\"par\" width=".$tamaño."px height=".$tamaño."px>");
                        if(isset($piezas[$letras[$fila]][$columna])){
                            //echo($piezas[$fila][$columna]);
                            echo("<img src='./img/".$piezas[$letras[$fila]][$columna].".jpg' width=60% height=90%>");
                        }
                        echo("</td>");
                    }else{
                        echo("<td class=\"impar\" width=".$tamaño."px height=".$tamaño."px>");
                        if(isset($piezas[$letras[$fila]][$columna])){
                            //echo($piezas[$fila][$columna]);
                            echo("<img src='./img/".$piezas[$letras[$fila]][$columna].".jpg' width=60% height=90%>");
                        }
                        echo("</td>");
                    }
                }
                echo("</tr>");
            }
            echo("</table>");
            echo("</div>");
            torre($piezas,$F,$C);
            $ronda++;

            function torre($piezas,$F,$C){
                $puede=false;
                $letras=[0=>"A",1=>"B",2=>"C",3=>"D",4=>"E",5=>"F",6=>"G",7=>"H"];
                foreach($letras as $indice => $valor){$letras[$indice][$valor]=$letras[$valor][$indice];}
                if(isset($piezas[$FI][$CI])){
                    for($i=$letras[$FI]+1;$i<$letras[$FF];$i++){
                        if(isset($piezas[$i][$CI])){
                            echo("Movimiento Prohibido");
                            $puede=false;
                        }
                    }
                    for($i=$letras[$CI];$i>$letras[$CF];$i--){
                        if(isset($piezas[$i][$i])){
                            echo("Movimiento Prohibido");
                            $puede=false;
                        }
                    }
                    if($puede==true){
                        $piezas[$FI][$CI]=$piezas[$FF][$CF];
                    }
                }
            }
       ?>
    </body>
</html>