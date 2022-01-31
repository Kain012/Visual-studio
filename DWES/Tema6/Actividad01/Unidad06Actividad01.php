<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Unidad06Actividad01_01
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
    </head>

    <body>
        <h1>Alumno 31. Saúl Alonso Sánchez</h1>
        <form>
            <input type="number" name="num1">
            <input type="number" name="num2">
            <input type="submit">
        </form>
        <?php
        use UI\Draw\Color;
           class Grafico{
               protected boolean $visible;
               protected string $color;
               public function mostrar(){
                   $this->visible=true;
               }
               public function ocultar(){
                   $this->visible=false;
               }
               public function getVisible(){
                   return($this->visible);
               }
               public function getColor(){
                   return($this->color);
               }
               public function setColor(string $color){
                   $this->color=$color;
               }
               public function dibujar(){
               }
               public function mover(int $x, int $y){
               }
               public function desplazar(int $dx, int $dy){
               }
           }


           class Punto extends Grafico{
            private int $x;
            private int $y;
            public function getX(){
            return($this->x);
            }
            public function setX(int $x){
            $this->x=$x;
            }
            public function getY(){
            return($this->x);
            }
            public function setY(int $y){
            $this->y=$y;
            }
            public function dibujar(){
            }
            public function mover(int $x, int $y){
            }
            public function desplazar(int $dx, int $dy){
            }
        }
        
        class Circulo extends Grafico implements Punto{
            private Punto $centro;
            private int $radio;
            public function inicializar(int $x, int $y, int $radio){
                $this->centro = new Punto($x,$y);
                $this->radio = $radio;
            }
            public function getCentro(){
                return($this->centro);
            }
            public function setCentro(int $x, int $y){
                $this->centro = new Punto($x,$y);
            }
            public function getRadio(){
                return($this->radio);
            }
            public function setRadio(int $radio){
                $this->radio=$radio;
            }
            public function aumentar(int $radio){
                $this->radio+=$radio;
            }
            public function reducir(int $radio){
                $this->radio-=$radio;
            }
            public function dibujar(){
                return("<svg height='100%' width='100%'> <circle cx='".$this->getX."' cy='".$this->getY."' r='".$this->getRadio."' stroke='black' stroke-width ='5' fill='".$this->getColor."'/></svg>");
            }
            public function mover(int $x, int $y){
                $this->centro->x=$x;
                $this->centro->y=$y;
            }
            public function desplazar(int $dx, int $dy){
                $diferenciaX=$this->centro->x-$dx;
                $diferenciaY=$this->centro->y-$dy;
                $this->centro->x+=$diferenciaX;
                $this->centro->y+=$diferenciaY;
            }
        }   


        class Poligono extends Grafico implements Punto{
            protected int $numeroVertices;
            protected Punto $vertices;
            public function GetNumeroVertices(){
                return($this->numeroVertices);
            }
            public function insertarVertice(Punto $p){
                $this->vertices[]=$p;
            }
            public function getVertice(int $n){
                return($this->vertices[$this->vertices.length()-1]);
            }
            public function mover(int $x, int $y){
                $diferenciaX=$this->vertices[0]->x-$x;
                $diferenciaY=$this->vertices[0]->y-$y;
                $this->vertices[0]->x=$x;
                $this->vertices[0]->y=$y;
                foreach ($this->vertices as $key => $value) {
                    $this->vertices[$key]->x+=$diferenciaX;
                    $this->vertices[$key]->y+=$diferenciaY;
                }
            }
            public function desplazar(int $dx, int $dy){
                $diferenciaX=$this->vertices[0]->x-$x;
                $diferenciaY=$this->vertices[0]->y-$y;
                $this->vertices[0]->x=$diferenciaX;
                $this->vertices[0]->y=$diferenciaY;
                foreach ($this->vertices as $key => $value) {
                    $this->vertices[$key]->x+=$diferenciaX;
                    $this->vertices[$key]->y+=$diferenciaY;
                }
            }
        } 
        class Triangulo extends Poligono{
            public function inicializar(int $x1, int $y1, int $x2, int $y2, int $x3, int $y3){
                $this->vertices[]=[new Punto($x1,$y1),new Punto($x2,$y2),new Punto($x3,$y3)];
            }
            public function dibujar(){
                return("<svg height='100%' width='100%'><polygon points='".$this->vertices[0]->x.",".$this->vertices[0]->y." ".$this->vertices[1]->x.",".$this->vertices[1]->y." ".$this->vertices[2]->x.",".$this->vertices[2]->y."' style='fill:".$this->color."; stroke:black; stroke-width:5'/></svg>");
            }
        }
        class Cuadrado extends Poligono{
            private int $ancho;
            private int $alto;
            public function inicializar(int $x, int $y, int $ancho,int $alto){
                $this->vertices[]=[new Punto($x,$y)];
                $this->ancho=$ancho;
                $this->alto=$alto;
            }
            public function dibujar(){
                return("<svg height='100%' width='100%'><rect x='".$this->vertices[0]->x."' y='".$this->vertices[0]->y."' width='".$this->ancho."' height='".$this->alto."' fill='".$this->color."' /></svg>");
            }
        }
        
       ?>
    </body>
</html>