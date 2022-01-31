/*
Saúl Alonso Sánchez.
*/

//Ej1
/*
var numeros = [1,3,5,7,9];
console.log(numeros);
var numeros2  = numeros.map(function(num) {
  return Math.pow(num,2);
});
console.log(numeros2);
*/

//Ej2

/*
var cadena = ["uno","dos","tres","cuatro","cinco"];
Lista(cadena);
function Lista(cadena) {
    const lista = cadena.map((linea) =>
                    "<li>"+linea+"</li>"
                );
                let texto="";
                lista.forEach(indice => {
                    texto = texto + indice;
                });
                document.write(texto);
            }
*/

//Ej3

/*
var numerosEj2 = [1,2,3,4,5,6];
let sumas = (valorAnterior, valorActual) => valorAnterior + valorActual;
alert(numerosEj2.reduce(sumas));
*/

//Ej4

/*
var numerosEj2 = [1,2,3,4,5,6];
var listaf=numerosEj2.filter(filtro);
function filtro(numero) {
    if(numero>3){
        return numero;
    }else{

    }
}
alert(listaf);
*/

//Ej5

/*
var edades = [16,17,18,19,20];
var media = (total,actual) => total +actual;
console.log((edades.reduce(media))/(edades.length));
*/

//Ej6

/*
var notas1 = [10,8,4.5];
var notas2 = [5.5,8,4.5];
var notas3 = [1,8,3.7,8];
var notas4 = [5,9,3.5,8.9];

var notas = [notas1,notas2,notas3,notas4] 
var media = (total,actual) => total +actual;
var finales = notas.map(redu);
function redu(nota){
    return (nota.reduce(media)/(nota.length));
}
console.log(finales);
*/