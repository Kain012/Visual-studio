/*
Saúl Alonso Sánchez.
*/

//funcion anonima.

var array = [];
array[0] = "Lunes";
array[1] = "Martes";
array[2] = "Miercoles";
array[3] = "Jueves";
array[4] = "Viernes";
var cadena="";

alert(function (){
    for ( let i in array){
        cadena = cadena +(array[i]+ ", ");
    }
    return cadena;
});

//funcion flecha.

var array2 = [];
array2[0] = "Lunes2";
array2[1] = "Martes2";
array2[2] = "Miercoles2";
array2[3] = "Jueves2";
array2[4] = "Viernes2";

array2.forEach(variable => {alert(variable)});




/*
//Ejercicio funcion anonima
            var array = ["Lunes","Martes","Miercoles","Jueves","Viernes"];
            var cadena="";
            (function (){
                for ( let i in array){
                    cadena = cadena +(array[i]+ ", ");
                }
                alert(cadena);
            })();
*/