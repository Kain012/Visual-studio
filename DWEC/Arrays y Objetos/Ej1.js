class Persona {
    constructor(nombre, apellido1, apellido2) {
        this.nombre = nombre;
        this.apellido1 = apellido1;
        this.apellido2 = apellido2;
    }
}
var nombres = ["Agata", "Anibal", "Agustin", "Benjamin", "Matias", "Mirko", "Monica", "Santiago", "Sergio", "Silene"];
var apellidos = ["Jimenez", "Cortes", "Ramos", "Martinez", "Cano", "Dragic", "Gaztambide", "Lopez", "Marquina", "Oliveira", "Alonso", "Sanchez", "Espina", "Perez", "Ramos", "Garcia", "Perez", "Rodriguez", "Romero", "Diaz"];
var lista = [];
var min = 0;
for (i = 0; i < 10; i++) {
    var nAleNom = random(min, (nombres.length - 1));
    var nAleApe1 = random(min, (apellidos.length - 1));
    var nAleApe2 = random(min, (apellidos.length - 1));
    lista[i] = [new Persona(nombres[nAleNom], apellidos[nAleApe1], apellidos[nAleApe2])];
    console.log(nAleNom, nAleApe1, nAleApe2);
}
var texto = "";
var total = 0;
var opcion = prompt("Introduzca un nombre");

nombre(lista);

tabla(lista);

if (total == 0) {
    texto = "";
    nombre(lista);
    texto += " No se encontro ningun registro con apellidos iguales";
}
document.body.innerHTML = texto;
function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}
function nombre(lista) {
    lista.forEach(element => {
        if (element[0]["nombre"] == opcion) {
            texto += ("<p>" + element[0]["nombre"] + " " + element[0]["apellido1"] + " " + element[0]["apellido2"] + "</p>");
        }
        console.log(element);
    });
}
function tabla(lista) {
    texto += ("<table border='black 1px solid'>");
    lista.forEach(element => {
        if (element[0]["apellido1"] == element[0]["apellido2"]) {
            texto += ("<tr><td>" + element[0]["nombre"] + "</td><td>" + element[0]["apellido1"] + "</td><td>" + element[0]["apellido2"] + "</td>");
            total++;
        }
        console.log(element);
    });
    texto += ("</table>");
}